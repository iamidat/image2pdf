<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{
  // menampilkan data
  public function data()
  {
    $query = "SELECT * FROM upload WHERE status='0'";
    return $this->db->query($query)->result_array();
  }

  // mengganti nama dan status
  public function ganti_status()
  {
    $query = "UPDATE upload SET nama_file='nama file dihapus', status='1' WHERE status='0'";
    return $this->db->query($query);
  }

  // jika ada gambar yang masih ada di database atau folder uploads
  public function ganti_status_1()
  {
    $query = "UPDATE upload SET nama_file='nama file dihapus', status='2' WHERE status='0'";
    return $this->db->query($query);
  }
}
