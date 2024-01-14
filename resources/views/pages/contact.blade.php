<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Hospital Managment System</title>
          <link rel="icon" type="image/x-icon" href="/img/icon.png">


        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style1.css">
      </head>

      <body>

        <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-flex align-items-center fixed-top">
          <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
              <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">mhantor722@gmail.com</a>
              <i class="bi bi-phone"></i> +880 1608814690
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
          </div>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
          <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">MHA-CARE</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                <li><a class="nav-link scrollto active" href="{{route('pages.home')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{route('pages.about')}}">About</a></li>
                <li><a class="nav-link scrollto" href="{{route('pages.service')}}">Services</a></li>
                <li><a class="nav-link scrollto" href="{{route('pages.doctor')}}">Doctors</a></li>
                <li><a class="nav-link scrollto" href="">Contact</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
               <!--user icon-->

        <div class="usericon">
            <a href="{{route('login')}}" target="_blank">
                <i class="fa fa-regular fa-user"></i>
            </a>
        </div>

        <!---user end-->
            </nav><!-- .navbar -->

            <a href="{{route('pages.appointment')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

          </div>
        </header><!-- End Header -->
        <br><br><br>
  <main id="main">



        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5">
        <div class="container">

          <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
        </div>

        <!--Google map-->
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=670&amp;height=363&amp;hl=en&amp;q=kist hospital&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">FNF Mods</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:363px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:363px;}.gmap_iframe {height:363px!important;}</style></div>

        <div class="container">
          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>KIST Hospital Road, 44700</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>prcare@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 55234 5112 33s</p>
                </div>
              </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
              <form action="{{route('message')}}" method="post" id="quickForm" enctype="multipart/form-data" role="form" class="php-email-form">
                  @csrf
                <div class="row">




                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>


              </form>

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

            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>PR-CARE</h3>
                <p>
                  KIST Hospital Road<br>
                  44700 KTM, NEPAL<br><br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> prcare@example.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="https://www.facebook.com/groups/577400563258704" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#doctor">Doctors</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Extra Web Course</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Navbar Tutorial</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>

            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>PR-CARE</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://www.youtube.com/channel/UCc5GjlNTdSV4ZZCsX61mccg">PraRoz</a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/purecounter/purecounter.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

      </body>
</html>
