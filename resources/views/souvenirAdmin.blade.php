<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Souvenir Admin</title>

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
        #isi{
            margin-top: 60px; 
            margin-bottom: 30px;
            padding: 10px;
            padding-top: 0px;
            width: 1120px;
        }

        #container-foto{
            max-width: 1120px;
            max-height: 230px;
            padding: 0px;
            position:relative;
            display: inline-block;
            text-align:center;
            border:1px solid red;
            text-align: center;
            overflow: hidden;
            border-radius: 10px;
        }

        img{
            width: 100%;
            border: #555 1px;
        }
        #editSouvenir{
            width: 30px;
            height: 30px;
        }

        #editButton {
            width: 32px;
            height: 32px;
            margin-top: 0; /* Adjust the margin as needed */
            color: white;
            font-size: 16px;
            border: solid black 1px;
            border-radius: 10px;
            cursor: pointer;
            border-radius: 5px;
            display: inline-block; /* Added to make it inline with the text */
        }

        #editButton:hover{
            background-color: #555;
            text-align: center;
        }

        #removeSouvenir{
            width: 30px;
            height: 30px;
        }

        #removeButton {
            width: 32px;
            height: 32px;
            color: white;
            font-size: 16px;
            border: solid black 1px;
            border-radius: 10px;
            cursor: pointer;
            border-radius: 5px;
            display: inline-block; /* Added to make it inline with the text */
        }

        #removeButton:hover{
            background-color: #f35757;
            text-align: center;
        }
        .img-here{
            object-fit: fill;
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 200em;
            max-height: 180em;
            width: 60%;
            height: 100%;
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
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    
</head>
<body>
        <div class="navbar">
            <header id="header" class="fixed-top d-flex align-items-center header-transparent">
                <div class="container d-flex justify-content-between align-items-center">
            
                <div id="logo">
                    <a style="text-decoration: none" href="{{ url('home') }}">CAJ</a>
                </div>
                <!-- Off-Canvas Navbar -->
                <nav id="navbar" class="navbar">
                    <ul>
                    <li><a class="nav-link scrollto" href="#">Home</a></li>
                    <li><a class="nav-link scrollto active" href="#">Souvenir</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('adminac') }}">Acara</a></li>
                    </ul>
                    <i class="fa fa-list mobile-nav-toggle"><img src="https://i.pinimg.com/originals/26/9d/d1/269dd16fa1f5ff51accd09e7e1602267.png" style="width: 30px; height:30px;"/></i>
                </nav><!-- .navbar --> 
                </div>
            </header>
        </div>

    <div>
        <div class="container border rounded" id="isi">
            <div class="row" style="width: auto;">
                <div class="container" id="container-foto">
                        <img src=" {{ asset('images/event.jpg') }} " alt="event" class="rounded">
                </div>
            </div>
            

            <div class="row p-5 pt-2">
                <h3>Daftar Souvenir</h3>
                <hr>
                <h6>Event (BLABLA) saat ini memiliki XX souvenir</h6>
                <button class="btn btn-success small-button" data-bs-toggle="modal" data-bs-target="#editSouvenirModal">Tambah Souvenir</button>
            </div>

            <div class="row p-5 pt-0">
                <div class="card" name="user">
                        <div class="row" style="display: flex; justify-content: left;">
                            <div class="col-4">
                                <img class="img-here" src=" {{ asset('images/bajuWota.png') }}" alt="kaos">
                            </div>
                            <div class="col-7">
                                <p>
                                    <strong>Nama Souvenir : Kaos Merah</strong> 
                                    <br> <strong>Harga : Rp. 999.999,99</strong>
                                    <br> <strong>Stock : 500</strong>
                                </p>
                            </div>
                            <div class="col-1 d-flex justify-content-end align-items-end">
                                <a href="#" class="mx-2" id="editButton" data-bs-toggle="modal" data-bs-target="#editSouvenirModal">
                                    <box-icon type='solid' name='edit-alt' id="editSouvenir"></box-icon>
                                </a>
                                <a href="#" id="removeButton" data-bs-toggle="modal" data-bs-target="#hapusSouvenirModal">
                                    <box-icon name='trash' id="removeSouvenir"></box-icon>
                                </a>
                            </div>
                        </div>
                </div>
            </div>

            <div class="row p-5 pt-0">
                <div class="card" name="user">
                        <div class="row" style="display: flex; justify-content: left;">
                            <div class="col-4">
                                <img class="img-here" src=" {{ asset('images/bajuWota.png') }}" alt="kaos">
                            </div>
                            <div class="col-7">
                                <p>
                                    <strong>Nama Souvenir : Kaos Merah</strong> 
                                    <br> <strong>Harga : Rp. 999.999,99</strong>
                                    <br> <strong>Stock : 500</strong>
                                </p>
                            </div>
                            <div class="col-1 d-flex justify-content-end align-items-end">
                                <a href="#" class="mx-2" id="editButton" data-bs-toggle="modal" data-bs-target="#editSouvenirModal">
                                    <box-icon type='solid' name='edit-alt' id="editSouvenir"></box-icon>
                                </a>
                                <a href="#" id="removeButton" data-bs-toggle="modal" data-bs-target="#hapusSouvenirModal">
                                    <box-icon name='trash' id="removeSouvenir"></box-icon>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
            
        </div>

        <!-- hapusSouvenir -->
        <div class="modal fade" id="hapusSouvenirModal" tabindex="-1" aria-labelledby="hapusSouvenirModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menghapus Souvenir?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yakin</button>
                </div>
                </div>
            </div>
        </div>

        <!-- tambah/edit Souvenir -->

        <div class="modal fade" id="editSouvenirModal" tabindex="-1" aria-labelledby="editSouvenirModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="Event">

                    <div class="row p-2">
                        <label for="namaSouvenir" class="col-sm-2 col-form-label">Nama Souvenir</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="inputSouvenir" name="namaSouvenir">
                        </div>
                    </div>

                    

                    <div class="row p-2">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea required type="text" class="form-control" id="inputDeskripsi" name="deskripsiEvent"></textarea>
                        </div>
                    </div>

                    <div class="row p-2">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input required class="form-control" type="number" name="hargaSouvenir" id="inputHarga" placeholder="Rp."> 
                        </div>
                    </div>

                    <div class="row p-2">
                        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                        <div class="col-sm-10">
                            <input required class="form-control" type="number" name="stockSouvenir" id="inputStock" placeholder=""> 
                        </div>
                    </div>

                    <div class="row p-2">
                        <label for="inputFile" class="col-sm-2 col-form-label">Masukkan Foto </label>
                        <div class="col-sm-10">
                            <input class="form-control" id="inputFile" type="file" accept=".jpg,.jpeg,.png" name="asset"/>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
            </div>
            </div>
        </div>
        </div>

</body>
</html>