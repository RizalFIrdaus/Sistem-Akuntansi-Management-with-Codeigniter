<?php



class Users_model extends CI_Model
{



    public function getAll()
    {
        return $this->db->get('users')->result_array();
    }
}
