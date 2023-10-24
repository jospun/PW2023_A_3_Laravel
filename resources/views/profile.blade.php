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

    @vite('resources\css\style3.css')

</head>

<body>
    <div class="student-profile py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div style="height: 26px"></div>
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent text-center">
                            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
                            <h3>Carolus Seto Arianto</h3>
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
                                    <td>Jospun@gmail.com</td>
                                </tr>

                                <tr>
                                    <th width="30%">Password</th>
                                    <td width="2%">:</td>
                                    <td>********</td>
                                </tr>

                                <tr>
                                    <th width="30%">Tanggal Lahir</th>
                                    <td width="2%">:</td>
                                    <td>22/01/2023</td>
                                </tr>

                                <tr>
                                    <th width="30%">Nomor Telepon</th>
                                    <td width="2%">:</td>
                                    <td>088444312</td>
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
                            <div class="desc-performerColumn" style="flex: 1 1 50%;">
                                <div class="desc-performerRow" style="display: flex;">
                                    <div class="desc-performerImg">
                                        <img src="https://i.pinimg.com/736x/52/b3/6f/52b36f810dd737b1e8c81edb152c14d4.jpg" alt="Gambar">
                                    </div>
                                    <div class="desc-performerDisplayer">
                                        NOAH
                                    </div>
                                    <div class="desc-performerDisplayer" style="margin-left: auto;">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="desc-performerColumn" style="flex: 1 1 50%;">
                                <div class="desc-performerRow" style="display: flex;">
                                    <div class="desc-performerImg">
                                        <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/purple-modern-music-concert-poster-design-template-75cf6a5693edd99f1959fded71313738_screen.jpg?ts=1566606321" alt="Gambar">
                                    </div>
                                    <div class="desc-performerDisplayer">
                                        TIKI BAR
                                    </div>
                                    <div class="desc-performerDisplayer" style="margin-left: auto;">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="desc-performerColumn" style="flex: 1 1 100%;">
                                <div class="desc-performerRow" style="display: flex;">
                                    <div class="desc-performerImg">
                                        <img src="https://th.bing.com/th/id/OIP.__E2_0wYIJc4kEgKZozmVAHaKe?w=202&h=286&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Gambar">
                                    </div>
                                    <div class="desc-performerDisplayer">
                                        ONE CHARITY
                                    </div>
                                    <div class="desc-performerDisplayer" style="margin-left: auto;">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="desc-performerColumn" style="flex: 1 1 100%;">
                                <div class="desc-performerRow" style="display: flex;">
                                    <div class="desc-performerImg">
                                        <img src="https://th.bing.com/th/id/OIP.hg1u8ydrlN0rDBIIwzFFJwHaKs?w=202&h=293&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Gambar">
                                    </div>
                                    <div class="desc-performerDisplayer">
                                        CHOACELLA
                                    </div>
                                    <div class="desc-performerDisplayer" style="margin-left: auto;">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
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
                    <div class="card-body pt-0">
                        <table class="table" style="border: none;">
                            <tr>
                                <th width="30%">Email</th>
                                <td width="2%">:</td>
                                <td><input type="email" id="emailInput" name="email" placeholder="Masukkan email" style="border: none;"></td>
                            </tr>

                            <tr>
                                <th width="30%">Password</th>
                                <td width="2%">:</td>
                                <td><input type="password" id="passwordInput" name="password" placeholder="Masukkan password" style="border: none;"></td>
                            </tr>

                            <tr>
                                <th width="30%">Tanggal Lahir</th>
                                <td width="2%">:</td>
                                <td><input type="date" id="tanggalInput" name="tanggal" placeholder="Enter your Tanggal" style="border: none;"></td>
                            </tr>

                            <tr>
                                <th width="30%">Nomor Telepon</th>
                                <td width="2%">:</td>
                                <td><input type="nomorTelepon" id="nomorTeleponInput" name="nomorTelepon" placeholder="Masukkan Nomor Telepon" style="border: none;"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
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
                    <div class="row ml-2">
                        Konfirmasi :
                        <div class="ml-2"><input type="konfirmasi" id="konfirmasiInput" name="konfirmasi" placeholder="Masukkan Password Anda" style="border: none;"></div>
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
                    <button type="button" class="btn btn-danger">Hapus</button>
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
                            <img src="https://i.pinimg.com/736x/52/b3/6f/52b36f810dd737b1e8c81edb152c14d4.jpg" alt="Gambar">
                        </div>
                        <div class="container shadow-sm m-4">
                            <table class="table" style="border: none;">
                                <tr>
                                    <th width="30%">Nama konser</th>
                                    <td width="2%">:</td>
                                    <td>Noah The Band</td>
                                </tr>

                                <tr>
                                    <th width="30%">Tanggal Konser</th>
                                    <td width="2%">:</td>
                                    <td>30 September 2023</td>
                                </tr>

                                <tr>
                                    <th width="30%">Tanggal Pendaftaran</th>
                                    <td width="2%">:</td>
                                    <td>28 September 2023</td>
                                </tr>

                                <tr>
                                    <th width="30%">Status Membayar</th>
                                    <td width="2%">:</td>
                                    <td>Lunas</td>
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

</body>

</html>