<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('main_model', 'm');
        $this->load->helper('url');
    }


    public function index()
    {

        $data['data'] = $this->m->getDataFirma();
        $data2['data2'] = $this->m->getDataInstruktor();
        $data3['data3'] = $this->m->getDataStudent();
        $data4['data4'] = $this->m->getDataPraca();
        $data5['data5'] = $this->m->getDataZaznam();



        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('template/navigation');

        $this->load->view('prax/home' , $data);
        $this->load->view('template/tabulka' ,$data2);
        $this->load->view('template/tabulka2' ,$data3);



        $this->load->view('template/tabulka3' ,$data4);
        $this->load->view('template/tabulka4' ,$data5);

        $this->load->view('template/footer');


    }

    public function add_user()
    {
        $meno = $this->input->post('meno');
        $profesia = $this->input->post('profesia');
        $data7 = array('meno'=>$meno,'profesia'=>$profesia);
        $this->load->model('main_model');
        if ($this->Add_users->add($data7))
        {
            echo "success";
        }else{
            echo "fail";
        }
    }
}