<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Contact Us';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('contact');
        $this->load->view('templates/auth_footer');
    }
}
