<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurnal extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurnal_model');
        $this->load->model('Users_model');
        $this->load->model('Akun_model');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Global Mobile | Jurnal';
        $data['breadcrumb'] = 'Jurnal';
        $data['url'] = 'jurnal';
        $data['akun'] = $this->Akun_model->getAll();
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $data['users'] = $this->Users_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('jurnal/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Global Mobile';
        $data['breadcrumb'] = 'Jurnal';
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $data['users'] = $this->Users_model->getAll();
        $data['akun'] = $this->Akun_model->getAll();

        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('uraian', 'Uraian', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('ref', 'ref', 'required');
        $this->form_validation->set_rules('debet', 'Debet', 'numeric');
        $this->form_validation->set_rules('kredit', 'Kredit', 'numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/breadcrumb');
            $this->load->view('jurnal/index', $data);
            $this->load->view('templates/footer');
            $this->session->set_flashdata('gagaltambah', '  <div class="alert alert-danger" role="alert" >Data gagal ditambahkan</div>');
        } else {

            $this->session->set_flashdata('message', '  <div class="alert alert-success" role="alert" >Data berhasil ditambahkan</div>');
            $this->session->set_flashdata('balance', '  <div class="alert alert-warning" role="alert" >Kredit dan debet tidak seimbang</div>');
            echo json_encode($this->Jurnal_model->tambahDataJurnal());
        }
    }

    public function hapus()
    {
        $this->session->set_flashdata('delete', '  <div class="alert alert-success" role="alert" >Data berhasil dihapus</div>');
        echo $this->Jurnal_model->hapus();
        redirect('jurnal');
    }
}
