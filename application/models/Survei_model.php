<?php

class Survei_model extends CI_model {
    public function getAllSurvei()
    {

       return $query = $this->db->get('m_survei')->result_array();
       //return $query->result_array();

    }


}