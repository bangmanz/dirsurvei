<?php


class Survei extends CI_Controller{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Survei_model');
        
    }

    public function index ()
    {
        $data['judul'] = 'Daftar Survei';
              
        $data['survei'] = $this->Survei_model->getAllSurvei();
        $this->load->view('templates/header',$data)  ;
        $this->load->view('survei/index',$data)  ;
        $this->load->view('templates/footer')  ;

    }
}
