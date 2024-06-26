<!--Website: wwww.codingdung.com-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PW</title>
    <link rel="stylesheet" href="style.css">
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

    <link href="{{ asset('images/style.css') }}" rel="stylesheet">

    @vite('resources\css\style3.css')

    <style>
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
            <!-- Off-Canvas Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#iu">IU - Golden Hour</a></li>
                            <li><a href="#cld">Coldplay - Music of the Sphere</a></li>
                            <li><a href="#tls">Tulus - Tur Manusia 2023</a></li>
                            <li><a href="#ipes">Informatics Festival 11</a></li>
                            <li><a href="{{ url('acara') }}">JKT-48</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('souvenir') }}">Souvenir</a></li>
                    <li><a class="nav-link scrollto active" href="">User</a></li>
                </ul>
                <i class="fa fa-list mobile-nav-toggle"><img src="https://i.pinimg.com/originals/26/9d/d1/269dd16fa1f5ff51accd09e7e1602267.png" style="width: 30px; height:30px;" /></i>
            </nav><!-- .navbar -->
        </div>
    </header>
    <div class="student-profile py-4 mt-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div style="height: 26px"></div>
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent text-center">
                            <img class="profile_img" src="{{Auth::user()->gambar}}" alt="student dp">
                            <h3>{{ Auth::user()->nama_user }}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div style="height: 26px"></div>
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Your Profile</h3>
                        </div>

                        <div class="card-body pt-0">
                            <table class="table" style="border: none;">
                                <tr>
                                    <th width="30%">Email</th>
                                    <td width="2%">:</td>
                                    <td>{{Auth::user()->email}}</td>
                                </tr>

                                <tr>
                                    <th width="30%">Password</th>
                                    <td width="2%">:</td>
                                    <td>********</td>
                                </tr>

                                <tr>
                                    <th width="30%">Tanggal Lahir</th>
                                    <td width="2%">:</td>
                                    <td>{{Auth::user()->tanggal_lahir}}</td>
                                </tr>

                                <tr>
                                    <th width="30%">Nomor Telepon</th>
                                    <td width="2%">:</td>
                                    <td>{{Auth::user()->no_telp}}</td>
                                </tr>
                            </table>

                            <div class="flex">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editProfile" style="width: 120px;">Edit Akun</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteProfile" style="width: 120px;">Delete Akun</button>
                            </div>
                        </div>

                    </div>
                    <div style="height: 26px"></div>
                    <div class="card shadow-sm">

                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Seluruh Tiket Anda</h3>
                        </div>

                        
                        <div class="cardA mt-2 ml-2 mr-2 mb-2" style="display: flex; flex-wrap: wrap; color:black;">
                            @forelse($pendaftarans as $pdft)
                            <div class="desc-performerColumn" style="flex: 1 1 50%;">
                                <div class="desc-performerRow" style="display: flex;">
                                    <div class="desc-performerImg">
                                        <img src="{{ asset($pdft->poster) }}" alt="Gambar">
                                    </div>
                                    <div class="desc-performerDisplayer">
                                        {{ $pdft->nama_acara }}
                                    </div>
                                    <div class="desc-performerDisplayer" style="margin-left: auto;">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail" data-id="{{ $pdft->id_acara }}">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="alert alert-danger m-3 p-3">
                                Tidak ada Tiket disini!
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Ubah Data Anda</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body pt-0">

                            <table class="table" style="border: none;">


                                <tr>
                                    <th width="30%">Email</th>
                                    <td width="2%">:</td>
                                    <td><input class="form-control" type="email" id="emailInput" name="email" placeholder="Masukkan email" style="border: none;"></td>
                                </tr>

                                <tr>
                                    <th width="30%">Password</th>
                                    <td width="2%">:</td>
                                    <td><input class="form-control" type="password" id="passwordInput1" name="password" placeholder="Masukkan password" style="border: none;"></td>
                                </tr>

                                <tr>
                                    <th width="30%">Tanggal Lahir</th>
                                    <td width="2%">:</td>
                                    <td><input class="form-control" type="date" id="tanggalInput" name="tanggal_lahir" placeholder="Enter your Tanggal" style="border: none;"></td>
                                </tr>

                                <tr>
                                    <th width="30%">Nomor Telepon</th>
                                    <td width="2%">:</td>
                                    <td><input class="form-control" type="text" id="nomorTeleponInput" name="no_telp" placeholder="Masukkan Nomor Telepon" style="border: none;"></td>
                                </tr>
                                <tr>
                                    <th width="30%">Foto Profil</th>
                                    <td width="2%">:</td>
                                    <td><input class="form-control" type="file" id="gambarInput" name="gambar" placeholder="Masukkan Gambar" style="border: none;"></td>
                                </tr>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="deleteProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle"><strong>Apakah Anda Yakin Ingin Menghapus Akun Anda?</strong></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('user.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <div class="row ml-2">
                            <div class="col-4">
                                <p>
                                    Konfirmasi :
                                </p>
                            </div>
                            <div class="col-8">
                                <div class="ml-2">
                                    <input type="password" id="passwordInput" name="password" placeholder="Masukkan Password Anda" style="border: none;">
                                </div>
                            </div>
                            <!-- <table class="table" style="border: none;">
                            <tr>
                                <th width="30%">Konfirmasi</th>
                                <td width="2%">:</td>
                                <td><input type="konfirmasi" id="konfirmasiInput" name="konfirmasi" placeholder="Masukkan Password Anda" style="border: none;"></td>
                            </tr>
                        </table> -->
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal 3 -->
        <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><strong>Detail Tiket</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <div class="container shadow-sm desc-detailImg" style="text-align: center;">
                                <img     alt="Gambar" id="gambar">
                            </div>
                            <div class="container shadow-sm m-4">
                                <table class="table" style="border: none;">
                                    <tr>
                                        <th width="30%">Nama konser</th>
                                        <td width="2%">:</td>
                                        <td id="namaKonser"></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">Tanggal Mulai</th>
                                        <td width="2%">:</td>
                                        <td id="tanggalMulai"></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">Tanggal Tutup</th>
                                        <td width="2%">:</td>
                                        <td id="tanggalTutup"></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">Status Membayar</th>
                                        <td width="2%">:</td>
                                        <td id="status"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <script>
    document.querySelectorAll('.btn-primary[data-toggle="modal"]').forEach(button => {
        button.addEventListener('click', function(event) {
            const acaraId = this.getAttribute('data-id');
            console.log(acaraId);
            fetch(`profile/${acaraId}`)
                .then(response => response.json())
                .then(data => {

                    document.getElementById('namaKonser').innerText = data.data[0].nama_acara;
                    document.getElementById('tanggalMulai').innerText = data.data[0].tanggal_mulai;
                    document.getElementById('tanggalTutup').innerText = data.data[0].tanggal_tutup;
                    document.getElementById('status').innerText = data.data[0].status;
                    document.getElementById('gambar').src = data.data[0].poster; 
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });


    </script>

</body>

</html>