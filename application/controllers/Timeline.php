<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Timeline extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurnal_model');
        $this->load->model('Users_model');
        $this->load->model('Akun_model');
        $this->load->model('Comments_model');
        $this->load->library('form_validation');
        is_logged_in();
    }


    public function index()
    {
        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Global Mobile | Timeline';
        $data['breadcrumb'] = 'Timeline';
        $data['url'] = 'timeline';
        $data['akun'] = $this->Akun_model->getAll();
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $data['users'] = $this->Users_model->getAll();
        $data['comment'] = $this->db->order_by('id', 'DESC')->get_where('comments', ['email' => $this->session->userdata('email')])->result_array();
        $data['seek'] = $this->db->order_by('id', 'DESC')->get('comments')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('timeline/index', $data);
        $this->load->view('templates/footer');
    }
}
