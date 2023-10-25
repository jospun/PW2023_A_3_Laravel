<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

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
            width: 1120px;
        }
        
        #editEvent{
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

        #removeEvent{
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

        #container-foto{
            width: 460px;
            height: 170px;
            padding: 0px;
            position:relative;
            display: inline-block;
            text-align:center;
            border:1px solid red;
            margin: 10px;
            text-align: center;
            overflow: hidden;
            border-radius: 10px;
        }

        img{
            width: 100%;
            border: #555 1px;
            display: block;
        }

        p{
            font-size: small;
        }

        #iconUser{
            display: flex;
            width: 40px;
            height: 40px;
        }

        #user{
            width: 230px;
            height: 60px;
        }

        #removeButtonUser {
            width: 32px;
            height: 32px;
            position: absolute;
            right: 3%;
            top: 25%;
            color: white;
            font-size: 16px;
            border: solid black 1px;
            border-radius: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .pp:hover{
            transform: scale(1.2);
            transition: 1ms;
        }

        #removeButtonUser:hover{
            background-color: #f35757;
            text-align: center;
        }

        #removeUser{
            width: 30px;
            height: 30px;
            display: flex;
        }
        
        .card [name="user"] {
            margin: 0px;
        }

        #userContainer {
            max-height: 200px; 
            overflow-y: auto;
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
                    <li><a class="nav-link scrollto" href="{{ url('adminsv') }}">Souvenir</a></li>
                    <li><a class="nav-link scrollto active" href="">Acara</a></li>
                    </ul>
                    <i class="fa fa-list mobile-nav-toggle"><img src="https://i.pinimg.com/originals/26/9d/d1/269dd16fa1f5ff51accd09e7e1602267.png" style="width: 30px; height:30px;"/></i>
                </nav><!-- .navbar --> 
                </div>
            </header>
        </div>
    <div>
        <p>ini background</p>
        <div class="container border p-3 rounded" id="isi">
            <div class="row p-2">
                <div class="col">
                    <div class="container" id="container-foto" >
                        <img src=" {{ asset('images/event2.jpg') }} " alt="event2">
                    </div>
                    

                </div>
                <div class="col">
                    <div class="row">
                        <div class="col mr 3">
                            <h2>Nama Event</h2>
                        </div>
                        <div class="col">
                            <a href="#" id="editButton" data-bs-toggle="modal" data-bs-target="#tambahEventModal">
                                <box-icon type='solid' name='edit-alt' id="editEvent"></box-icon>
                            </a>
                            <a href="#" id="removeButton" data-bs-toggle="modal" data-bs-target="#hapusEventModal">
                                <box-icon name='trash' id="removeEvent"></box-icon>
                            </a>
                        </div>
                    </div>
                    <textarea class="form-control" name="deskripsi" id="deskripsi1" cols="30" rows="5" readonly>Description...</textarea>
                </div>
                
            </div>
            <hr class="mt-0">

            <div class="row">
                <p class="m-0">Jumlah pendaftar: ...</p>

                <div class="scrollable" id="userContainer">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card" name="user">
                                <div class="row">
                                    <div style="display: flex; justify-content: left;">
                                        <div class="col-2">
                                            <box-icon type='solid' name='user-circle' id="iconUser"></box-icon>
                                        </div>
                                        <div class="col-6">
                                            <p>
                                                <strong>Nama : 1</strong> 
                                                <br> <strong>Status : Belum Lunas</strong>
                                            </p>
                                        </div>
                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                            <a href="#" id="checkButtonUser" class="pp">
                                                <box-icon name='check' id="checkUser1"></box-icon>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="#" id="removeButtonUser" data-bs-toggle="modal" data-bs-target="#hapusUserModal">
                                                <box-icon name='trash' id="removeUser"></box-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card" name="user">
                                <div class="row">
                                    <div style="display: flex; justify-content: left;">
                                        <div>
                                            <box-icon type='solid' name='user-circle' id="iconUser"></box-icon>
                                        </div>
                                        <div class="ms-1">
                                            <p>
                                                <strong>Nama : 1</strong> 
                                                <br> <strong>Status : Lunas</strong>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <a href="#" id="removeButtonUser" data-bs-toggle="modal" data-bs-target="#hapusUserModal">
                                                <box-icon name='trash' id="removeUser"></box-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card" name="user">
                                <div class="row">
                                    <div style="display: flex; justify-content: left;">
                                        <div>
                                            <box-icon type='solid' name='user-circle' id="iconUser"></box-icon>
                                        </div>
                                        <div class="ms-1">
                                            <p>
                                                <strong>Nama : 1</strong> 
                                                <br> <strong>Status : Lunas</strong>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <a href="#" id="removeButtonUser" data-bs-toggle="modal" data-bs-target="#hapusUserModal">
                                                <box-icon name='trash' id="removeUser"></box-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card" name="user">
                                <div class="row">
                                    <div style="display: flex; justify-content: left;">
                                        <div>
                                            <box-icon type='solid' name='user-circle' id="iconUser"></box-icon>
                                        </div>
                                        <div class="ms-1">
                                            <p>
                                                <strong>Nama : 1</strong> 
                                                <br> <strong>Status : Lunas</strong>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <a href="#" id="removeButtonUser" data-bs-toggle="modal" data-bs-target="#hapusUserModal">
                                                <box-icon name='trash' id="removeUser"></box-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card" name="user">
                                <div class="row">
                                    <div style="display: flex; justify-content: left;">
                                        <div>
                                            <box-icon type='solid' name='user-circle' id="iconUser"></box-icon>
                                        </div>
                                        <div class="ms-1">
                                            <p>
                                                <strong>Nama : 1</strong> 
                                                <br> <strong>Status : Lunas</strong>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <a href="#" id="removeButtonUser" data-bs-toggle="modal" data-bs-target="#hapusUserModal">
                                                <box-icon name='trash' id="removeUser"></box-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col mt-3">
                    <p>Harga Ticket : Rp. XXX.XXX.XXX,xx
                       <br> Tanggal : tgl Bulan Tahun  -  tgl Bulan Tahun
                    </p>
                </div>
                <div class="col text-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="{{ url('adminsv') }}" class="btn border d-flex">
                            Souvenir <box-icon name='chevron-right'></box-icon></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- TAMBAH EVENT -->
        <div class="container d-flex justify-content-center mb-5">
            <a href="#" class="btn rounded border" data-bs-toggle="modal" data-bs-target="#tambahEventModal">
                <box-icon name='add-to-queue'></box-icon>
            </a>
        </div>
        
    </div>


