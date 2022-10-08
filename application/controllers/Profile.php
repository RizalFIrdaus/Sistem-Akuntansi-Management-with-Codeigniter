<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Profile extends CI_Controller
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
        $data['title'] = 'Global Mobile';
        $data['breadcrumb'] = 'Profile';
        $data['url'] = 'profile';
        $data['akun'] = $this->Akun_model->getAll();
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $data['users'] = $this->Users_model->getAll();



        $this->form_validation->set_rules('name', 'Nickname', 'required|trim|min_length[4]|max_length[8]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/breadcrumb');
            $this->load->view('profile/index', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $upload = $_FILES['image']['name'];

            if ($upload) {

                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '4096';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['member']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('image', $upload);
            $this->db->where('email', $email);
            $this->db->update('users');
            $this->db->set('name', $name);
            $this->db->set('image', $upload);
            $this->db->where('email', $email);
            $this->db->update('comments');

            $this->session->set_flashdata('message', '  <div class="alert alert-success" role="alert" >Profile telah diubah</div>');
            redirect('profile');
        }
    }

    public function timeline()
    {
        $data['member'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Global Mobile | Profile';
        $data['breadcrumb'] = 'Post';
        $data['url'] = 'profile/timeline';
        $data['akun'] = $this->Akun_model->getAll();
        $data['jurnal'] = $this->Jurnal_model->getAll();
        $data['users'] = $this->Users_model->getAll();
        $data['comment'] = $this->db->order_by('id', 'DESC')->get_where('comments', ['email' => $this->session->userdata('email')])->result_array();


        $this->form_validation->set_rules('comments', 'Comment', 'trim|max_length[512]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/breadcrumb', $data);
            $this->load->view('profile/timeline', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Comments_model->posting();
            redirect('profile/timeline');
        }
    }
    public function hapus($id)
    {
        $this->db->delete('comments', array('id' => $id));
        redirect('profile/timeline');
    }
}
