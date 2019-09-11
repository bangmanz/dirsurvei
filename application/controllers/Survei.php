<?php


class Survei extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Survei_model');
        $this->load->library('form_validation');
    }

    public function index ()
    {
        $data['judul'] = 'Daftar Survei';
              
        $data['survei'] = $this->Survei_model->getAllSurvei();
        $this->load->view('templates/header',$data)  ;
        $this->load->view('survei/index',$data)  ;
        $this->load->view('templates/footer')  ;
    }

    public function tambah ()
    {
        $data['judul'] = 'Form Tambah Data Survei';

        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('singkatan','Singkatan', 'required');
        $this->form_validation->set_rules('tahun','Tahun', 'required|numeric');
             
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header',$data)  ;
            $this->load->view('survei/tambah',$data)  ;
            $this->load->view('templates/footer')  ;
        } else {
            $this->Survei_model->tambahDataSurvei();
            $this->session->set_flashdata(' ');
            redirect('survei');
        }
    }
}
