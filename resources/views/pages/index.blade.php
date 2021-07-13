@extends('layout.app')
@section('content')

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
              <h4><a href="{{route('caregiving')}}">Caregiving</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/bake.png')}}"/></i></div>
              <h4><a href="{{route('baking')}}">Baking</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/cpu.png')}}"/></i></div>
              <h4><a href="{{route('electronics')}}">Electronics</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/welding.png')}}"/></i></div>
              <h4><a href="{{route('welding')}}">Welding</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui official</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Offered Programs Section -->
  </main><!-- End #main -->
  @endsection