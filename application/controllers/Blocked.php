<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blocked extends CI_Controller
{


    public function index()
    {

        $data['title'] = 'Blocked Access';
        $this->load->view('blocked/index', $data);
    }
}
