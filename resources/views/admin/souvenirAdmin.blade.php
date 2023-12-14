@extends('navbar/sidebarAdmin')
@section('content')

    <style>
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
        ol, ul{
            margin-left: 0px;
            padding-left: 0px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    

    <div>
        <nav>
            <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
            <span class="dashboard">Dashboard</span>
            </div>
        </nav>

        <div class="container border rounded " id="isi">
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
                <h5 class="modal-title" id="tambahModalLabel">Tambah Souvenir</h5>
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
@endsection