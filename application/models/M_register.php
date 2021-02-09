<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_register extends CI_Model
{
  public function registrasi()
  {
    $data = [
      'nama' => $this->input->post('namaLengkap', true),
      'email' => $this->input->post('email', true),
      'password' => password_hash($this->input->post('password2', true), PASSWORD_DEFAULT)
    ];

    $this->db->insert('user', $data);
  }
}
