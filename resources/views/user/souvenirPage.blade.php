@extends('navbar/navbarUser')
@section('content')
 
 <style>
        /* Media untuk menghilangkan button dan baru memunculkannya ketika layar mengecil
        Klo taroh di css, ntah kenapa gk work */
       
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
            width: 60%; /* Adjust the width as needed */
            max-height: 900em; /* Set your desired height here */
            height: 50%; /* Adjust the height as needed */
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


    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">
    
          <div id="logo">
            <a href="index.html"><img src=" "alt=""></a>
          </div>
           <!-- Off-Canvas Navbar -->
           <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="{{ url('home') }}">Home</a></li>
              <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#iu">IU - Golden Hour</a></li>
                  <li><a href="#cld">Coldplay - Music of the Sphere</a></li>
                  <li><a href="#tls">Tulus - Tur Manusia 2023</a></li>
                  <li><a href="#ipes">Informatics Festival 11</a></li>
                  <li><a href="{{ url('acara') }}">JKT-48</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto active" href="{{ url('home') }}">Souvenir</a></li>
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
                    {{-- @forelse($souvenirs as $souvenir) --}}
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
                    {{-- @endforelse --}}
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
                            <div class="card" data-bs-toggle="modal" data-bs-target="#myModal">
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
                            <div class="card" data-bs-toggle="modal" data-bs-target="#myModal">
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
                        <div class="col-md-8 col-sm-12 mt-3">
                            <h3 style="font-weight: bolder">Baju WOTA</h3>
                            <h5>Harga : Rp 120.000</h5>
                            <h5>QTY : 
                                <select name="total" id="total" style="max-width: 50px">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                            </h5>
                            <h5>
                                Total : Rp XXX.XXX
                            </h5>
                            <h5>Alamat Lengkap: </h5>
                            <input class="form-control col-7" placeholder="Jalanin Aja Dulu Nomor 1 Kasihan, Bantul"> 
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

    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

    @endsection