<?php



class Add_users extends CI_Model
{

    public function add($data7)
    {
        $this->load->database();
        $count = $this->db->insert($data7);

        if($count>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }



}