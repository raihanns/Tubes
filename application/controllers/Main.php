<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Auth');
	}

	public function index()
	{
		$data['title'] = 'HealtHub, Your Medical Healthcare';
		$this->load->view('templates/auth_header',$data);
		$this->load->view('Main');
		$this->load->view('templates/footer');

	}
}
