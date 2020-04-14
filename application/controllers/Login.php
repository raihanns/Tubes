<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_User');
	}

	public function index()
	{
        
		$this->load->view('login');
	}

	public function login(){
		$data['username'] = $this->input->post('username', true);
		$data['data_user'] = $this->M_User->get_user($data['username']);
		if($this->M_User->login($data)){
			$_SESSION['username'] = $data['username'];
			redirect('/admin');
		} else {
			#if not true show error message
			$_SESSION['error_message'] = 'Login gagal';
			$this->load->view('login');
		}

	}
}
?>