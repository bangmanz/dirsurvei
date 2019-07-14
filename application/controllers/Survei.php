<?php


class Survei extends CI_Controller{
    public function index ()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $this->load->view('templates/header',$data)  ;
        $this->load->view('survei/index')  ;
        $this->load->view('templates/footer')  ;

    }
}
