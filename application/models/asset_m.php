<?php
defined('BASEPATH') or exit('No direct script access allowed');

class asset_m extends CI_Model
{
  // Data Surat Masuk
  public function suratmasuk()
  {
    $query = $this->db->get_where('suratmasuk');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  // Data Surat Kluar
  public function suratkeluar()
  {
    $query = $this->db->get('suratkeluar');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  // Data Dosen
  public function dataDosen()
  {
    $query = $this->db->get('data_dosen');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  // Data Pegawai
  public function dataPegawai()
  {
    $query = $this->db->get('data_pegawai');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  // Data Admin
  public function dataAdmin()
  {
    $query = $this->db->get('user');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  // Data Mahasiswa Magang
  public function mahasiswaMagang()
  {
    $query = $this->db->get('data_magang');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
}
