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
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
        <br><br>


<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg mt-5">
    <div class="container">

      <div class="section-title">
        <h2>Make an Appointment</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <form accept="" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >

          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" >

          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" >

          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="age" id="age" class="form-select">
              <option value="">Select Age</option>
              <option value="Department 1">Below 18</option>
              <option value="Department 2">18-40</option>
              <option value="Department 3">40 above</option>
            </select>

          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
              <option value="">Select Doctor</option>
              <option value="Doctor 1">Doctor 1</option>
              <option value="Doctor 2">Doctor 2</option>
              <option value="Doctor 3">Doctor 3</option>
            </select>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>

        </div>
        <div class="text-center"><button type="submit">Make an Appointment</button></div>
      </form>

    </div>
  </section><!-- End Appointment Section -->
  <br><br><br><br><br><br><br><br>




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

