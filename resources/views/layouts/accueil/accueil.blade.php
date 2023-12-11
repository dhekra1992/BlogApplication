@extends('layouts.app.app')
@section('content')
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="#" class="logo">MedSpeakers</a>
      <!-- Uncomment below if you prefer to use text as a logo -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <li><a class="nav-link scrollto" href="#about">ABOUT</a></li>
          <li><a class="nav-link scrollto" href="#articles">ARTICLES</a></li>
          <div><a href="http://127.0.0.1:8000/admin" target="_blank" class="nav-link scrollto"><img src="assets/img/user_avatar.jpg" width="30px" height="30px" class="img-fluid" alt=""></a></div>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Welcome To MedSpeakers</h1>
          <h2>With MedSpeakers, you can be pleased, satisfied, and winner
          <br>Join MedSpeakers for a transformative experience, where knowledge meets inspiration.
          <br>At MedSpeakers, excellence is not just a goal; it's a journey towards success and fulfillment.</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <br><br>
          <img src="assets/img/industry_healthcare.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
</section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=83kNcmIBqBU" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Medspeakers offers these services</h3>
            <p>Welcome to MedSpeakers, where excellence in healthcare communication takes center stage. MedSpeakers is dedicated to providing unparalleled services that transcend the boundaries of conventional medical discourse. As a leading provider in the industry, we pride ourselves on delivering impactful and innovative solutions to meet the diverse needs of healthcare professionals and organizations. Explore a world of dynamic and tailored services with MedSpeakers, where your communication goals become our success stories.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Traceability</a></h4>
              <p class="description">Traceability involves systematically documenting and tracking the origin and movement of products, ensuring transparency and accountability in various industries.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Gifts Opportunities</a></h4>
              <p class="description">Gifts Opportunities offers a curated selection of thoughtful and personalized gifts, providing a unique and memorable way to express sentiments for various occasions.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Networking Opportunities</a></h4>
              <p class="description">Platforms for healthcare professionals to connect, fostering collaboration and community building.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="articles" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2>All Articles</h2>
          <p>Welcome to our collection of articles, where insights meet inspiration. Explore a diverse range of topics curated to inform, engage, and enrich your knowledge across various subjects. Happy reading!</p>
        </div>
        <div class="row">
        @foreach($articles as $article)
          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card">
              <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" height="300px"  alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">{{ $article->title }}</h5>
                <p class="card-text">{{$article->short_description}}</p>
                <a href="{{ url('details', ['id' => $article->id]) }}" target="_blank" class="btn btn-primary custom-btn">Read More</a>
              </div>
            </div>
          </div>
        @endforeach 
        </div>
      </div>
    </section><!-- End Section -->   
@endsection
