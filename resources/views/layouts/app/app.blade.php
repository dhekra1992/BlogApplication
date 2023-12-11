<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gestion des articles</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/ficon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>

  @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Type your email</h4>
            <form id="form_id" action="{{route('storeEmail')}}" method="POST">
              @csrf
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
                @if(session('success'))
                  <div class="text-success">{{ session('success') }}</div>
                @endif
                @error('required')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                
                @error('unique')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>MedSpeakers</h4>
            <p>
              A108 Adam Street <br>
              Menzah4, NY 535022<br>
              Tunisia <br><br>
              <strong>Phone:</strong> +216 55 488 455<br>
              <strong>Email:</strong> medspeakers@example.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('accueil') }}#hero">HOME</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('accueil') }}#about">ABOUT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('accueil') }}#articles">ARTICLES</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>You can connect with us via</p>
            <div class="social-links mt-3">
              <a href=" https://twitter.com/" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
              <a href=" https://www.skype.com/" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>
              <a href="https://www.linkedin.com/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>MedSpeakers</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
        Designed by <a href="#">MedSpeakers</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>