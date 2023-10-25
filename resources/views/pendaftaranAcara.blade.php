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
              <li><a class="nav-link scrollto" href="{{ url('souvenir') }}">Souvenir</a></li>
              <li><a class="nav-link scrollto active" href="#">JKT-48</a></li>
            </ul>
            <i class="fa fa-list mobile-nav-toggle"><img src="https://i.pinimg.com/originals/26/9d/d1/269dd16fa1f5ff51accd09e7e1602267.png" style="width: 30px; height:30px;"/></i>
          </nav><!-- .navbar --> 
        </div>
    </header>
    
    <div style="display: flex;" class="mt-5">
        <div class="column-boxEvent bg-white m-2 mt-4">
            <div class="eventTitle">JKT-48 Festival Greatest Hits</div>
            <div class="img-forEvent">
                <img src="https://4.bp.blogspot.com/-75JWKnQiH-4/WRES2kLgGlI/AAAAAAAABGE/YE4Nh0NBfM81g_7JHPikTXoLUNe3zemngCLcB/s1600/JKT48%2BFestival%2BGreatest%2BHits.jpg.jpg" alt="Gambar">
            </div>
            <div class="desc-forEvent">
                <div class="desc-performerTitle ml-5 mb-3">Deskripsi</div>
                <p div class="ml-5 mr-5">
                    Dengan bangga mempersembahkan JKT48 Festival Greatest Hits, acara yang telah lama dinantikan oleh jutaan penggemar setia di seluruh penjuru Indonesia. Menandai momen yang tak terlupakan dalam perjalanan gemilang JKT48, festival ini akan menghidupkan kembali kilas balik penuh nostalgia serta memamerkan karya-karya paling ikonik dari para bintang tercinta. Tidak hanya sekadar konser, acara ini juga menawarkan pengalaman interaktif yang mendalam, memungkinkan para penggemar untuk merasakan kedekatan yang lebih dekat dengan idola mereka melalui sesi tanya jawab, pertemuan penggemar, dan acara pelengkap lainnya.
                    Para pengunjung dapat memanjakan telinga mereka dengan melodi-melodi yang memikat hati, sambil membiarkan diri terbawa oleh irama-irama yang menggugah semangat dan menghadirkan kenangan indah dari masa lalu. Dengan pertunjukan spesial dari setiap anggota JKT48, festival ini tidak hanya membangkitkan semangat masa kini tetapi juga memberikan pijakan kuat bagi masa depan gemilang dari grup idol yang telah memikat hati banyak orang.
                    JKT48 Festival Greatest Hits juga akan menjadi kesempatan bagi para penggemar untuk mengeksplorasi lebih dalam lagi tentang perjalanan yang telah dilalui oleh para bintang idola mereka. Dengan pameran khusus yang memajang memorabilia langka, foto-foto eksklusif, dan momen-momen tak terlupakan, pengunjung dapat merasakan ikatan emosional yang erat antara para anggota dan komunitas mereka. Para penggemar juga akan diberikan kesempatan untuk mengabadikan momen tak terlupakan ini melalui berbagai area foto interaktif yang didesain khusus, sehingga mereka dapat membawa pulang kenangan abadi dari festival ini.
                    Tunggu apalagi? Jadikanlah JKT48 Festival Greatest Hits sebagai momen berharga yang tidak hanya memenuhi hasrat musik dan hiburan Anda, tetapi juga merangkul semangat persaudaraan dan kehangatan yang telah melampaui batas-batas panggung. Segera bergabunglah dengan ribuan penggemar lainnya untuk merayakan keberagaman, semangat, dan kegembiraan dari JKT48 Festival Greatest Hits yang akan membawa Anda dalam perjalanan mengesankan melalui nostalgia dan masa depan yang penuh harapan.
                </p>
            </div>

            <div class="desc-performerEvent">
                <div class="desc-performerTitle ml-5">Performer</div>
                <div class="desc-performerMultiLine">
                    <div class="row ml-4" style="display: flex;">
                        <div class="desc-performerColumn">
                            <div class="desc-performerRow" style="display: flex;">
                                <div class="desc-performerImg"><img src="https://jkt48.com/profile/reva_fidela.jpg?v=20230116s.jpg" alt="Gambar"></div>
                                <div class="desc-performerDisplayer">
                                    Reva Fidela
                                </div>
                            </div>
                        </div>
                        <div class="desc-performerColumn">
                            <div class="desc-performerRow" style="display: flex;">
                                <div class="desc-performerImg"><img src="https://jkt48.com/profile/angelina_christy.jpg?v=20230116.jpg" alt="Gambar"></div>
                                <div class="desc-performerDisplayer">
                                    Angelina Christy
                                </div>
                            </div>
                        </div>
                        <div class="desc-performerColumn">
                            <div class="desc-performerRow" style="display: flex;">
                                <div class="desc-performerImg"><img src="https://jkt48.com/profile/adzana_shaliha.jpg?v=20230116.jpg" alt="Gambar"></div>
                                <div class="desc-performerDisplayer">
                                    Adzana Shaliha
                                </div>
                            </div>
                        </div>
                        <div class="desc-performerColumn">
                            <div class="desc-performerRow" style="display: flex;">
                                <div class="desc-performerImg"><img src="https://jkt48.com/profile/freya_jayawardana.jpg?v=20230116s.jpg" alt="Gambar"></div>
                                <div class="desc-performerDisplayer">
                                    Freya Jayawardana
                                </div>
                            </div>
                        </div>
                        <div class="desc-performerColumn">
                            <div class="desc-performerRow" style="display: flex;">
                                <div class="desc-performerImg"><img src="https://jkt48.com/profile/helisma_putri.jpg?v=20230116.jpg" alt="Gambar"></div>
                                <div class="desc-performerDisplayer">
                                    Helisma Putri
                                </div>
                            </div>
                        </div>
                        <div class="desc-performerColumn">
                            <div class="desc-performerRow" style="display: flex;">
                                <div class="desc-performerImg"><img src="https://jkt48.com/profile/yessica_tamara.jpg?v=20230116.jpg" alt="Gambar"></div>
                                <div class="desc-performerDisplayer">
                                    Yessica Tamara
                                </div>
                            </div>
                        </div>
                        <div class="desc-performerColumn">
                            <div class="desc-performerRow" style="display: flex;">
                                <div class="desc-performerImg"><img src="https://jkt48.com/profile/reva_fidela.jpg?v=20230116s.jpg" alt="Gambar"></div>
                                <div class="desc-performerDisplayer">
                                    Reva Fidela
                                </div>
                            </div>
                        </div>
                        <div class="desc-performerColumn">
                            <div class="desc-performerRow" style="display: flex;">
                                <div class="desc-performerImg"><img src="https://jkt48.com/profile/angelina_christy.jpg?v=20230116.jpg" alt="Gambar"></div>
                                <div class="desc-performerDisplayer">
                                    Angelina Christy
                                </div>
                            </div>
                        </div>
                        <div class="desc-performerColumn">
                            <div class="desc-performerRow" style="display: flex;">
                                <div class="desc-performerImg"><img src="https://jkt48.com/profile/adzana_shaliha.jpg?v=20230116.jpg" alt="Gambar"></div>
                                <div class="desc-performerDisplayer">
                                    Adzana Shaliha
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary buy-ticket-btn m-4" data-toggle="modal" data-target="#modalKategori">
                    Beli Tiket
                </button>
            </div>
        </div>

        <div class="column-boxCategory bg-white m-2" style="height: 183px;">
            <div class="box-categoryHeader">
                Ticket Kategori
            </div>
            <div class="box-categoryContent">
                <div class="column-boxTicket">
                    <div class="box-PerContent box-PerContent2">
                        <p class="preSaleStyle"> Pre-Sale 1 <br><strong class="preSaleStyle2">Rp 28.750</strong></p>
                        <div style="margin-left: auto;">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPembayaran">Buy Now</button>
                        </div>
                    </div>
                    <div class="box-PerContent box-PerContent2">
                        <p class="preSaleStyle"> Pre-Sale 2 <br><strong class="preSaleStyle2">Rp 29.750</strong></p>
                        <div style="margin-left: auto;">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPembayaran">Buy Now</button>
                        </div>
                    </div>
                    <div class="box-PerContent box-PerContent2">
                        <p class="preSaleStyle"> Pre-Sale 3 <br><strong class="preSaleStyle2">Rp 30.750</strong></p>
                        <div style="margin-left: auto;">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPembayaran">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ticket Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="box-categoryContent">
                        <div class="column-boxTicket">
                            <div class="box-PerContent box-PerContent2">
                                <p class="preSaleStyle"> Pre-Sale 1 <br><strong class="preSaleStyle2">Rp 28.750</strong></p>
                                <div style="margin-left: auto;">
                                    <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#modalPembayaran">Buy Now</button>
                                </div>
                            </div>
                            <div class="box-PerContent box-PerContent2">
                                <p class="preSaleStyle"> Pre-Sale 2 <br><strong class="preSaleStyle2">Rp 29.750</strong></p>
                                <div style="margin-left: auto;">
                                    <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#modalPembayaran">Buy Now</button>
                                </div>
                            </div>
                            <div class="box-PerContent box-PerContent2">
                                <p class="preSaleStyle"> Pre-Sale 3 <br><strong class="preSaleStyle2">Rp 30.750</strong></p>
                                <div style="margin-left: auto;">
                                    <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#modalPembayaran">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="modalPembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                    <div class="tabs mt-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation"> <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true"> <img src="https://4.bp.blogspot.com/-tceaeWKDv00/UNhHf_6AdZI/AAAAAAAAERE/hR3lYKZxCiQ/s1600/Logo+Bank+BRI.jpg" width="80" height="80"> </a> </li>
                            <li class="nav-item" role="presentation"> <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false"> <img src="https://static.vecteezy.com/system/resources/previews/013/433/620/original/qris-application-icon-design-on-white-background-free-vector.jpg" width="80" height="80"> </a> </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab">
                                <div class="mt-4 mx-4">
                                    <div class="text-center">
                                        <h5>Debit card</h5>
                                    </div>
                                    <div class="form mt-3">
                                        <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Nama Pemegang Kartu</span> </div>
                                        <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Nomor Kartu</span> <i class="fa fa-eye"></i> </div>
                                        <div class="d-flex flex-row">
                                            <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Tenggat Pembayaran</span> </div>
                                            <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>CVV</span> </div>
                                        </div>
                                        <div class="px-5 pay"> <button class="btn btn-success btn-block">Pay</button> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                <div class="px-5">
                                    <div style="width: auto; height: auto; overflow: hidden;">
                                        <img src="https://i.pinimg.com/originals/60/c1/4a/60c14a43fb4745795b3b358868517e79.png" style="width: 100%; height: auto;">
                                    </div>
                                    <div class="pay px-5"> <button class="btn btn-primary btn-block">Confirm</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('vendor/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('images/main.js') }}"></script>
</body>

</html>