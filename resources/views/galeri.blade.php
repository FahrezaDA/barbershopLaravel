<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Barbershop - Galeri</title>
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
          <li><a href="/pelayanan">Pelayanan</a></li>
          <li><a href="/tentangkami">Tentang Kami </a></li>
          <li><a href="/galeri" class="active">Galeri </a></li>
          <li><a href="/kontak">Kontak </a></li>
          <li><a href="dashboardPemesanan.php">Dashboard </a></li>
          <li><a href="/login">Login </a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('image/background.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Galeri</h2>
        <ol>
          <li><a href="index.php">Utama</a></li>
          <li>Galeri</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

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
                  <img src="{{url('/image/model-1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>gentlemen cut</h4>
                    <p>gentlemen cut - Potong rambut tanpa keramas dan diakhiri dengan pemakaian tonic atau pomade</p>
                    <a href="{{url('/image/model-1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-2.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Pelayanan Creambath</h4>
                    <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                    <a href="{{url('/image/model-2.jpg')}}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/coloring-1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Hair Coloring</h4>
                    <p>Hair Coloring - Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                    <a href="{{url('/image/coloring-1.jpg')}}" title="Coloring 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails3" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/style-1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Style gentlemen cut</h4>
                    <p>Style gentlemen cut - Dengan Style yang rapi akan membuat anda lebih tampan.
                      Gaya ini tentu memberikan pesona pria yang menarik hingga mudah mendapat perhatian wanita.</p>
                    <a href="{{url('/image/style-1.jpg')}}" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-2.1.png')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Grooming And Hair Tato</h4>
                    <p>Grooming And Hair Tato - Biarkan barberman kami yang terampil untuk membentuk dan merancang gaya rambut-mu seperti hasil mahakaryanya.</p>
                    <a href="{{url('/image/model-2.1.png')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails2" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-3.1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>kids haircut</h4>
                    <p>kids haircut - Pengalaman potong rambut yang ramah dan nyaman untuk si kecil.</p>
                    <a href="{{url('/image/model-3.1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails1" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/pelayanan-2.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Pelayanan Creambath</h4>
                    <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                    <a href="{{url('/image/pelayanan-2.jpg')}}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-4.1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>gentlemen cut</h4>
                    <p>gentlemen cut - Potong rambut tanpa keramas dan diakhiri dengan pemakaian tonic atau pomade</p>
                    <a href="{{url('/image/model-4.1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-5.1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>kids haircut</h4>
                    <p>kids haircut - Pengalaman potong rambut yang ramah dan nyaman untuk si kecil.</p>
                    <a href="{{url('/image/model-5.1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails1" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/coloring-2.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Hair Coloring</h4>
                    <p>Hair Coloring - Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                    <a href="{{url('/image/coloring-2.jpg')}}" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails3" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/coloring-3.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Hair Coloring</h4>
                    <p>Hair Coloring - Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                    <a href="{{url('/image/coloring-3.jpg')}}" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails3" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-4.png')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Style gentlemen cut</h4>
                    <p>Style gentlemen cut - Dengan Style yang rapi akan membuat anda lebih tampan.
                      Gaya ini tentu memberikan pesona pria yang menarik hingga mudah mendapat perhatian wanita.</p>
                    <a href="{{url('/image/model-4.png')}}" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-6.1.png')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>gentlemen cut</h4>
                    <p>gentlemen cut - Potong rambut tanpa keramas dan diakhiri dengan pemakaian tonic atau pomade</p>
                    <a href="{{url('/image/model-6.1.png')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/pelayanan-3.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Pelayanan Creambath</h4>
                    <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                    <a href="{{url('/image/pelayanan-3.jpg')}}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/style-3.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Style Perm Hair</h4>
                    <p>Style Perm Hair - Dengan Style yang rapi akan membuat anda lebih tampan, metode perm akan membuat rambut terlihat kriting dengan natural.
                    </p>
                    <a href="{{url('/image/style-3.jpg')}}" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails5" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/coloring-4.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Hair Coloring</h4>
                    <p>Hair Coloring - Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                    <a href="{{url('/image/coloring-4.jpg')}}" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails3" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-7.1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Perm Hair Treatment</h4>
                    <p>Perm Hair Treatment - Membuat rambut menjadi kriting dengan metode perm akan membuat rambut terlihat kriting dengan natural.</p>
                    <a href="{{url('/image/model-7.1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails5" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-8.1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Grooming And Hair Tato</h4>
                    <p>Grooming And Hair Tato - Biarkan barberman kami yang terampil untuk membentuk dan merancang gaya rambut-mu seperti hasil mahakaryanya.</p>
                    <a href="{{url('/image/model-8.1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails2" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/style-4.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Style gentlemen cut</h4>
                    <p>Style gentlemen cut - Dengan Style yang rapi akan membuat anda lebih tampan.
                      Gaya ini tentu memberikan pesona pria yang menarik hingga mudah mendapat perhatian wanita.</p>
                    <a href="{{url('/image/style-4.jpg')}}" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/coloring-5.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Hair Coloring </h4>
                    <p>Hair Coloring - Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                    <a href="{{url('/image/coloring-5.jpg')}}" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails3" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/pelayanan-4.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Pelayanan Creambath</h4>
                    <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                    <a href="{{url('/image/pelayanan-4.jpg')}}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-9.1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Smoothing</h4>
                    <p>Smoothing - Proses smoothing akan membuat rambutmu lurus dengan sempurna. Sehingga tidak akan mudah berantakan dan
                      tidak terlihat mengembang</p>
                    <a href="{{url('/image/model-9.1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails4" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/coloring-6.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Hair Coloring</h4>
                    <p>Hair Coloring - Dengan rambut berwarna hidupmu akan lebih berwarna</p>
                    <a href="{{url('/image/coloring-6.jpg')}}" title="Coloring" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails3" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-10.1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>gentlemen cut</h4>
                    <p>gentlemen cut - Potong rambut tanpa keramas dan diakhiri dengan pemakaian tonic atau pomade</p>
                    <a href="{{url('/image/model-10.1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-11.1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>gentlemen cut</h4>
                    <p>gentlemen cut - Potong rambut tanpa keramas dan diakhiri dengan pemakaian tonic atau pomade</p>
                    <a href="{{url('/image/model-11.1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/style-5.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Style Grooming And Hair Tato</h4>
                    <p>Style Grooming And Hair Tato - Dengan Style yang rapi akan membuat anda lebih tampan.
                      Penambahan aksen tatto akan membuat rambut anda lebih manly dan unik.</p>
                    <a href="{{url('/image/style-5.jpg')}}" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails2" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-12.1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Perm Hair Treatment</h4>
                    <p>Perm Hair Treatment - Membuat rambut menjadi kriting dengan metode perm akan membuat rambut terlihat kriting dengan natural.</p>
                    <a href="{{url('/image/model-12.1.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails5" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-13.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Perm Hair Treatment</h4>
                    <p>Perm Hair Treatment - Membuat rambut menjadi kriting dengan metode perm akan membuat rambut terlihat kriting dengan natural.</p>
                    <a href="{{url('/image/model-13.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails5" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/pelayanan-5.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Pelayanan Creambath</h4>
                    <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                    <a href="{{url('/image/pelayanan-5.jpg')}}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/style-6.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Style Smoothing</h4>
                    <p>Dengan Style yang rapi akan membuat anda lebih tampan. smoothing akan membuat rambutmu lurus dengan sempurna.</p>
                    <a href="{{url('/image/style-6.jpg')}}" title="Style" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails4" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-14.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Smoothing</h4>
                    <p>Smoothing - Proses smoothing akan membuat rambutmu lurus dengan sempurna. Sehingga tidak akan mudah berantakan dan
                      tidak terlihat mengembang</p>
                    <a href="{{url('/image/model-14.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails4" title="More Details" class="details-link"><i class='bx bx-link'></i>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/pelayanan-6.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Pelayanan Creambath</h4>
                    <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                    <a href="{{url('/image/pelayanan-6.jpg')}}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/model-15.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Smoothing</h4>
                    <p>Smoothing - Proses smoothing akan membuat rambutmu lurus dengan sempurna. Sehingga tidak akan mudah berantakan dan
                      tidak terlihat mengembang</p>
                    <a href="{{url('/image/model-15.jpg')}}" title="Gaya Rambut" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                    <a href="/servicedetails4" title="More Details" class="details-link"><i class='bx bx-link'></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/pelayanan-7.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Pelayanan Creambath</h4>
                    <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                    <a href="{{url('/image/pelayanan-7.jpg')}}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="{{url('/image/pelayanan-8.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Pelayanan Creambath</h4>
                    <p>Dengan pegawai yang kompeten akan membuat anda nyaman.</p>
                    <a href="{{url('/image/pelayanan-8.jpg')}}" title="Pelayanan Creambath" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bx bx-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

            </div><!-- End Projects Container -->

          </div>

        </div>
      </section>
    <!-- End Our Projects Section -->

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
  <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>
