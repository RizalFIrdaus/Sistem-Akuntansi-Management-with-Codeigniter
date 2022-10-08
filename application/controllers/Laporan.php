<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurnal_model');
        $this->load->model('Akun_model');
        $this->load->model('Users_model');
        is_logged_in();
    }

    public function index()
    {
        $data['Lpendapatan'] = $this->session->userdata('pendapatan');
        $data['LBperlengkapan'] = $this->session->userdata('Bperlengkapan');
        $data['LBgaji'] = $this->session->userdata('Bgaji');
        $data['LBsewa'] = $this->session->userdata('Bsewa');
        $data['LBlistrik'] = $this->session->userdata('Blistrik');
        $data['LBtelepon'] = $this->session->userdata('Btelepon');
        $data['LBair'] = $this->session->userdata('Bair');
        $data['LBpenyusutan'] = $this->session->userdata('Bpenyusutan');
        $data['LBrupa'] = $this->session->userdata('Brupa');
        $data['Lmodal'] = $this->session->userdata('modal');
        $data['Lprive'] = $this->session->userdata('prive');
        $data['Lhutang'] = $this->session->userdata('hutang');
        $data['Lkas'] = $this->session->userdata('kas');
        $data['Lpiutang'] = $this->session->userdata('piutang');
        $data['Lperlengkapan'] = $this->session->userdata('perlengkapan');
        $data['Lsewadibayardimuka'] = $this->session->userdata('sewadibayardimuka');
        $data['Lperalatan'] = $this->session->userdata('peralatan');
        $data['Lakumulasi'] = $this->session->userdata('akumulasi');
        $data['laporan'] = $this->Jurnal_model->getAll();

        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Global Mobile | Laporan';
        $data['breadcrumb'] = 'Laporan';
        $data['url'] = 'laporan';
        $data['akun'] = $this->Akun_model->getAll();
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $data['users'] = $this->Users_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }
}
