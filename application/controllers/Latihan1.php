<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihan1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        // echo "WP 2";
        $data['title'] = "Pustaka Booking";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/footer');
    }

    function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $data['title'] = "Penjumlahan EAAAA";
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('view-latihan', $data);
        $this->load->view('templates/footer');
    }
}
