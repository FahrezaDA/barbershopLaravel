<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Barbershop - Kontak</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('image/iconatas.png') }}" rel="icon">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Vendor CSS Files -->
  {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <div id="logo">
    <a href="index.php"><img src="{{ asset('image/logo.png') }}" alt="image" height="60" width="200"></a>
    </div>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar" >
        <ul>
          <li><a href="/">Utama</a></li>
          <li><a href="/pelayanan">Pelayanan </a></li>
          <li><a href="/tentangkami">Tentang Kami </a></li>
          <li><a href="/galeri">Galeri </a></li>
          <li><a href="/kontak" class="active">Kontak</a></li>
          <li><a href="dashboardPemesanan.php">Dashboard</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('image/background.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Kontak</h2>
        <ol>
          <li><a href="/">Utama</a></li>
          <li>Kontak</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                <i class='bx bx-map'></i>
              <h3>Lokasi</h3>
              <p>Jl. Mastrip, Krajan Timur, Sumbersari,<br> Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class='bx bx-envelope' ></i>
              <h3>Email</h3>
              <p>https://polije.ac.id/</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class='bx bx-phone-call'></i>
              <h3>Telephone</h3>
              <p>0331333532</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4235573638452!2d113.72099831415879!3d-8.160010184012418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1669012171908!5m2!1sid!2sid" frameborder="0" allowfullscreen" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>




        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CutLuck</h3> <br><br>
            <p>
              Jl.Mastrip,  Krajan Timur <br>
                Kec.Sumbersari, Jember <br>
                Jawa Timur, 68121<br><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Halaman</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Utama</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="pelayanan.php">Pelayanan</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="tentangKami.php">Tentang Kami</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="projects.php">Galeri</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="kontak.php">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tim Kami</h4>
            <ul>
              <li> Fahreza Daffa Assefy </li>
              <li> Lucki Wahyu Maulana</li>
              <li> Khoiyimatul Hosniah</li>
              <li> Retno Ayu Nawang W</li>
              <li> Suci Nur Kholisah</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <p>Anda dapat menghubungi kami dengan</p>
            <div class="social-links mt-3">
                <a href="#" class="twitter"><i class='bx bxl-twitter' ></i></a>
                <a href="#" class="facebook"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="instagram"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="#" class="whatsapp"><i class='bx bxl-whatsapp' ></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>CutLuck BarberShop</span></strong>. Manajemen Informatika
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
