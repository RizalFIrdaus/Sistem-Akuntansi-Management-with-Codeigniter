<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Jurnal_model');
        is_logged_in();
    }

    public function index()
    {
        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Global Mobile | Home';
        $data['breadcrumb'] = 'Dashboard';
        $data['users'] = $this->Users_model->getAll();
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/breadcrumb');
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }
}
