<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('contact');
        $this->load->view('templates/auth_footer');
    }
}
