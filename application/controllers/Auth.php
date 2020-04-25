<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Auth');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Terlogout Otomatis Karena Sudah Login Sebelumnya</div>');
            redirect('auth');
        } else {
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'User Login';
                // $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login', $data);
                $this->load->view('templates/auth_footer');
            } else {
                $this->_login();
            }
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $found = $this->M_Auth->login($username, $password);
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($found) {
            if ($user['password'] == $password) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            // usernya ga ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak ada. Silahkan register</div>');
            redirect('auth');
        }
    }



    public function register()
    {

        $this->form_validation->set_rules('nama_depan', 'Nama_depan', 'required|trim');
        $this->form_validation->set_rules('nama_belakang', 'Nama_belakang', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email tidak valid!',
            'is_unique' => 'Email telah terdaftar!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'Username sudah digunakan!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repassword]', [
            'matches' => 'password dan re-password harus sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('repassword', 'Repassword', 'required|trim|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'User Register';
            // $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama_depan' => $this->input->post('nama_depan', true),
                'nama_belakang' => $this->input->post('nama_belakang', true),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email', true),
                'password' => $this->input->post('password'),
                'image' => 'default.jpg',
                'role_id' => 2,
                'date_created' => time()
            ];

            $this->M_Auth->insertUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda telah dibuat. Silahkan login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout berhasil!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'TIDAK MEMILIKI AKSES!';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('auth/blocked');
        $this->load->view('templates/footer', $data);
    }

    public function appointment()
    {
        $data['rs'] = $this->db->get_where('Hospital', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['title'] = 'Appointment Rumah Sakit';
        $this->load->view('templates/header', $data);
        $this->load->view('user/Appointment', $data);
        $this->load->view('templates/footer', $data);
    }
}
