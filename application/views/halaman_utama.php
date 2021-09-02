<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main>
  <section class="py-sm-5 py-3 text-center container">
    <div class="row py-sm-4 px-3 animate__animated animate__fadeInUp animate__faster" id="main">
      <div class="col-xl-6 col-lg-8 col-md-8 my-sm-4 my-5 mx-auto">
        <p class="fw-bold h2">Konversi vidio to jpg</p>
        <p class="fw-bold h2">Dengan Mudah & Aman</p>
        <p class="fw-bold lh-lg keterangan">Setelah dikonversi, file kamu <mark>langsung dihapus!</mark></p>
        <div class="my-sm-5 my-4 mx-md-0 animate__animated animate__fadeInUp" id="kotak_upload">
          <div id="border">
            <div id="sukses" class="animate__animated animate__fadeInUp animate__faster" style="display: none;">
              <strong>
                Gambar sudah dikonversi, <br> enjoy ;)
              </strong>
              <div class="text-center my-3">
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                Tunggu <span id="waktu">5</span> detik
              </div>
            </div>
            <form id="dropzone" class="dropzone hzScroll animate__animated animate__fadeInUp animate__faster">
              <div class="upload dz-message">
                <strong>
                  Drop gambar ke sini untuk mengunggah
                </strong>
                <br />
                <br />
                <!-- <label for="formFileMultiple" class="form-label">Multiple files input example</label>  -->
                <!-- <input class="form-control" type="file" id="formFileMultiple" multiple> -->
                <a class="btn btn-primary my-2">Upload Gambar</a>
              </div>
              <!-- <button type="button" class="btn-close btn-close-white" aria-label="Close"></button> -->
            </form>
          </div>
        </div>
        <div id="btn-konversi" style="display: none;">
          <a class="btn btn-primary my-2 btn-konversi">Konversi</a>
          <br>
          <p id="ket_konversi">
            Drop gambar atau klik di dalam garis tepi untuk menambah gambar
          </p>
        </div>
      </div>
    </div>
  </section>