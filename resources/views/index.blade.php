<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siwa</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- <link rel="icon" href="assets/img/favicon.png">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo me-auto">
        <h1><a href="index.html">Siwa</a></h1>
      </div>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="height: 100vh" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat Datang Di <span>Siwa</span></h1>
      <h2>Sistem Warga</h2>
      <a href="{{ url('/login') }}" class="btn-get-started scrollto">Mari Kita Mulai</a>
    </div>
  </section><!-- End Hero -->

  <div id="berita" class="section-title mt-5">
    <h2>Berita Dan Informasi</h2>
  </div>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
    <div class="carousel-inner">
      @foreach ($model as $item)
      <div style="height: 400px" class="position-relative carousel-item active">
        <img src="{{asset($item->image)}}" class="d-block w-100" alt="...">
        <div style="top:0; left:0;background:black;opacity:30%;" class="h-100 w-100 position-absolute "></div>
        <div  class="carousel-caption d-none d-md-block">
          <h5 style=" opacity:100%;">{{$item->jenis_kegiatan}}</h5>
          <p>{{$item->deskripsi}}</p>
        </div>
      </div>
      @endforeach
     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Apa Yang Kami Sediakan</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Bansos</a></h4>
              <p>Kini warga dapat mengajukan bansos dengan mudah</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Surat</a></h4>
              <p>Pada menu surat warga dapat menggunakan agar memudahkan dalam persuratan</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Informasi</a></h4>
              <p>Warga dapat mengetahui informasi dan kegiatan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->
 
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <h3 class="text-end mr-10px">Tentang Kami</h3>
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/keluarga1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <br>
            <p style="text-align: justify;">
              SIWA adalah sebuah website inovatif yang dirancang untuk mengakomodasi berbagai kegiatan warga dengan menyediakan beragam fitur yang bermanfaat. Melalui SIWA, warga dapat dengan mudah mengakses informasi mengenai kegiatan sosial seperti kerja bakti, mendapatkan bantuan sosial (bansos), serta mengurus berbagai keperluan persuratan. Tidak hanya itu, SIWA juga berfungsi sebagai platform untuk memfasilitasi komunikasi dan koordinasi antarwarga, memastikan setiap individu dapat berpartisipasi aktif dalam membangun lingkungan yang harmonis dan produktif. Dengan tampilan yang user-friendly dan fitur-fitur yang komprehensif, SIWA menjadi solusi terpadu untuk meningkatkan keterlibatan dan kesejahteraan komunitas.
            </p>
            
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2></h2>
          <p></p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Desa Tanjungrejo </p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                </div>
                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>siwa08@gmail.com</p>
                </div>
              </div>
            </div>

          </div>

        </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SIWA</h3>
            <p>
           Desa Tanjungrejo<br>
              Sukun Malang<br>
              Indonesia <br><br>
              {{-- <strong>Telepon:</strong> 08997084448<br> --}}
              <strong>Email:</strong> siwa08@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
            </ul>
          </div>

         
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>siwa</span></strong>. All Rights Reserved (Saonoke)
        </div>
        <div class="credits">

        </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
