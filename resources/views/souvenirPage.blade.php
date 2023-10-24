<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <!-- Bootstrap CSS (from CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- Bootstrap Icons (from CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS (from CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Lightbox (from CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/glightbox@1.2.3/dist/css/glightbox.min.css" rel="stylesheet">
    <!-- Swiper (from CDN) -->
    <link href="https://unpkg.com/swiper@6.8.5/dist/css/swiper.min.css" rel="stylesheet">
    <!-- Your Main CSS File -->


    @vite('resources\css\style2.css')
    <!-- NODE JS
    NPM INSTALL
    NPM RUN DEV
    PHP ARTISAN SERVE -->

    <link href="{{ asset('images/style.css') }}" rel="stylesheet">

    <title>PP</title>

    <style>
        /* Media untuk menghilangkan button dan baru memunculkannya ketika layar mengecil
        Klo taroh di css, ntah kenapa gk work */
        @media (min-width: 768px) {
            .buy-ticket-btn {
                display: none;
            }
        }

        #header {
            height: 60px;
            transition: all 0.5s;
            z-index: 997;
            background: rgba(52, 59, 64);
        }

        #header.header-transparent {
            background: rgba(52, 59, 64);  
        }

        .navbar a,
        .navbar a:focus {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: "Poppins", sans-serif;
            color: #cccccc;
            font-size: 14px;
            padding: 0 4px;
            white-space: nowrap;
            transition: 0.3s;
            letter-spacing: 0.4px;
            position: relative;
            text-transform: uppercase;
        }
        @media (max-width: 767px) {
            .carousel-inner .carousel-item > div {
                display: none;
            }
            .carousel-inner .carousel-item > div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

            /* medium and up screens */
            @media (min-width: 768px) {
                
                .carousel-inner .carousel-item-end.active,
                .carousel-inner .carousel-item-next {
                transform: translateX(25%);
                }
                
                .carousel-inner .carousel-item-start.active, 
                .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
                }
            }

            .carousel-inner .carousel-item-end,
            .carousel-inner .carousel-item-start { 
            transform: translateX(0);
        }
        .card-title{
            font-weight: bold;
            font-size: 20px;
        }
        .card-img{
            width: fit-content;
            height: auto;
            min-height: 21em;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            border: none;
            max-height: 29em;
        }
        .card-img:hover{
            transform: scale(1.1);
            transition: 2ms;
        }

        /* Smooth carousel transition */
        .carousel-inner {
            transition: transform 0.5s ease;
        }

        .modal-dialog {
            max-width: 980em; /* Set your desired width here */
            width: 90%; /* Adjust the width as needed */
            max-height: 900em; /* Set your desired height here */
            height: 80%; /* Adjust the height as needed */
        }
        .modal-dialog-bayar {
            max-width: 400em; /* Set your desired width here */
            width: 60%; /* Adjust the width as needed */
            max-height: 300em; /* Set your desired height here */
            height: 20%; /* Adjust the height as needed */
        }
        .mT{
            display: flex;
            justify-content: center;
            align-items: center;

        }
        
    </style>
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">
    
          <div id="logo">
            <a href="index.html"><img src=" "alt=""></a>
          </div>
           <!-- Off-Canvas Navbar -->
           <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="{{ url('home') }}">Home</a></li>
              <li><a class="nav-link scrollto" href="{{ url('home') }}">About</a></li>
              <li><a class="nav-link scrollto" href="{{ url('home') }}">Feautured Event</a></li>
              <li><a class="nav-link scrollto active" href="{{ url('home') }}">Souvenir</a></li>
              <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#iu">IU - Golden Hour</a></li>
                  <li><a href="#cld">Coldplay - Music of the Sphere</a></li>
                  <li><a href="#tls">Tulus - Tur Manusia 2023</a></li>
                  <li><a href="#ipes">Informatics Festival 11</a></li>
                  <li><a href="{{ url('acara') }}">JKT-48</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="{{ url('home') }}">Contact</a></li>
            </ul>
            <i class="fa fa-list mobile-nav-toggle"><img src="https://i.pinimg.com/originals/26/9d/d1/269dd16fa1f5ff51accd09e7e1602267.png" style="width: 30px; height:30px;"/></i>
          </nav><!-- .navbar --> 
        </div>
    </header>
    
    <div class="container text-center mt-5 pt-5">
        <div class="row mx-auto my-auto justify-content-center">
            <div style="background-color: #49D6A9; color:black">
                <h1 class="mt-3" style="font-weight: bolder">JKT-48</h1>
                <h4>Bergabung menjadi WOTA dengan souvenir-souvenir ini!</h4>
            </div>
            <div id="souvenirCarousel" class="carousel slide m-0 mt-2" data-bs-ride="carousel" style="border: 1px solid margin-top:0">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/bajuWota.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/bajuWota.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/shirt.png') }}" class="img-fluid" >
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/bajuWota.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/bajuWota.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/shirt.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#souvenirCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#souvenirCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <div class="row mx-auto my-auto mt-5 justify-content-center">
            <div style="background-color: #49D6A9; color:black">
                <h1 class="mt-3" style="font-weight: bolder">Coldplay - Music Of The Sphere</h1>
                <h4>Bergabung menjadi Colders dengan souvenir-souvenir ini!</h4>
            </div>
            <div id="souvenirCarousel2" class="carousel slide m-0 mt-2" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card" data-bs-toggle="modal" data-bs-target="#myModal">
                                <div class="card-img">
                                    <img src="{{ asset('images/bajuWota.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/bajuWota.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/shirt.png') }}" class="img-fluid" >
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/bajuWota.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/bajuWota.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset('images/shirt.png') }}" class="img-fluid">
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   Baju Wota
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p style="margin: 0">Harga: Rp 120.000</p>
                                    <p style="margin: 0">Stok: 120</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#souvenirCarousel2" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#souvenirCarousel2" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"   >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"> 
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <img src="{{ asset('images/bajuWota.png') }}" alt="Your Image" class="img-fluid">
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <h2>Baju WOTA</h2>
                            <h3>Harga: Rp 120.000</h3>
                        </div>
                    </div>
                    <span class="d-flex justify-content-end">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Bayar</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-bayar">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mT m-4"> 
                        <img src="{{ asset('images/done.png') }}" class="img-fluid" style="max-width: 20%; max-height:20%"/> 
                        
                    </div>
                    <span style="display: flex; justify-content:center"><h1 class="mt-2">Pembayaran Berhasil!</h1></span>                
                </div>
            </div>
        </div>
    </div>

    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>

    <script src="{{ asset('vendor/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <script src="{{ asset('images/main.js') }}"></script>
</body>

</html>