<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Seek extends CI_Controller
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
        $data['title'] = 'Global Mobile | Profile';
        $data['breadcrumb'] = 'Profile';
        $data['akun'] = $this->Akun_model->getAll();
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $data['users'] = $this->Users_model->getAll();
        $data['comment'] = $this->db->order_by('id', 'DESC')->get_where('comments', ['email' => $this->session->userdata('email')])->result_array();
        $data['seek'] = $this->db->get_where('comment', ['name' => $this->session->userdata('name')])->row_array();
    }

    public function profile($name)
    {

        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Global Mobile';
        $data['breadcrumb'] = 'Profile';
        $data['url'] = 'seek/profile/' . $name;
        $data['akun'] = $this->Akun_model->getAll();
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $data['users'] = $this->Users_model->getAll();
        $data['comment'] = $this->db->order_by('id', 'DESC')->get_where('comments', ['email' => $this->session->userdata('email')])->result_array();
        $data['seek'] = $this->db->get_where('comments', ['name' => $name])->result_array();
        $data['seekHead'] = $this->db->get_where('comments', ['name' => $name])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('seek/index', $data);
        $this->load->view('templates/footer');
    }
}
