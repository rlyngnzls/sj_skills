<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>San Juan Skills</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/img/makabago.png')}}" rel="icon">
  <link href="{{asset('/img/makabago.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia - v2.2.1
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center container" style="max-width: 90%;">

      <div class="logo mr-auto">
        {{-- <h1><a href="index.html">San Juan</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="{{asset('/img/sjc.png')}}" alt="" class="img-fluid"></a>
        <a href="index.html"><img src="{{asset('/img/makabago.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block ">
        <ul>
          <li class="active drop-down"><a>News</a>
            <ul>
              <li><a href="#">Articles</a></li>
              <li><a href="#">Announcements</a></li>
            </ul>
          </li>
          <li class="drop-down"><a>Programs</a>
            <ul>
              <li><a href="#">Caregiving</a></li>
              <li><a href="#">Baking</a></li>
              <li><a href="#">Electronics</a></li>
              <li><a href="#">Welding</a></li>
            </ul>
          </li>
          <li class="drop-down"><a>Class Schedules</a>
            <ul>
              <li><a href="#">January</a></li>
              <li><a href="#">February</a></li>
              <li><a href="#">March</a></li>
            </ul>
          </li>
          <li><a href="#">Career/Opportunities</a></li>
          <li class="drop-down"><a>Gallery</a>
            <ul>
              <li><a href="#">Photo</a></li>
              <li><a href="#">Video</a></li>
            </ul>
          </li>
          <li class="drop-down"><a>About Us</a>
            <ul>
              <li><a href="#">About the Office</a></li>
              <li><a href="#">Mission & Vision</a></li>
              <li><a href="#">Organizational Chart</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </li>
          <li><a href="#">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>WELCOME TO <span>SAN JUAN SKILLS</span></h1>
      <h2>Be one of San Juan's talented personalities!</h2>
      <a href="#about" class="btn-get-started scrollto">REGISTER NOW</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Offered Programs Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Offered Programs</h2>
          <p>These are the programs offered by Skills Department</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/disability.png')}}"/></i></div>
              <h4><a href="">Caregiving</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/bake.png')}}"/></i></div>
              <h4><a href="">Baking</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/cpu.png')}}"/></i></div>
              <h4><a href="">Electronics</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/welding.png')}}"/></i></div>
              <h4><a href="">Welding</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui official</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Offered Programs Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>San Juan Skills</h3>
            <p>
              4th floor Flying V Arena<br>
              Parking lot, Pinaglabanan St.,<br>
              Brgy. Corazon De Jesus, San Juan City<br><br>
              <strong>Phone:</strong> +639998887777<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Offered Programs</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Caregiving</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Baking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Electronics</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Welding</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">City Government of San Juan Website</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>City Government of San Juan</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/js/main.js')}}"></script>

</body>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(window).scroll(function() {
          var $height = $(window).scrollTop();
          $("#header").css("background","#fff");
        if($height > 50) {
              $("#header").css("background","#314096");
              $(".nav-menu a").css("color","#fff");
              $(".drop-down li a").css("color","inherit");
          } else {
              $("#header").css("background","inherit");
              $(".nav-menu a").css("color","inherit");


          }
      });
</script>
