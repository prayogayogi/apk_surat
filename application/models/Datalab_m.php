<?php
defined('BASEPATH') or exit('No direct script access allowed');

class datalab_m extends CI_Model
{
  // =>
  // Data Dosen
  // =>

  // tampil data dosen
  function dosen()
  {
    return $this->db->get('data_dosen');
  }

  // tambah data dosen
  function tambahDataDosen($data)
  {
    $this->db->insert('data_dosen', $data);
  }

  // hapus data dosen
  function hapusDosen($where)
  {
    $this->db->where($where);
    $this->db->delete('data_dosen', $where);
  }

  // edit data dosen
  function editDataDosen($where)
  {
    return $this->db->get_where('data_dosen', $where);
  }

  // aksi edit data dosen
  function aksiTambahDataDosen($data, $where)
  {
    $this->db->where($where);
    $this->db->update('data_dosen', $data);
  }

  // =>
  // Data pegawai
  // =>

  // view data pegawai
  function pegawai()
  {
    return $this->db->get('data_pegawai');
  }

  // tambahDataPegawai
  function tambahDataPegawai($data)
  {
    $this->db->insert('data_pegawai', $data);
  }

  // hapus data pegawai
  function hapusPegawai($where)
  {
    $this->db->where($where);
    $this->db->delete('data_pegawai', $where);
  }

  //Edit Data Pegawai
  function editDataPegawai($where, $data)
  {
    $this->db->set($data);
    $this->db->where($where);
    $this->db->update('data_pegawai');
  }

  // view data admin
  function admin()
  {
    $this->db->from('user');
    $this->db->join('jabatan', 'jabatan.id_jabatan = user.role_id');
    $query = $this->db->get();
    return $query;
  }

  // tambahDataAdmin
  function tambahDataAdmin($data)
  {
    $this->db->insert('user', $data);
  }

  // Hapus Admin
  function hapusAdmin($where)
  {
    $this->db->where($where);
    $this->db->delete('user');
  }

  // Edit
  function editDataAdmin($where, $data)
  {
    $this->db->where($where);
    $this->db->update('user', $data);
  }

  function magang()
  {
    return $this->db->get('data_magang');
  }
}
