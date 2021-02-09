<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('dashboard');
    }
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    if ($this->form_validation->run() == false) {
      $data['judul'] = 'Login';
      $this->load->view('register/template/header', $data);
      $this->load->view('register/login');
      $this->load->view('register/template/footer');
    } else {
      $email = $this->input->post('email', true);
      $password = $this->input->post('password', true);
      $data = $this->db->get_where('user', ['email' => $email])->row_array();
      if ($data) {
        if (password_verify($password, $data['password'])) {
          $ses = [
            'email' => $data['email'],
            'nama' => $data['nama']
          ];
          $this->session->set_userdata($ses);
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Selamat </strong> Anda Berhasil Login..
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
          redirect('dashboard');
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Password Anda </strong> Salah..!!.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
          redirect('login');
        }
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Email Anda </strong> Salah..!!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('login');
      }
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    $this->session->set_flashdata('pesan', 'Berhasil .');
    redirect('login');
  }
}
