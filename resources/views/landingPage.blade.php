<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Barbershop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Icon-atas.png" rel="icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  <!-- cdn boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
    <a href="index.php"><img src="{{ asset('image/BarbershopLogo.png') }}" alt="image" height="60" width="200"></a>
    </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar" >
        <ul>
          <li><a href="/" class="active">Utama</a></li>
          <li><a href="/pelayanan">Pelayanan </a></li>
          <li><a href="/tentangkami">Tentang Kami </a></li>
          <li><a href="galeri.php">Galeri </a></li>
          <li><a href="/kontak">Kontak</a></li>
          <li><a href="bookingCustomer.php">Dashboard</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">WELCOME TO <span>CUTLUCK BARBERSHOP</span></h2>
            <p data-aos="fade-up">Tampil dengan keren setiap hari adalah impian semua pria, berpenampilan menarik dapat dicapai dengan rambut yang rapi dan klimis.
              <br>untuk urusan rambut percayakan pada kami </p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">MULAI</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(https://furnizing.com/files/img/5f79be16b7d3d.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(https://furnizing.com/files/img/5f79bdea7824c.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(https://furnizing.com/files/img/5f79bdcdd1cae.png)"></div>
      <div class="carousel-item" style="background-image: url(https://furnizing.com/files/img/5f79bdab267ab.png)"></div>
      <div class="carousel-item" style="background-image: url(https://furnizing.com/files/img/5f79bda1226e6.jpeg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Fasilitas</h2>
          <p>Mengutamakan kenyaman adalah prioritas kami untuk membuat anda nyaman di barbershop, maka dari itu kami memberikan fasilitas terbaik untuk anda.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Ruangan Ber-AC</h3>
              <p>Barbershop kami menggunakan air conditioner agar suasana selalu terasa lebih dingin supaya bisa dirasakan oleh pelangan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-wifi"></i>
              </div>
              <h3>Free Wi-Fi</h3>
              <p>Untuk ke stabilan dan kenyamanan berinternet kami memasang wifi dan bisa bisa digunakan oleh pelanggan.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-tv"></i>
              </div>
              <h3>Hiburan Diruang Tunggu</h3>
              <p>Nah sembari pelanggann menunggu antrian, kami menyediakan tv, majalah dan buku yang bisa anda nikmati.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-hamburger"></i>
              </div>
              <h3>Minuman & Snack</h3>
              <p>Untuk menunda lapar pada saat menunggu antrian, pelanggan bisa mengganjal lapar dan haus saat di barbershop.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-couch"></i>
              </div>
              <h3>Kursi Barber</h3>
              <p>Barbershop memiliki kursi yang empuk dan tentunya berkualitas, agar pelanggan bisa duduk dengan nyaman pada saat potong rambut.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-toilet"></i>
              </div>
              <h3>Toilet</h3>
              <p>Kami menyediakan toilet bagi pelanggan barbershop yang bersih dan rapi tentunya agar pelanggan tidak merasa risih.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

  <!-- ======= Kelebihan ======= -->
  <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(https://assets.promediateknologi.com/crop/0x0:0x0/750x500/photo/ayosemarang/images/post/articles/2020/08/27/62734/zetra_barber_shop.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Kelebihan</h3>
            <p>barbershop CutLuck memiliki kelebihan dari pangkas rambut dan barbershop lainya, kelebihan - kelebihan tersebut sebagai berikut </p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-people-fill flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Karyawan Profesional</a></h4>
                <p>Karyawan memiliki keahlian untuk memotong rambut, karyawan juga bisa memotong cambang dan kumis.aryawan memiliki keahlian untuk memotong rambut, karyawan juga bisa memotong cambang dan kumis.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-scissors flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Peralatan Lengkap</a></h4>
                <p>Alat yang dipakai baberman yaitu clipper yang memang sangat cocok untuk memotong rambut pria.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-emoji-heart-eyes flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Pelayanan Memuaskan</a></h4>
                <p>Pelayanan habis potong rambut mendapatkan pijatan dibagian pundak, kepala dan punggung supaya relax.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-broadcast-pin flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Suasana Nyaman</a></h4>
                <p>Barbershop menggunakan ac dan koneksi internet yang cepat agar pelanggan merasakan kenyamanan.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End kelebihan -->

    "{{ asset('image/model-5.jpg') }}"

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeri</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-remodeling">Model</li>
            <li data-filter=".filter-construction">Coloring</li>
            <li data-filter=".filter-repairs">Creambath</li>
            <li data-filter=".filter-design">Styling</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="{{ asset('image/model-1.jpg') }}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="{{ asset('image/model-2.jpg') }}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Contoh Coloring</h4>
                  <p>Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                  <a href="{{ asset('image/model-3.jpg') }}" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-7.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Style</h4>
                  <p>Dengan Style yang rapi akan membuat anda lebih tampan</p>
                  <a href="{{ asset('image/model-7.jpg') }}" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-4.png') }}"class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="{{ asset('image/model-4.png') }}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-6.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Style</h4>
                  <p>Dengan Style yang rapi akan membuat anda lebih tampan</p>
                  <a href="{{ asset('image/model-6.jpg') }}" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-8.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Contoh Coloring</h4>
                  <p>Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                  <a href="{{ asset('image/model-8.jpg') }}" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-9.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="{{ asset('image/model-9.jpg') }}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-10.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="{{ asset('image/model-10.jpg') }}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-16.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Contoh Coloring</h4>
                  <p>Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                  <a href="{{ asset('image/model-16.jpg') }}" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-11.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Style</h4>
                  <p>Dengan Style yang rapi akan membuat anda lebih tampan</p>
                  <a href="{{ asset('image/model-11.jpg') }}"title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-17.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelayanan Creambath</h4>
                  <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                  <a href="{{ asset('image/model-17.jpg') }}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-15.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="{{ asset('image/model-15.jpg') }}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-12.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="{{ asset('image/model-12.jpg') }}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('image/model-14.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gaya Rambut</h4>
                  <p>Gaya Rambut yang keren akan membuat anda semakin percaya diri</p>
                  <a href="{{ asset('image/model-14.jpg') }}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

      <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Barbershop</h3>
              <p> Barbershop adalah tempat potong/pangkas rambut yang melayani berbagai model rambut dengan pelayanan dan fasilitas terbaik kepada pelanggan <br>sehingga tingkat kenyamanan yang tinggi dapat dirasakan oleh pelanggan
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Kritik dan Saran</h3>
              <p>Berikan kritik dan saran anda kepada kami </p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="No Telpon" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Masukkan Pesan " required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Kirimkan</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

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





