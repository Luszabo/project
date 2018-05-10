<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('main_model', 'm');
    }

    public function index()
    {

        $data['data'] = $this->m->getDataFirma();

        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('home' , $data);
        $this->load->view('template/footer');

    }

    public function add()
    {
        $this->load->view('template/header');

        $this->load->view('add');
        $this->load->view('template/footer');
    }
}