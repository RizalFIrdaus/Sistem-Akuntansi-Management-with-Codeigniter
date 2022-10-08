<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login Global Mobile';
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|max_length[16]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/index');
            $this->load->view('auth/templates/footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'name' => $user['name'],
                    'role_id' => $user['role_id'],
                    'image' => $user['image']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('profile/timeline');
                }
            } else {
                $this->session->set_flashdata('message', '  <div class="alert alert-danger" role="alert" >Wrong password !! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '  <div class="alert alert-danger" role="alert" >Email isnt registered</div>');
            redirect('auth');
        }
    }
    public function register()
    {
        $data['title'] = 'Register Global Mobile';
        $this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[4]|max_length[14]|is_unique[users.name]|alpha_dash');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|max_length[16]|matches[confirmPassword]');
        $this->form_validation->set_rules('confirmPassword', 'Confirmation Password', 'required|trim|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/register');
            $this->load->view('auth/templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => '2',
                'date_created' => time()

            ];

            $seek = [
                'role_id' => '2',
                'email' => htmlspecialchars($this->input->post('email', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'image' => 'default.png',
                'comment' => '019238219830192839018209381092809129083901241908312093910283948129083'
            ];
            $this->db->insert('comments', $seek);
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '  <div class="alert alert-success" role="alert" >Congratulation ! your account has been created . Please Login</div>');
            redirect('auth');
        }
    }
}
