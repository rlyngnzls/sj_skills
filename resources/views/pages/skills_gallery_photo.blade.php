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
<main id="main">
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container mt-5">

      <div class="section-title">
        <h2>PHOTO GALLERY</h2>
        <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Photo</li>
            <li data-filter=".filter-card">Video</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('/img/portfolio/portfolio-1.jpg')}}" data-gall="portfolioGallery" class="link-preview venobox" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 1</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('/img/portfolio/portfolio-2.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 3</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('/img/portfolio/portfolio-3.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 2</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('/img/portfolio/portfolio-4.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 2</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('/img/portfolio/portfolio-5.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 2</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('/img/portfolio/portfolio-6.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 3</a></h4>
              <p>App</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('/img/portfolio/portfolio-7.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 1</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('/img/portfolio/portfolio-8.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 3</a></h4>
              <p>Card</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('/img/portfolio/portfolio-9.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 1</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->
</main><!-- End #main -->
@endsection
