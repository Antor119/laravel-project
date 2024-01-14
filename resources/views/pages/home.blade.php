<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hospital Managment System</title>
	<link rel="icon" type="image/x-icon" href="/img/icon.png">
    <link rel="stylesheet" href="css/style1.css">


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


  <!-- Favicon -->
  <link rel="icon" href="asset/img/favicon.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="asset/css/nice-select.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="asset/css/font-awesome.min.css">
  <!-- icofont CSS -->
  <link rel="stylesheet" href="asset/css/icofont.css">
  <!-- Slicknav -->
  <link rel="stylesheet" href="asset/css/slicknav.min.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="asset/css/owl-carousel.css">
  <!-- Datepicker CSS -->
  <link rel="stylesheet" href="asset/css/datepicker.css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="asset/css/animate.min.css">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="asset/css/magnific-popup.css">

  <!-- Medipro CSS -->
  <link rel="stylesheet" href="asset/css/normalize.css">
  <link rel="stylesheet" href="asset/style.css">
  <link rel="stylesheet" href="asset/css/responsive.css">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">prcare@example.com</a>
        <i class="bi bi-phone"></i> +1 5567 23453 21
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

      <h1 class="logo me-auto"><a href="index.html">PR-CARE</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('pages.home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('pages.about')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{route('pages.service')}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{route('pages.doctor')}}">Doctors</a></li>
          <li><a class="nav-link scrollto" href="{{route('pages.contact')}}">Contact</a></li>
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

  <!-- ======= Home Section ======= -->

		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('asset/img/slider2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="{{route('pages.appointmentecho "# laravel-project" >> README.md')}}" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				{{-- <div class="single-slider" style="background-image:url('asset/img/slider.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">About Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				{{-- <div class="single-slider" style="background-image:url('asset/img/slider3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Conatct Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->

		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>Lorem Amet</span>
										<h4>Emergency Cases</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span>Fusce Porttitor</span>
										<h4>Doctors Timetable</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>Donec luctus</span>
										<h4>Opening Hours</h4>
										<ul class="time-sidual">
											<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
											<li class="day">Saturday <span>9.00-18.30</span></li>
											<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
										</ul>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->
<br><br><br><br><br><br>
  <main id="main">



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
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('pages.home')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('pages.about')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('pages.service')}}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('pages.doctor')}}">Doctors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('pages.contact')}}">Contact</a></li>
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
  {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>



  <!-- jquery Min JS -->
  <script src="asset/js/jquery.min.js"></script>
  <!-- jquery Migrate JS -->
  <script src="asset/asset/js/jquery-migrate-3.0.0.js"></script>
  <!-- jquery Ui JS -->
  <script src="asset/js/jquery-ui.min.js"></script>
  <!-- Easing JS -->
  <script src="asset/js/easing.js"></script>
  <!-- Color JS -->
  <script src="asset/js/colors.js"></script>
  <!-- Popper JS -->
  <script src="asset/js/popper.min.js"></script>
  <!-- Bootstrap Datepicker JS -->
  <script src="asset/js/bootstrap-datepicker.js"></script>
  <!-- Jquery Nav JS -->
  <script src="asset/js/jquery.nav.js"></script>
  <!-- Slicknav JS -->
  <script src="jasset/s/slicknav.min.js"></script>
  <!-- ScrollUp JS -->
  <script src="asset/js/jquery.scrollUp.min.js"></script>
  <!-- Niceselect JS -->
  <script src="asset/js/niceselect.js"></script>
  <!-- Tilt Jquery JS -->
  <script src="asset/js/tilt.jquery.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="asset/js/owl-carousel.js"></script>
  <!-- counterup JS -->
  <script src="asset/js/jquery.counterup.min.js"></script>
  <!-- Steller JS -->
  <script src="asset/js/steller.js"></script>
  <!-- Wow JS -->
  <script src="asset/js/wow.min.js"></script>
  <!-- Magnific Popup JS -->
  <script src="asset/js/jquery.magnific-popup.min.js"></script>
  <!-- Counter Up CDN JS -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="jasset/s/bootstrap.min.js"></script>
  <!-- Main JS -->
  <script src="asset/js/main.js"></script>
</body>

</html>
