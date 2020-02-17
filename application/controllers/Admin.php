<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header.php');
        $this->load->view('template/footer.php');
    }
}
