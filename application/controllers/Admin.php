<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_User');
	}

	public function index()
	{
        if(isset($_SESSION['username'])){
			$data['users'] = $this->M_User->get_profile($_SESSION['username']);
			$this->load->view('admin');
		} else {
			redirect('/login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/login');
	}
}
?>