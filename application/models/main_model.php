<?php

defined('BASEPATH') or exit('no direct script access allowed');

class main_model extends CI_Model {

    public function getDataFirma(){
        $query = $this->db->get('firma');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            return false;
        }


    }

}


