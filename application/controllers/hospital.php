<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hospital extends CI_Controller {



	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_Hospital');
	}

	public function index()
	{
		$data['title'] = 'Hospitals';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('Hospital');
		$this->load->view('templates/footer');
	}


}
?>
