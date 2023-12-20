<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>FEST fes</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <!-- Bootstrap CSS (from CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (from CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS (from CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Lightbox (from CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/glightbox@1.2.3/dist/css/glightbox.min.css" rel="stylesheet">
    <!-- Swiper (from CDN) -->
    <link href="https://unpkg.com/swiper@6.8.5/dist/css/swiper.min.css" rel="stylesheet">
    <!-- Your Main CSS File -->
    <link href="{{ asset('images/style.css') }}" rel="stylesheet">

    <style>
      body {
        margin: 0;
      }

      .event-pic {
        position: fixed;
        top: 0;
        left: 0;
        padding: 0px 12px 20px 12px;
        margin-bottom: 50px;
        width: 100% !important;
        height: 93.25% !important;
        object-fit: cover;
        z-index: -2;
        overflow: hidden;
      }

      .event-pic::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: rgba(0, 0, 0, .5);
      }

      .bft {
        background-color: #fff;
        color: #111;
        font-family: "Poppins", sans-serif;
        font-size: 14px;
        margin-top: 1em;
        width: 8em;
        font-weight: 700;
      }

      .bft:hover {
        background-color: #49D6A9;
        color: #111;
      }

      .bft-2 {
        background-color: transparent;
        color: #eeeeee;
        border: 2.5px solid #eeeeee;
        font-family: "Poppins", sans-serif;
        font-size: 14px;
        margin-top: 1em;
        width: 8em;
        font-weight: 700;
      }

      .bft-2:hover {
        background-color: #49D6A9;
        color: #111;
      }

      .container-btn {
        position: relative;
        width: 100%;
        height: 110%;
        display: flex;
        justify-content: end;
        align-items: end;
        flex-direction: column;
        text-align: center;
      }

      .container-btn .title {
        position: absolute;
        bottom: 0;
        left: 0;
        margin: 10px;
        text-shadow: 1px 1px 4px #eee;
      }

      .scrollable-x {
        overflow-x: auto;
        white-space: nowrap;
      }

      .scrollable-x::-webkit-scrollbar {
        width: 0.5em;
      }

      .scrollable-x::-webkit-scrollbar-thumb {
        background-color: #eeeeee;
      }
    </style>
  </head>

<body>
  <!-- ======= Header DONE ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <a href="index.html"><img src=" " alt=""></a>
      </div>
      <!-- Off-Canvas Navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <!-- @if (Auth::check())
          <p>User is authenticated</p>
          @else
          <p>User is not authenticated</p>
          @endif -->
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#featured">Feautured Event</a></li>
          <li><a class="nav-link scrollto" href="#souvenir">Souvenir</a></li>
          <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            @forelse($event as $ev)
                <li><a href="{{ url('acara/' . $ev->id) }}">{{ $ev->nama_acara }}</a></li>
            @empty
                <li><a>Stay Tuned!</a></li>
            @endforelse
              <li><a href="{{ url('acara') }}">JKT-48</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#">Contact</a></li>
          @auth
          <li><a class="nav-link scrollto" href="{{ url('/profile') }}">Profile</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/logout') }}">Logout</a></li>
          @else
          <li><a class="nav-link scrollto" href="{{ url('/login') }}">Login</a></li>
          @endauth

        </ul>
        <i class="fa fa-list mobile-nav-toggle"><img src="https://i.pinimg.com/originals/26/9d/d1/269dd16fa1f5ff51accd09e7e1602267.png" style="width: 30px; height:30px;" /></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <div class="content-wrapper">
    @yield('content')
  </div>
</body>

<script src="{{ asset('vendor/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

<script src="{{ asset('images/main.js') }}"></script>

</html>