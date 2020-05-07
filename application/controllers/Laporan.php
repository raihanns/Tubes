<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Hospital');
        is_logged_in();
    }

    public function index(){
      $data['listHospital'] = $this->M_Hospital->getAllHospital();
      $data['title'] = 'Laporan';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('templates/header', $data);
      $this->load->view('admin/laporan/index', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/footer');
    }

    public function tampil($name){
      $data['rs'] = $this->M_Hospital->Laporan($name);
      $data['title'] = 'Laporan';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('templates/header', $data);
      $this->load->view('admin/laporan/viewtable', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/footer');
    }



}
