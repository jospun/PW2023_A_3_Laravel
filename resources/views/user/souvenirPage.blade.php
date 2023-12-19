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
            height: 50%;
            max-height: 15em;
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


    
    <div class="container text-center mt-5 pt-5 mb-5">
        @foreach($acara as $ac)
        <?php
            $souvenir = \App\Models\Souvenir::all();
            $souvenirFilter = $souvenir->where('id_acara','=', $ac->id);
            $totalSouve = $souvenirFilter->count(); 
        ?>
        @if($totalSouve > 0)
        <div class="row mx-auto my-5 justify-content-center">
            <div style="background-color: #49D6A9; color:black">
                <p>{{ $totalSouve }}</p>
                <h1 class="mt-3" style="font-weight: bolder">{{ $ac->nama_acara }}</h1>
                <h4>{{ $ac->deskripsi }}</h4>
            </div>
            <div id="souvenirCarousel" class="carousel slide m-0 mt-2" data-bs-ride="carousel" style="border: 1px solid margin-top:0">
                <div class="carousel-inner" role="listbox">
                    <?php $first = true; ?>
                    <div class="row">
                    @forelse($souvenirFilter as $souve)
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card" data-bs-toggle="modal" data-bs-target="#myModal">
                                <div class="card-img">
                                    <img id="gambar" src="{{ asset($souve->gambar)}}" class="img-fluid" >
                                </div>
                                <div class="card-title mt-3 mb-0">
                                   {{ $souve->nama }}
                                </div>
                                <div class="card-description" style="text-align: center">
                                    <p id="harga" style="margin: 0">Harga: Rp {{ $souve->harga }}</p>
                                    <p style="margin: 0">Stok: {{ $souve->stok }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
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
        <hr>
        @endif
        @endforeach
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"   >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"> 
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <img src="{{ asset('images/bajuWota.png') }}" alt="Your Image" class="img-fluid modal-img">
                        </div>                        
                        <div class="col-md-8 col-sm-12 mt-3">
                            <h3 id="nama" style="font-weight: bolder">Baju WOTA</h3>
                            <h5 id="harga">Harga : Rp 120.000</h5>
                            <h5 id="qty">QTY : 
                                <select name="total" id="total" style="max-width: 50px">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                            </h5>
                            <h5 id="total">
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


<script>
    $(document).ready(function(){
        $('.card').click(function(){
            let nama = $(this).find('.card-title').text().trim();
            let harga = $(this).find('#harga').text().trim().substring(10);
            let gambarSrc = $(this).find('#gambar').attr('src');

            console.log(harga);
            console.log(gambarSrc);

            $('#myModal .modal-body h3').text(nama);
            $('#myModal .modal-body h5:eq(0)').text('Harga: Rp ' + harga);

            $('#myModal .modal-body .modal-img').attr('src', gambarSrc);

            $('#myModal .modal-body select[name="total"]').empty();
            for(let i = 1; i <= 5; i++) {
                $('#myModal .modal-body select[name="total"]').append(`<option value="${i}">${i}</option>`);
            }

            $('#myModal .modal-body select[name="total"]').change(function() {
                let qty = parseInt($(this).val());
                let total = parseFloat(harga) * qty;
                $('#myModal .modal-body h5:eq(2)').text('Total : Rp ' + total);
            });
        });
    });
</script>


    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

    @endsection