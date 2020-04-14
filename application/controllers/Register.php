<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_User');
	}

	public function index()
	{
		// $this->load->view('header');
		
		$this->load->view('register');
	}

	public function register(){
		$nama_depan = $this->input->post('nama_depan', true);
		$nama_belakang = $this->input->post('nama_belakang', true);
		$email = $this->input->post('email', true);
		$username =  $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$re_password = $this->input->post('re-password', true);
		
		if ($password == $re_password){
			if(sizeof($this->M_User->get_user($username)) == 0){
				//username belum ada didatabase, bisa register
				$data = [
						'nama_depan' => $this->input->post('nama_depan', true),
						'nama_belakang' => $this->input->post('nama_belakang', true),
						'email' => $this->input->post('email', true),
						'username' => $this->input->post('username', true),
						'password' => $this->input->post('password', true)
					];
					$insert = $this->M_User->insert_new_user($data);
					if(!$insert){
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('register', $error);
					} else {
						redirect('/profile'); //register berhasil, dialihkan ke page profile
					}

			}else{
				//username sudah ada di database
				$_SESSION['error'] = 'Username sudah ada';
				$this->load->view('register');
			}
		}else{
			//password tidak sama
			$_SESSION['error'] = 'Password dan Re-Enter Password harus sama';
			$this->load->view('register');
		}








	}




}
?>