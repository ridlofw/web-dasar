<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Daily Journal</title>
  <link rel="icon" href="img/logo.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">My Daily Journal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#schedule">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" target="_blank">Login</a>
          </li>
          <li class="nav-item">
            <button class="btn btn-dark rounded-2" id="gelap">
              <i class="bi bi-moon-stars-fill text-white"></i>
            </button>
          </li>
          <li class="nav-item">
            <button class="btn btn-danger rounded-2" id="terang">
              <i class="bi bi-brightness-high text-white"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
    <div class="container">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
        <img src="img/banner.jpg" class="img-fluid" width="300" />
        <div class="isi">
          <h1 class="fw-bold display-4">
            Create Memories, Save Memories, Everyday
          </h1>
          <h4 class="lead display-6">
            Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali
          </h4>
          <h6>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </h6>
        </div>
      </div>
    </div>
  </section>

  <!-- article begin -->
  <section id="article" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">article</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        while($row = $hasil->fetch_assoc()){
        ?>
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]?></h5>
                <p class="card-text">
                  <?= $row["isi"]?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"]?>
                </small>
              </div>
            </div>
          </div>
          <?php
        }
        ?> 
      </div>
    </div>
  </section>
  <!-- article end -->

  <section id="gallery" class="text-center p-5 bg-danger-subtle isi">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Gallery</h1>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/gallery1.jpg" class="d-block w-100" alt="gallery1" />
          </div>
          <div class="carousel-item">
            <img src="img/gallery2.jpg" class="d-block w-100" alt="gallery2" />
          </div>
          <div class="carousel-item">
            <img src="img/gallery3.jpg" class="d-block w-100" alt="gallery3" />
          </div>
          <div class="carousel-item">
            <img src="img/gallery4.jpg" class="d-block w-100" alt="gallery4" />
          </div>
          <div class="carousel-item">
            <img src="img/gallery5.jpg" class="d-block w-100" alt="gallery5" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <section id="schedule" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3 isi">
        Jadwal Kuliah & Kegiatan Mahasiswa
      </h1>
      <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        <div class="col">
          <div class="card h-100 border-danger-subtle brdr">
            <div class="card-header bg-danger-subtle fw-bold isi">Senin</div>
            <div class="card-body text-dark isi">
              <p class="card-text">
                <b>09.30-12.00</b>
                <br />LOGIKA INFORMATIKA <br />Ruang H.5.12
              </p>
              <p class="card-text">
                <b>14.10-15.50</b>
                <br />BASIS DATA <br />Ruang H.5.10
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-danger-subtle brdr">
            <div class="card-header bg-danger-subtle fw-bold isi">Selasa</div>
            <div class="card-body text-dark isi">
              <p class="card-text">
                <b>12.30-15.00</b>
                <br />REKAYASA PERANGKAT LUNAK <br />Ruang H.5.10
              </p>
              <p class="card-text">
                <b>15.30-18.00</b>
                <br />SISTEM OPERASI <br />Ruang H.3.2
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-danger-subtle brdr">
            <div class="card-header bg-danger-subtle fw-bold isi">Rabu</div>
            <div class="card-body text-dark isi">
              <p class="card-text">
                <b>09.30-12.00</b>
                <br />KRIPTOGRAFI <br />Ruang H.5.13
              </p>
              <p class="card-text">
                <b>12.30-14.10</b>
                <br />PEMROGRAMAN BERBASIS WEB <br />Ruang D.2.J
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-danger-subtle brdr">
            <div class="card-header bg-danger-subtle fw-bold isi">Kamis</div>
            <div class="card-body text-dark isi">
              <p class="card-text">
                <b>14.10-15.50</b>
                <br />BASIS DATA <br />Ruang D.2.K
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-danger-subtle brdr">
            <div class="card-header bg-danger-subtle fw-bold isi">Jumat</div>
            <div class="card-body text-dark isi">
              <p class="card-text">
                <b>09.30-12.00</b>
                <br />PROBABILITAS DAN STATISTIK <br />Ruang H.3.2
              </p>
              <p class="card-text">
                <b>12.30-15.00</b>
                <br />PENAMBANGAN DATA <br />Ruang H.4.3
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-danger-subtle brdr">
            <div class="card-header bg-danger-subtle fw-bold isi">Sabtu</div>
            <div class="card-body text-dark isi">
              <p class="card-text">
                <b>07.00-20.00</b>
                <br />PPK Ormawa Kamadiksi <br />Desa Klepu
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-danger-subtle brdr">
            <div class="card-header bg-danger-subtle fw-bold isi">Minggu</div>
            <div class="card-body text-dark isi">
              <p class="card-text">
                <b>07.00-20.00</b>
                <br />PPK Ormawa Kamadiksi <br />Desa Klepu
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="profile" class="text-center p-5 bg-danger-subtle">
    <div class="container">
      <h1 class="fw-bold display-4 pb-5 isi">Profil Mahasiswa</h1>
      <div class="d-md-flex flex-md-row align-items-center justify-content-md-evenly">
        <img src="img/profile.jpg" class="img-fluid rounded-circle mb-4"
          style="width: 250px; height: 250px; object-fit: cover;" alt="Foto Profil" />
        <div class="col-12 col-md-6">
          <div class="card shadow-lg">
            <div class="card-body p-5 isi">
              <h3 class="card-title fw-bold">Ridlo Fanata Wicaksana</h3>
              <p class="text-muted mb-4">Mahasiswa Teknik Informatika</p>

              <div class="row mb-3">
                <div class="col-4 fw-bold text-end pe-1">NIM</div>
                <div class="col-8 text-start ps-1">: A11.2024.16059</div>
              </div>

              <div class="row mb-3">
                <div class="col-4 fw-bold text-end pe-1">Program Studi</div>
                <div class="col-8 text-start ps-1">: Teknik Informatika</div>
              </div>

              <div class="row mb-3">
                <div class="col-4 fw-bold text-end pe-1">Email</div>
                <div class="col-8 text-start ps-1">: 111202416059@mhs.dinus.ac.id</div>
              </div>

              <div class="row mb-3">
                <div class="col-4 fw-bold text-end pe-1">Telepon</div>
                <div class="col-8 text-start ps-1">: +62 851 8311 2683</div>
              </div>

              <div class="row mb-3">
                <div class="col-4 fw-bold text-end pe-1">Alamat</div>
                <div class="col-8 text-start ps-1">: Jl. Raya Tayu-Puncel, Dukuhseti</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-center p-5 isi" id="footer">
    <div>
      <a href="https://www.instagram.com/_erefwe"><i class="bi bi-instagram h2 p-2 text-dark isi"></i></a>
      <a href="https://www.twitter.com/udinusofficial"><i class="bi bi-twitter h2 p-2 text-dark isi"></i></a>
      <a href="https://wa.me/6285183112683"><i class="bi bi-whatsapp h2 p-2 text-dark isi"></i></a>
    </div>
    <div>Ridlo Fanata Wicaksana &copy; 2025</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
  <script type="text/javascript">
    window.setTimeout("tampilWaktu()", 1000);

    function tampilWaktu() {
      var waktu = new Date();
      var bulan = waktu.getMonth() + 1;

      setTimeout("tampilWaktu()", 1000);
      document.getElementById("tanggal").innerHTML =
        waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
      document.getElementById("jam").innerHTML =
        waktu.getHours() +
        ":" +
        waktu.getMinutes() +
        ":" +
        waktu.getSeconds();
    }

    document.getElementById("gelap").onclick = function () {
      document.getElementById("hero").classList.remove("bg-danger-subtle");
      document.getElementById("hero").classList.add("bg-secondary");

      document.getElementById("article").classList.remove("bg-white");
      document.getElementById("article").classList.add("bg-dark");
      const konten = document.getElementsByClassName("card");
      for (let i = 0; i < konten.length; i++) {
        konten[i].classList.remove("bg-white");
        konten[i].classList.add("bg-secondary");
      }

      document.getElementById("gallery").classList.remove("bg-danger-subtle");
      document.getElementById("gallery").classList.add("bg-secondary");

      document.getElementById("schedule").classList.remove("bg-white");
      document.getElementById("schedule").classList.add("bg-dark");
      const hari = document.getElementsByClassName("card-header");
      for (let i = 0; i < hari.length; i++) {
        hari[i].classList.remove("bg-danger-subtle");
        hari[i].classList.add("bg-dark");
      }
      const border = document.getElementsByClassName("brdr");
      for (let i = 0; i < border.length; i++) {
        border[i].classList.remove("border-danger-subtle");
        border[i].classList.add("border-white");
      }

      document.getElementById("profile").classList.remove("bg-danger-subtle");
      document.getElementById("profile").classList.add("bg-secondary");

      document.getElementById("footer").classList.remove("bg-white");
      document.getElementById("footer").classList.add("bg-dark");

      const collection = document.getElementsByClassName("isi");
      for (let i = 0; i < collection.length; i++) {
        collection[i].classList.remove("text-dark");
        collection[i].classList.add("text-white");
      }
    };

    document.getElementById("terang").onclick = function () {
      document.getElementById("hero").classList.remove("bg-secondary");
      document.getElementById("hero").classList.add("bg-danger-subtle");

      document.getElementById("article").classList.remove("bg-dark");
      document.getElementById("article").classList.add("bg-white");
      const konten = document.getElementsByClassName("card");
      for (let i = 0; i < konten.length; i++) {
        konten[i].classList.remove("bg-secondary");
        konten[i].classList.add("bg-white");
      }

      document.getElementById("gallery").classList.remove("bg-secondary");
      document.getElementById("gallery").classList.add("bg-danger-subtle");

      document.getElementById("schedule").classList.remove("bg-dark");
      document.getElementById("schedule").classList.add("bg-white");
      const hari = document.getElementsByClassName("card-header");
      for (let i = 0; i < hari.length; i++) {
        hari[i].classList.remove("bg-dark");
        hari[i].classList.add("bg-danger-subtle");
      }
      const border = document.getElementsByClassName("brdr");
      for (let i = 0; i < border.length; i++) {
        border[i].classList.remove("border-white");
        border[i].classList.add("border-danger-subtle");
      }

      document.getElementById("profile").classList.remove("bg-secondary");
      document.getElementById("profile").classList.add("bg-danger-subtle");

      document.getElementById("footer").classList.remove("bg-dark");
      document.getElementById("footer").classList.add("bg-white");

      const collection = document.getElementsByClassName("isi");
      for (let i = 0; i < collection.length; i++) {
        collection[i].classList.remove("text-white");
        collection[i].classList.add("text-dark");
      }
    };

    const cardJadwal = document.getElementsByClassName("card");
    for (let i = 0; i < cardJadwal.length; i++) {
      cardJadwal[i].onmouseenter = function () {
        cardJadwal[i].classList.add("shadow");
      };

      cardJadwal[i].onmouseleave = function () {
        cardJadwal[i].classList.remove("shadow");
      };
    }
  </script>
</body>

</html>