<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Barbershop - Pelayanan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->


  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.2.1
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
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
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Utama</a></li>
          <li><a href="/pelayanan">Pelayanan </a></li>
          <li><a href="/tentangkami">Tentang Kami </a></li>
          <li><a href="galeri.php">Galeri </a></li>
          <li><a href="/kontak">Kontak</a></li>
          <li><a href="dashboardPemesanan.php">Dashboard </a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .navbar -->
<!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('image/background.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Pelayanan</h2>
        <ol>
          <li><a href="landingPage">Utama</a></li>
          <li>Pelayanan</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pelayanan</h2>
          <p>Pelayanan yang kami berikan sangat bervariasi sesuai kebutuhan konsumen</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="{{ asset('image/gentlemencut.jpg') }}" alt="" width="240">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Gentlement Cut</h4>
                    <p>Potong rambut tanpa keramas dan diakhiri dengan pemakaian tonic atau pomade</p>
                    <a href="service-details.php" class="readmore stretched-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" dnavata-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="{{ asset('image/kidshaircut.jpg') }}" alt="" width="265">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Kids Haircut</h4>
                    <p>Pengalaman potong rambut yang ramah dan nyaman untuk si kecil.</p>
                    <a href="service-details1.php" class="readmore stretched-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="{{ asset('image/groominghairtato.jpg') }}" alt="" width="260">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Grooming And Hair Tato</h4>
                    <p>Biarkan barberman kami yang terampil untuk membentuk dan merancang gaya rambut-mu seperti hasil mahakaryanya.</p>
                    <a href="service-details2.php" class="readmore stretched-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="{{ asset('image/blackhair.jpg') }}" alt="" width="260">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Black Hair Coloring</h4>
                    <p>Ubah rambut ubanmu menjadi rambut hitam berkilau</p>
                    <a href="service-detail3.php" class="readmore stretched-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="{{ asset('image/smoothing.jpg') }}" alt="" width="260">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Smoothing</h4>
                    <p>Pelurusan rambut dengan hasil yang natural</p>
                    <a href="service-details4.php" class="readmore stretched-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                <img src="{{ asset('image/permhair.jpg') }}" alt="" width="220">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Perm Hair Treatment</h4>
                    <p>Pengeritingan rambut dengan hasil yang natural dan trendy</p>
                    <a href="service-details5.php" class="readmore stretched-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->


        </div>

      </div>
    </section><!-- End Constructions Section -->

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
              <li> Lucki Wahyu M</li>
              <li> Khoiyimatul Hosniah</li>
              <li> Retno Ayu Nawang W</li>
              <li> Suci Nur Kholisah</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <p>Anda dapat menghubungi kami dengan</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
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
