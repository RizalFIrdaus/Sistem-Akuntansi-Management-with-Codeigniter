<?php

class Akun_model extends CI_Model
{

    public function getAll()
    {

        return $this->db->get('noakun')->result_array();
    }
}
