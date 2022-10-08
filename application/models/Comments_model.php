<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Comments_model extends CI_Model
{


    public function posting()
    {
        ini_set('date.timezone', 'Asia/Jakarta');
        $data = [
            'email' => $this->session->userdata('email'),
            'role_id' => $this->session->userdata('role_id'),
            'name' => $this->session->userdata('name'),
            'date' => date('d F Y', time()),
            'time' => date('H:i A', time()),
            'image' => $this->session->userdata('image'),
            'comment' => htmlspecialchars($this->input->post('comments', true))
        ];
        $this->db->insert('comments', $data);
    }
}
