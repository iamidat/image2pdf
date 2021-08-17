<?php
defined('BASEPATH') or exit('No direct script access allowed');
// set jam ke timezone jakarta
date_default_timezone_set('Asia/Jakarta'); 

class MyController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper(array('url', 'file'));
    $this->load->library("pdf");
    $this->load->model('Model');
  }

  function index()
  {
    // apabila ada gambar atau data nyamkut di database atau folder upload, maka harus dihapus dulu
    $data = $this->db->get_where('upload', array('status' => '0'));
    if ($data->num_rows() > 0) {
      $data = $this->Model->data();
      foreach ($data as $row) {
        unlink(FCPATH . '/uploads/' . $row['nama_file']);
      }

      // mengganti status keterangan dan nama file di database
      $this->Model->ganti_status_1();

      $this->load->view('header');
      $this->load->view('halaman_utama');
      $this->load->view('footer');
    } else {
      $this->load->view('header');
      $this->load->view('halaman_utama');
      $this->load->view('footer');
    }
  }

  function tentang_kami()
  {
    $this->load->view('tentang-kami');
  }

  function proses_upload()
  {
    $config['upload_path']   = FCPATH . '/uploads/';
    $config['allowed_types'] = 'gif|jpg|png|ico|jpeg|tiff|bmp';
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
      $token = $this->input->post('token_foto');
      $nama = $this->upload->data('file_name');
      $tanggal = date("Y-m-d H:i:s");
      $this->db->insert('upload', array('nama_file' => $nama, 'waktu_upload' => $tanggal, 'token' => $token));
    }
  }

  //Untuk menghapus foto
  function hapus_foto()
  {
    //Ambil token foto
    $token = $this->input->post('token');

    $foto = $this->db->get_where('upload', array('token' => $token));

    if ($foto->num_rows() > 0) {
      $hasil = $foto->row();
      $nama_foto = $hasil->nama_file;
      if (file_exists($file = FCPATH . '/uploads/' . $nama_foto)) {
        unlink($file);
      }
      $this->db->delete('upload', array('token' => $token));
    }

    // jika sudah, redirect ke halaman utama
    echo "{}";
  }

  // membuat pdf
  function konversi()
  {
    $pdf = new PDF();
    $data = $this->Model->data();
    // $data = $this->db->get_where('upload', array('status' => '0'));
    // $hasil = $data->row();
    foreach ($data as $row) {
      $pdf->AddPage();
      $pdf->centreImage(FCPATH . '/uploads/' . $row['nama_file']);
    }
    $pdf->Output('D', 'image2pdf.pdf'); // download pdf

    // menghapus gambar pada folder upload
    foreach ($data as $row) {
      unlink(FCPATH . '/uploads/' . $row['nama_file']);
    }

    // mengganti status keterangan dan nama file di database
    $this->Model->ganti_status();
    redirect(base_url(''));
  }
}
