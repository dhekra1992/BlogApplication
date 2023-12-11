@extends('layouts.app.app')
@section('content')
<br><br><br>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="#" class="logo">MedSpeakers</a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('accueil')}}">HOME</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
<section class="portfolio-details">
<div class="container">
    <div class="row gy-4">
    <div class="col-lg-6">
        <div class="portfolio-details-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <div>
            <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" height="550px" width="250"  alt="...">
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="portfolio-info text-center">
          <h3>Blog informations</h3>
          <img src="{{ asset('storage/' . $creater->avatar) }}"  height="100px" width="100px">
          <br><br>
          <ul>
              <li><strong>Created_By</strong>: {{$creater->name}}</li>
              <li><strong>Created_At</strong>: {{$article->created_at}}</li>
              <li><strong>Updated_At</strong>: {{$article->updated_at}}</li>
          </ul>
        </div>
        <div class="portfolio-description">
        <h2>{{$article->title}}</h2>
        <p>{{$article->content}}</p>
        </div>
    </div>

    </div>

</div>
</section>
<section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2>Releated Articles</h2>
        </div>
        <div class="row">
        @foreach($releatedArticles as $releatedArticle)
          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card">
              <img src="{{ asset('storage/' . $releatedArticle->image) }}" class="card-img-top" height="300px"  alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">{{ $releatedArticle->title }}</h5>
                <p class="card-text">{{$releatedArticle->short_description}}</p>
                <a href="{{ url('details', ['id' => $releatedArticle->id]) }}" target="_blank" class="btn btn-primary custom-btn">Read More</a>
              </div>
            </div>
          </div>
        @endforeach 
        </div>
      </div>
    </section> 
@endsection