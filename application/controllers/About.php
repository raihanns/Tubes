<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'About Us';
        $this->load->view('templates/auth_header',$data);
        $this->load->view('about');
        $this->load->view('templates/auth_footer');
    }
}
