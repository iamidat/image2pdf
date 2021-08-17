<div class="album fitur animate__animated animate__fadeInUp" id="fitur">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card border-0 text-center">
          <div class="card-image my-3">
            <img src="<?= base_url('assets/image/free.svg'); ?>" alt="gratis" srcset="" width="40px">
          </div>
          <div class="card-title">
            Gratis
          </div>
          <div class="card-body">
            <p class="card-text">Tidak ada biaya berlanggan untuk membuka fitur tertentu. Semua gratis untuk kamu!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0 text-center">
          <div class="card-image my-3">
            <img src="<?= base_url('assets/image/www.svg'); ?>" alt="gratis" srcset="" width="40px">
          </div>
          <div class="card-title">
            Web-Based
          </div>
          <div class="card-body">
            <p class="card-text">Kamu bisa akses website ini dimana saja, kapan saja, dan dengan device apa saja. Semuanya memudahkan kamu!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0 text-center">
          <div class="card-image my-3">
            <img src="<?= base_url('assets/image/shield.svg'); ?>" alt="gratis" srcset="" width="40px">
          </div>
          <div class="card-title">
            Perlindungan Data
          </div>
          <div class="card-body">
            <p class="card-text">Data kamu terjamin, karena setelah 30 menit setelah unggah gambar, gambar kamu akan langsung dihapus di sistem kami.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0 text-center">
          <div class="card-image my-3">
            <img src="<?= base_url('assets/image/gallery.svg'); ?>" alt="gratis" srcset="" width="40px">
          </div>
          <div class="card-title">
            Dukungan Format Gambar Populer
          </div>
          <div class="card-body">
            <p class="card-text">Sistem kami mendukung format gambar populer seperti *.jpeg, *.jpg, *.png, *.bmp, dan *.,tiff.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0 text-center">
          <div class="card-image my-3">
            <img src="<?= base_url('assets/image/cloud-computing.svg'); ?>" alt="gratis" srcset="" width="40px">
          </div>
          <div class="card-title">
            Diproses Secara Cloud
          </div>
          <div class="card-body">
            <p class="card-text">Konversi gambar dilakukan secara cloud, artinya tidak ada beban tambahan ke CPU kamu.</p>
          </div>
        </div>
      </div>
      <div class="card border-0 text-center">
        <div class="card-image my-3">
          <img src="<?= base_url('assets/image/easy-maintenance.svg'); ?>" alt="gratis" srcset="" width="40px">
        </div>
        <div class="card-title">
          Simpel, bukan?
        </div>
        <div class="card-body">
          <p class="card-text">Cukup tarik file gambar atau klik “Telusuri File”. Beres deh. Mudah, bukan?</p>
        </div>
      </div>
    </div>
  </div>
</div>
</main>

<footer class="text-muted py-5 border-top">
  <div class="container">
    <div class="row footer">
      <p class="col-6 text-start">© <?= date('Y'); ?> Image2PDF — <a href="https://www.sttgarut.ac.id/" title="STT-Garut">Sekolah Tinggi Teknologi Garut</a></p>
      <p class="col-6 text-end">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></p>
    </div>
  </div>
</footer>

<script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/dropzone.min.js'); ?>"></script>

<script type="text/javascript">
  Dropzone.autoDiscover = false;

  var foto_upload = new Dropzone(".dropzone", {
    url: "<?php echo base_url('MyController/proses_upload') ?>",
    maxFilesize: 10,
    method: "post",
    acceptedFiles: "image/*",
    paramName: "gambar",
    dictInvalidFileType: "Type file ini tidak dizinkan",
    dictRemoveFile: '<div style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="16" height="16" x="0" y="0" viewBox="0 0 365.696 365.696" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0" fill="#ffffff" data-original="#000000" style="cursor: pointer;"/></g></svg></div>',
    dictCancelUpload: '<div style="cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="16" height="16" x="0" y="0" viewBox="0 0 365.696 365.696" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0" fill="#ffffff" data-original="#000000" style="cursor: pointer;"/></g></svg></div>',
    dictFileTooBig: "Ukuran gambar terlalu besar",
    addRemoveLinks: true,
  });

  //Event ketika Memulai mengupload
  foto_upload.on("sending", function(a, b, c) {
    a.token = Math.random();
    c.append("token_foto", a.token); //Menmpersiapkan token untuk masing masing foto
  });

  //Event ketika foto dihapus
  foto_upload.on("removedfile", function(a) {
    var token = a.token;
    $.ajax({
      type: "post",
      data: {
        token: token
      },
      url: "<?php echo base_url('MyController/hapus_foto') ?>",
      cache: false,
      dataType: 'json',
      success: function() {
        console.log("Foto terhapus");
      },
      error: function() {
        console.log("Error");
      }
    });
  });

  // variabel button konversi
  var btn_konversi = new $("#btn-konversi");

  // event ketika button konversi ditekan
  btn_konversi.click(function(file) {
    document.location.href = "<?php echo base_url('MyController/konversi') ?>";
    timeFunction();
    document.getElementById("dropzone").style.display = "none";
    document.getElementById("btn-konversi").style.display = "none";
    document.getElementById("sukses").style.display = "";
    document.getElementById("border").style.alignItems = "";
  });

  // fungsi waktu
  function timeFunction() {
    var waktu = 5;
    // hitung waktu mundur
    myVar = setInterval(function() {
      waktu--;
      if (waktu < 0) {
        foto_upload.removeAllFiles(true);
        document.getElementById("dropzone").style.display = "";
        document.getElementById("sukses").style.display = "none";
        myStopFunction();
      } else {
        document.getElementById("waktu").innerHTML = waktu;
      }
    }, 1000);
  }


  function myStopFunction() {
    clearInterval(myVar);
  }

  // event ketika upload gambar sukses
  foto_upload.on("complete", function(file) {
    document.getElementById("dropzone").style.justifyContent = "start";
    document.getElementById("dropzone").style.alignItems = "start";
    document.getElementById("dropzone").style.maxHeight = "170px";
    document.getElementById("border").style.alignItems = "start";
    document.getElementById("border").style.padding = "10px 20px";
    document.getElementById("border").style.height = "280px";
    document.getElementById("btn-konversi").style.display = "";
  });

  // event ketika semua gambar yang sudah diupload dihapus
  foto_upload.on("reset", function(file) {
    document.getElementById("dropzone").style.justifyContent = "";
    document.getElementById("dropzone").style.alignItems = "";
    document.getElementById("dropzone").style.maxHeight = "";
    document.getElementById("border").style.padding = "";
    document.getElementById("border").style.height = "";
    document.getElementById("border").style.alignItems = "";
    document.getElementById("btn-konversi").style.display = "none";
  });
</script>
</body>

</html>