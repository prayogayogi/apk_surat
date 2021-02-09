<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Surat extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('surat_m');
    if (empty($this->session->userdata('email'))) {
      redirect('login');
    }
  }
  // TAMPIL SURAT MASUK
  function suratMasuk()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul'] = 'Surat Masuk';
    $data['data'] = $this->surat_m->tampilDataSurat()->result_array();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('surat/suratMasuk', $data);
    $this->load->view('template/footer');
  }

  // TAMBAH SURAT MASUK
  public function tambahSuratMasuk()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul'] = 'Surat Masuk';
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('surat/tambahSuratMasuk', $data);
    $this->load->view('template/footer');
  }

  // AKSI TAMBAH SURAT MASUK
  public function aksiTambahSuratMasuk()
  {
    $file = $_FILES['file'];
    if ($file) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/file/suratmasuk/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('file')) {
        $files = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
    }
    $data = [
      'no_agenda' => $this->input->post('no_agenda'),
      'pengirim' => $this->input->post('pengirim'),
      'no_surat' => $this->input->post('no_surat'),
      'isi_surat' => $this->input->post('isi_surat'),
      'tgl_surat' => $this->input->post('tgl_surat'),
      'tgl_diterima' => $this->input->post('tgl_diterima'),
      'keterangan' => $this->input->post('keterangan'),
      'file' => $files,
    ];
    $this->surat_m->aksiTambahSuratMasuk($data);
    redirect('surat/suratMasuk');
  }

  // HAPUS SURAT MASUK
  public function hapusSuratMasuk($id)
  {
    $data = [
      'id' => $id
    ];
    $this->surat_m->hapusSuratMasuk($data);
    redirect('surat/suratMasuk');
  }


  // EDIT SURAT MASUK
  public function editSuratMasuk($id)
  {
    $data = [
      'id' => $id
    ];
    $data['editSuratMasuk'] = $this->db->get('suratmasuk', $data)->row_array();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul'] = 'Edit Surat Masuk';
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('surat/edit/editSuratMasuk', $data);
    $this->load->view('template/footer');
  }

  // AKSI EDIT SURAT MASUK
  public function aksiEditSuratMasuk()
  {
    $data = [
      'id' => $this->input->post('id'),
      'no_agenda' => $this->input->post('no_agenda'),
      'pengirim' => $this->input->post('pengirim'),
      'no_surat' => $this->input->post('no_surat'),
      'isi_surat' => $this->input->post('isi_surat'),
      'tgl_surat' => $this->input->post('tgl_surat'),
      'tgl_diterima' => $this->input->post('tgl_diterima'),
      'keterangan' => $this->input->post('keterangan'),
      'file' => $this->input->post('file')
    ];

    $this->db->update('suratmasuk', $data);
    redirect('surat/suratmasuk');
  }




  // surat keluar
  function suratKeluar()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['data'] = $this->surat_m->tampilSuratKeluar()->result_array();
    $data['judul'] = 'Surat Keluar';
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('surat/suratKeluar', $data);
    $this->load->view('template/footer');
  }


  // tambah surat Kluar
  public function tambahSuratKeluar()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['judul'] = 'Surat Keluar';
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('surat/tambahSuratKeluar', $data);
    $this->load->view('template/footer');
  }

  // ASKSI TAMBAH SURAT KELUAR
  public function aksiTambahSuratKeluar()
  {
    $file = $_FILES['file'];
    if ($file) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/file/suratkeluar/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('file')) {
        $files = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
    }
    $data = [
      'no_agenda' => $this->input->post('no_agenda'),
      'pengirim' => $this->input->post('pengirim'),
      'no_surat' => $this->input->post('no_surat'),
      'isi_surat' => $this->input->post('isi_surat'),
      'tgl_surat' => $this->input->post('tgl_surat'),
      'tgl_diterima' => $this->input->post('tgl_diterima'),
      'keterangan' => $this->input->post('keterangan'),
      'file' => $files,
    ];
    $this->surat_m->aksiTambahSuratKeluar($data);
    redirect('surat/suratKeluar');
  }

  // HAPUS SURAT KELUAR
  public function hapusSuratKeluar($id)
  {
    $data = [
      'id' => $id
    ];
    $this->surat_m->hapusSuratKeluar($data);
    redirect('surat/suratkeluar');
  }
}
