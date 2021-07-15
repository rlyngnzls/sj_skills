@extends('layout.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>WELCOME TO <span>SAN JUAN SKILLS</span></h1>
      <h2>Be one of San Juan's talented personalities!</h2>
      <a href="#about" class="btn-get-started scrollto">REGISTER NOW</a>
    </div>
  </section><!-- End Hero --> -->

  <main id="main">

    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('/img/care.jpg')}}" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('/img/slidebake.jpg')}}" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('/img/slideelec.jpg')}}" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('/img/slidewelding.jpg')}}" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
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
              <h4><a href="{{route('caregiving')}}">Caregiving NC II</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/bake.png')}}"/></i></div>
              <h4><a href="{{route('baking')}}">Baking/Pastry Production</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/cpu.png')}}"/></i></div>
              <h4><a href="{{route('electronics')}}">Electronics W/ CCTV Installation</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui official</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/welding.png')}}"/></i></div>
              <h4><a href="{{route('welding')}}">Shielded Metal Arc Welding</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui official</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/meat-grinder.svg')}}"/></i></div>
              <h4><a href="{{route('food')}}">Basic Food Processing</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/mannequin.svg')}}"/></i></div>
              <h4><a href="{{route('dressmaking')}}">Dressmaking NC II</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/suit.svg')}}"/></i></div>
              <h4><a href="{{route('tailoring')}}">Tailoring</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui official</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i><img style=" width:100%; "src="{{asset('img/icons/dishwashing.svg')}}"/></i></div>
              <h4><a href="{{route('dishwashing')}}">Dishwashing</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui official</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- Offered Programs Section -->
  </main><!-- End #main -->
  @endsection
