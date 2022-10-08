<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
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
        $data['title'] = 'Global Mobile Accounting';
        $data['breadcrumb'] = 'Dashboard';
        $data['url'] = 'admin';
        $data['users'] = $this->Users_model->getAll();
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }
}
