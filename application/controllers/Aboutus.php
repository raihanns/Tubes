<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class aboutus extends CI_Controller
{

    public function index(){
        $this->load->view('templates/auth_header');
        $this->load->view('aboutus');
        $this->load->view('templates/auth_footer');
    }
}
    ?>