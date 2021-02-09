<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('asset_m');

    if (empty($this->session->userdata('email'))) {
      redirect('login');
    }
  }
  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul'] = 'Dashboard';
    $data['surat'] = $this->db->get('suratmasuk')->result_array();
    $data['suratmasuk'] = $this->asset_m->suratmasuk();
    $data['suratkeluar'] = $this->asset_m->suratkeluar();
    $data['dataDosen'] = $this->asset_m->dataDosen();
    $data['dataPegawai'] = $this->asset_m->dataPegawai();
    $data['dataAdmin'] = $this->asset_m->dataAdmin();
    $data['mahasiswaMagang'] = $this->asset_m->mahasiswaMagang();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('dashboard/dashboard', $data);
    $this->load->view('template/footer');
  }

  public function tambahAdmin()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul'] = "Tambah Admin";
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('dashboard/tambahAdmin');
    $this->load->view('template/footer');
  }
}
