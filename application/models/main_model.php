<?php

defined('BASEPATH') or exit('no direct script access allowed');

class main_model extends CI_Model{

    public function getDataFirma(){
        $query = $this->db->get('firma');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            return false;
        }


    }

    public function getDataInstruktor(){
        $query = $this->db->get('instruktor');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            return false;
        }


    }

    public function getDataStudent(){
        $query = $this->db->get('student');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            return false;
        }


    }

    public function getDataPraca(){
        $query = $this->db->get('typ_prace');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            return false;
        }


    }

    public function getDataZaznam(){
        $query = $this->db->get('zaznam_studenta');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            return false;
        }


    }






}


