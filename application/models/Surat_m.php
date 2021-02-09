<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_m extends CI_Model
{
  public function aksiTambahSuratMasuk($data)
  {
    $this->db->insert('suratmasuk', $data);
  }

  // Tampil data DataSurat Masuk
  public function tampilDataSurat()
  {
    return $this->db->get('suratmasuk');
  }

  // haspus surat masuk
  public function hapusSuratMasuk($data)
  {
    $this->db->where($data);
    $this->db->delete('suratmasuk');
  }

  // Edit Surat Masuk
  public function editSuratMasuk($data)
  {
    $this->db->where($data);
    $this->db->update('suratmasuk');
  }




  // surat keluar

  // tampil data surat Keluar
  public function tampilSuratKeluar()
  {
    return $this->db->get('suratkeluar');
  }

  // aksi tambah surat keluar
  public function aksiTambahSuratKeluar($data)
  {
    $this->db->insert('suratkeluar', $data);
  }


  // hapus surat keluar
  public function hapusSuratKeluar($data)
  {
    $this->db->where($data);
    $this->db->delete('suratkeluar');
  }
}
