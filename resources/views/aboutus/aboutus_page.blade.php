@extends('layout.app')
@section('content')
<!-- ======= Hero Section ======= -->
<!-- <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>WELCOME TO <span>SAN JUAN SKILLS</span></h1>
      <h2>Be one of San Juan's talented personalities!</h2>
      <a href="#about" class="btn-get-started scrollto">REGISTER NOW</a>
    </div>
  </section> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<main id="main">
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container mt-5">

      <div class="section-title">
        <h3 style="font-weight:600;">ABOUT SKILLS OFFICE</h3>
      </div>

      <div class="row">
        <div class="col-6">
          <img style="width:100%;" src="{{asset('/img/aboutcov.jpg')}}" alt="" class="img-fluid"></a>
        </div>
        <div class="col-6">
          <h2>Offer free skills and livelihood training to all San Juaneños.</h2>
          <i class="fa fa-phone" style="font-size:24px;">  286939464</i><br>
          <i class="fa fa-envelope" style="font-size:24px;"> <a href="mailto:sltcsanjuan@gmail.com">sltcsanjuan@gmail.com</a></i><br>
          <i class="fa fa-facebook" style="font-size:24px;"> <a href="https://www.facebook.com/skillstrainingsanjuancity/?ref=page_internal">@skillstrainingsanjuancity</a></i>
        </div>
      </div>

    </div>
  </section><!-- End Portfolio Section -->
</main><!-- End #main -->
@endsection
