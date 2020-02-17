<?php

class Riwayat extends CI_Controller
{
    public function index($riwayat)
    {
        $data['riwayat'] = $riwayat;
        $this->load->view("templates/header");
        $this->load->view("riwayat/index", $data);
        $this->load->view("templates/footer");
    }
}
