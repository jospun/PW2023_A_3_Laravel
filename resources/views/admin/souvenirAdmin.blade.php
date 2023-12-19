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
        <nav style="position:relative">
            <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
            <span class="dashboard">Souvenir</span>
            </div>
        </nav>
        
        @forelse($acara as $ac)
        <div class="container border rounded " id="isi">
            <div class="row" style="width: auto;">
                <div class="container" id="container-foto">
                        <img src=" {{ asset($ac->poster) }} " alt="event" class="rounded" style="width: 100%; height: 100%" >
                </div>
            </div>
            

            <div class="row p-5 pt-2">
                <h3>Daftar Souvenir</h3>
                <?php
                    $souvenir = \App\Models\Souvenir::all();
                    $souvenirFilter = $souvenir->where('id_acara','=', $ac->id);
                    $totalSouve = $souvenirFilter->count();
                ?>
                <hr>
                <h6>Event {{ $ac->nama_acara }} saat ini memiliki {{ $totalSouve }}  souvenir</h6>
                    @forelse($souvenirFilter as $souve)
                    <?php
                        $transaksi = \App\Models\Detail_trans::all();
                        $transaksiFilter = $transaksi->where('id_item','=', $souve->id);
                        $totalTransaksi = 0;
                        foreach ($transaksiFilter as $transaksiItem) {
                            $totalTransaksi += $transaksiItem->jumlah;
                        }
                    ?>
                    <div class="row p-5 pt-0">
                        <div class="card" name="user">
                                <div class="row" style="display: flex; justify-content: left;">
                                    <div class="col-4">
                                        <img class="img-here" src=" {{ asset($souve->gambar) }}" alt="{{ $souve->nama }}" style="width: 100%; height: 100%" >
                                    </div>
                                    <div class="col-7">
                                        <p>
                                            <strong>Nama Souvenir : {{ $souve->nama }}</strong> 
                                            <br> <strong>Harga : Rp. {{ $souve->harga }}</strong>
                                            <br> <strong>Stock : {{ $souve->stok }}</strong>
                                            <br> <strong>Sudah Terjual : {{ $totalTransaksi }} pcs</strong>
                                        </p>
                                    </div>
                                    <div class="col-1 d-flex justify-content-end align-items-end">
                                        <a href="#" class="mx-2" id="editButton" data-bs-toggle="modal" data-bs-target="#editSouvenirModal" data-souvenir-id="{{ $souve->id }}">
                                            <box-icon type='solid' name='edit-alt' id="editSouvenir"></box-icon>
                                        </a>
                                        <a href="#" id="removeButton" data-bs-toggle="modal" data-bs-target="#hapusSouvenirModal" data-souvenir-id="{{ $souve->id }}">
                                            <box-icon name='trash' id="removeSouvenir"></box-icon>
                                        </a>
                                    </div>
                                </div>
                        </div>

                    </div>
                    @empty
                    <div class="alert alert-danger">
                        Tidak ada
                    </div>
                    @endforelse
                <button class="btn btn-success small-button" data-bs-toggle="modal" data-bs-target="#tambahSouvenirModal" data-souvenir-id="{{ $ac->id }}">Tambah Souvenir</button>  
                <hr>
            </div>
        </div>
        @empty
        @endforelse

        <!-- hapusSouvenir -->
        <div class="modal fade" id="hapusSouvenirModal" tabindex="-1" aria-labelledby="hapusSouvenirModalLabel" aria-hidden="true">
            <form id="hapusEventForm" method="POST" action="{{ route('adminsv.destroy', 'id_acara') }}">
            @csrf
            @method('DELETE')
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menghapus Souvenir?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Yakin</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- tambah Souvenir -->

        <div class="modal fade" id="tambahSouvenirModal" tabindex="-1" aria-labelledby="tambahSouvenirModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="tambahSouvenirForm" action="{{ route('adminsv.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Souvenir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <input type="hidden" name="id_acara" id="id_acara_input" value="">

                            <div class="row p-2">
                                <label for="namaSouvenir" class="col-sm-2 col-form-label">Nama Souvenir</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" id="inputSouvenir" name="nama" value="{{ old('nama') }}">
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea required type="text" class="form-control" id="inputDeskripsi" name="deskripsi"  value="{{ old('deskripsi') }}"></textarea>
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input required class="form-control" type="number" name="harga" id="harga" placeholder="Rp."  value="{{ old('harga') }}"> 
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                                <div class="col-sm-10">
                                    <input required class="form-control" type="text" name="jenis" id="jenis"  value="{{ old('jenis') }}"> 
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="stok" id="inputStock" placeholder="" value="{{ old('stok') }}"> 
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="inputFile" class="col-sm-2 col-form-label">Masukkan Foto </label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputFile" type="file" accept=".jpg,.jpeg,.png" name="gambar"  value="{{ old('gambar') }}"/>
                                </div>
                            </div>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Souvenir -->

        <div class="modal fade" id="editSouvenirModal" tabindex="-1" aria-labelledby="editSouvenirModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="editSouvenirModalForm" action="{{ route('adminsv.update', 'id_acara') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Souvenir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            <div class="row p-2">
                                <label for="namaSouvenir" class="col-sm-2 col-form-label">Nama Souvenir</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" id="inputSouvenirE" name="nama">
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea required type="text" class="form-control" id="inputDeskripsiE" name="deskripsi"></textarea>
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input required class="form-control" type="number" name="harga" id="hargaE" placeholder="Rp."> 
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                                <div class="col-sm-10">
                                    <input required class="form-control" type="text" name="jenis" id="jenisE"> 
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="stok" id="inputStockE" placeholder=""> 
                                </div>
                            </div>

                            <div class="row p-2">
                                <label for="inputFile" class="col-sm-2 col-form-label">Masukkan Foto </label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputFileE" type="file" accept=".jpg,.jpeg,.png" name="gambar" />
                                </div>
                            </div>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        var tambahSouvenirModal = document.getElementById('tambahSouvenirModal');
        tambahSouvenirModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var acaraId = button.getAttribute('data-souvenir-id');
            var idAcaraInput = document.getElementById('id_acara_input');
            console.log(acaraId);
            idAcaraInput.value = acaraId;
        });
    </script>

    <script>
        var hapusSouvenirModal = document.getElementById('hapusSouvenirModal');
        hapusSouvenirModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var acaraId = button.getAttribute('data-souvenir-id');
            var form = hapusSouvenirModal.querySelector('#hapusEventForm');
            var action = form.getAttribute('action').replace('id_acara', acaraId);
            form.setAttribute('action', action);
        });
    </script>

    <script>
        var editSouvenirModal = document.getElementById('editSouvenirModal');
        editSouvenirModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var acaraId = button.getAttribute('data-souvenir-id');
            console.log(acaraId);
            fetch('adminsv/' + acaraId)
                .then(response => response.json())
                .then(data => {
                    console.log(data.data.nama);
                    document.getElementById('inputSouvenirE').value = data.data.nama;
                    document.getElementById('inputDeskripsiE').value = data.data.deskripsi;
                    document.getElementById('hargaE').value = data.data.harga;
                    document.getElementById('jenisE').value = data.data.jenis;
                    document.getElementById('inputStockE').value = data.data.stok;
                    document.getElementById('inputFileE').value = data.data.gambar;
                })
                .catch(error => {
                    console.error('Error:', error);
                });

                var form = editSouvenirModal.querySelector('#editSouvenirModalForm');
                var action = form.getAttribute('action').replace('id_acara', acaraId);
                form.setAttribute('action', action);
        });
    </script>
    
@endsection