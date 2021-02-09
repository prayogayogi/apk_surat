<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('m_register');
  }

  public function registrasi()
  {

    if ($this->session->userdata('email')) {
      redirect('dashboard');
    }
    $this->form_validation->set_rules('namaLengkap', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]');
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
      'matches' => 'Password sama'
    ]);

    if ($this->form_validation->run() == false) {
      $data['judul'] = 'Registrasi';
      $this->load->view('register/template/header', $data);
      $this->load->view('register/registerasi', $data);
      $this->load->view('register/template/footer');
    } else {
      $this->m_register->registrasi();
      $this->session->set_flashdata('pesan', 'Berhasil');
      redirect('login');
    }
  }
}
