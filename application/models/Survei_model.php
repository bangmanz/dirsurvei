<?php

class Survei_model extends CI_model {
    public function getAllSurvei()
    {

       return $query = $this->db->get('m_survei')->result_array();
       //return $query->result_array();

    }

    public function tambahDataSurvei()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "singkatan" => $this->input->post('singkatan',true),
            "tahun" => $this->input->post('tahun',true),
            "bidang" => $this->input->post('bidang',true),
            "seksi" => $this->input->post('seksi',true),

        ];
        $this->db->insert('m_survei',$data);
    }


}