<!-- Modal -->
<div class="modal fade" id="tambahEventModal" tabindex="-1" aria-labelledby="tambahEventModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Tambah Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="Event">

            <div class="row p-2">
                <label for="namaEvent" class="col-sm-2 col-form-label">Nama Event</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="inputEvent" name="namaEvent">
                </div>

                
            </div>

            <div class="row p-2">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea required type="text" class="form-control" id="inputDeskripsi" name="deskripsiEvent"></textarea>
                </div>
            </div>

            <div class="row p-2">
                <label for="hargaTicket" class="col-sm-2 col-form-label">Harga Ticket</label>
                <div class="col-sm-10">
                    <input required class="form-control" type="number" name="hargaEvent" id="inputHarga" placeholder="Rp."> 
                </div>
            </div>

            <div class="row p-2">
                <label for="tanggalMulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-10">
                    <input required class="form-control" type="date" name="tglMulai" id="startDate">
                </div>
            </div>

            <div class="row p-2">
                <label for="tanggalSelesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-10">
                    <input required class="form-control" type="date" name="tglSelesai" id="endDate">
                </div>
            </div>

            <div class="row p-2">
                <label for="inputFile" class="col-sm-2 col-form-label">Masukkan Foto/Video </label>
                <div class="col-sm-10">
                    <input class="form-control" id="inputFile" type="file" accept=".jpg,.jpeg,.png,.mov,.mp4" name="asset"/>
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


<div class="modal fade" id="hapusEventModal" tabindex="-1" aria-labelledby="hapusEventModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menghapus Event?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yakin</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hapusUserModal" tabindex="-1" aria-labelledby="hapusUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menghapus User dari Event?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yakin</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>