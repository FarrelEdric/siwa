<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>siwa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{asset('vendor/bootstrap-icons/bootstrap-icons.css')}} rel="stylesheet">
  <link href={{asset("vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{asset("vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{asset("vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{asset("css/style.css")}} rel="stylesheet">

  <!-- =======================================================
  * Template Name: siwa
  * Template URL: https://bootstrapmade.com/siwa-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">siwa</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#team">team</a></li>
          <li><a class="nav-link scrollto " href="{{url('/login')}}">Login</a></li>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat Datang Di <span>Siwa</span></h1>
      <h2>Sistem Warga</h2>
      <a href="#about" class="btn-get-started scrollto">Mari Kita Mulai</a>
    </div>
  </section><!-- End Hero -->

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
              <h4><a href="">Kerja Bakti</a></h4>
              <p>Warga dapat mengetahui info terkini jadwal kerja bakti</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <h3 class="text-center">Tentang Kami</h3>
        <div class="row">
          <div class="col-lg-6">
            <img src={{asset("img/keluarga1.png")}} class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
           
            <p>
              SIWA adalah sebuah website inovatif yang dirancang untuk mengakomodasi berbagai kegiatan warga dengan menyediakan beragam fitur yang bermanfaat. Melalui SIWA, warga dapat dengan mudah mengakses informasi mengenai kegiatan sosial seperti kerja bakti, mendapatkan bantuan sosial (bansos), serta mengurus berbagai keperluan persuratan. Tidak hanya itu, SIWA juga berfungsi sebagai platform untuk memfasilitasi komunikasi dan koordinasi antarwarga, memastikan setiap individu dapat berpartisipasi aktif dalam membangun lingkungan yang harmonis dan produktif. Dengan tampilan yang user-friendly dan fitur-fitur yang komprehensif, SIWA menjadi solusi terpadu untuk meningkatkan keterlibatan dan kesejahteraan komunitas.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>6</p>
        </div>

        
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src={{asset("img/team/a3.jpeg")}} alt="">
              <h4>Fransiscus Farrel Edric Wijanarko</h4>
              <span>BackEnd</span>
              <p>
                @reldriccc
              </p>
              <div class="social">
                <a href="https://www.instagram.com/reldriccc/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src={{asset("img/team/a4.jpg")}} alt="">
              <h4>Satria Abrar</h4>
              <span>FrontEnd</span>
              <p>
                @satriaabraarr
              </p>
              <div class="social">
                <a href="https://www.instagram.com/satriaabraarr/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src={{asset("img/team/a1.jpg")}} alt="">
              <h4>Muhammad Irsyad Dany</h4>
              <span>Desain UI&UX</span>
              <p>
                @irsydanyy
              </p>
              <div class="social">
                <a href="https://www.instagram.com/irsydanyy/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src={{asset("img/team/Ratnasari.jpg")}} alt="">
              <h4>RatnaSari</h4>
              <span>Project Manager</span>
              <p>
                @ratna.saar
              </p>
              <div class="social">
                <a href="https://www.instagram.com/ratna.saar/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
          <p></p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Politeknik Negri Malang</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>fransiscus08@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>08997084448</p>
                </div>
              </div>
            </div>

          </div>

        </div>


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
            <h3>siwa</h3>
            <p>
            Politeknik Negri Malang <br>
              Malang<br>
              Indonesia <br><br>
              <strong>Telepon:</strong> 08997084448<br>
              <strong>Email:</strong> fransiscusfarrel08@gmail.com<br>
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
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/siwa-bootstrap-business-template/ -->
         
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>