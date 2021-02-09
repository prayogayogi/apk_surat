<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url', 'download'));
    if (empty($this->session->userdata('email'))) {
      redirect('login');
    }
  }

  public function arsipSurat()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul'] = "Galery Surat";
    $data['suratmasuk'] = $this->db->get('suratmasuk')->result_array();
    $data['suratkeluar'] = $this->db->get('suratkeluar')->result_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('galery/arsipSurat', $data);
    $this->load->view('template/footer');
  }

  public function proses_download()
  {
    force_download('assets/file/suratmasuk/foto5.jpg', NULL);
  }
}
