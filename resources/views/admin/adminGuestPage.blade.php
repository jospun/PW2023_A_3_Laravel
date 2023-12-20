@extends('navbar/sidebarAdmin')
@section('content')

<style>
    #editEvent {
        width: 30px;
        height: 30px;
    }

    #editButton {
        width: 32px;
        height: 32px;
        margin-top: 0;
        /* Adjust the margin as needed */
        color: white;
        font-size: 16px;
        border: solid black 1px;
        border-radius: 10px;
        cursor: pointer;
        border-radius: 5px;
        display: inline-block;
        /* Added to make it inline with the text */
    }

    #editButton:hover {
        background-color: #555;
        text-align: center;
    }

    #removeEvent {
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
        display: inline-block;
        /* Added to make it inline with the text */
    }

    #removeButton:hover {
        background-color: #f35757;
        text-align: center;
    }

    #container-foto {
        width: 460px;
        height: 170px;
        padding: 0px;
        position: relative;
        display: inline-block;
        text-align: center;
        border: 1px solid red;
        margin: 10px;
        text-align: center;
        overflow: hidden;
        border-radius: 10px;
    }

    img {
        width: 100%;
        border: #555 1px;
        display: block;
    }

    p {
        font-size: small;
    }

    #iconUser {
        display: flex;
        width: 40px;
        height: 40px;
    }

    #user {
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

    .pp:hover {
        transform: scale(1.2);
        transition: 1ms;
    }

    #removeButtonUser:hover {
        background-color: #f35757;
        text-align: center;
    }

    #removeUser {
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

    ol,
    ul {
        margin-left: 0px;
        padding-left: 0px;
    }

    .my-container {
        background-color: #0000;
        /* background-color: #000000; */
        width: 32vh;
        height: 16vh;
        border-radius: 8px;
        box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
        outline: 1px solid rgba(0, 0, 0, 0.5);
        overflow: hidden;
    }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <nav style="position:relative">
        <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
            <span class="dashboard">Event</span>
        </div>
    </nav>
    @forelse($acara as $ac)
    <div class="container border p-3 rounded" id="isi">
        <div class="row p-2">
            <div class="col">
                <div class="container" id="container-foto">
                    <img src=" {{ asset($ac->poster) }} " style="width: 100%; height: 100%" alt="event2">
                </div>

            </div>
            <div class="col">
                <div class="row">
                    <div class="col mr 3">
                        <h2>{{ $ac->nama_acara }}</h2>
                    </div>
                </div>
                <textarea class="form-control" name="deskripsi" id="deskripsi1" cols="30" rows="5" readonly>{{ $ac->deskripsi }}</textarea>
            </div>
            <button type="button" class="mt-2 btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#tambahGsModal" data-acara-id="{{ $ac->id }}"">Add Gueststar</button>
        </div>

        <hr class="mt-0">

        <div class="row">
            <?php
            $guest = \App\Models\Gueststar::all();
            $guestFiltered = $guest->where('id_acara', '=', $ac->id);
            $totalGst = $guestFiltered->count();
            ?>
            <p class="m-0">Total Performer: {{ $totalGst }}</p>
            <div class="scrollable" id="userContainer" style="display: flex; justify-content: left;">
                <div class="row">
                @forelse($guestFiltered  as $guest)
                    <div class="mt-2 container-sm my-container d-flex justify-content-center align-items-center position-relative">
                        <div class="row">
                            <div class="col-8">
                                <img src="{{ asset($guest->foto) }}" alt="foto" style="width: 100%; height: 100%; border-radius: 8px;">
                            </div>
                            <div class="col-4">
                                <p>{{ $guest->nama }}</p>
                                <a class="mt-4" href="#" id="removeButtonUser" data-bs-toggle="modal" data-bs-target="#hapusGuestStarModal" data-guest-star-id="{{ $guest->id }}">
                                    <box-icon name='trash' id="removeUser"></box-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No containers to display.</p>
                @endforelse
                </div>
            </div>
        </div>
    </div>

    @empty
    <div class="alert alert-danger">
        Data Event masi kosong
    </div>
    @endforelse

    <!-- TAMBAH GUEST STAR -->
    <div class="modal fade" id="tambahGsModal" tabindex="-1" aria-labelledby="tambahGsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <form id="Event" action="{{ route('admings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="hiddenid_acara" name="id_acara">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Tambah Guest Star</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">

                    <div class="row p-2">
                        <label for="namaEvent" class="col-sm-2 col-form-label">Nama GuesStar</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>

                    <div class="row p-2">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea required type="text" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                    </div>

                    <div class="row p-2">
                        <label for="inputFile" class="col-sm-2 col-form-label">Masukkan Foto/Video </label>
                        <div class="col-sm-10">
                            <input class="form-control" id="foto" type="file" accept=".jpg,.jpeg,.png,.mov,.mp4" name="foto"/>
                        </div>
                    </div>

                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" type="submit">Save</button>
            </div>
        </div>
        </form>
        </div>
    </div>

    <!-- MODAL DELETE GUESTSTAR -->
    <div class="modal fade" id="hapusGuestStarModal" tabindex="-1" aria-labelledby="hapusGuestStarModalLabel" aria-hidden="true">
        <form id="hapusGuestStarForm" method="POST" action="{{ route('admings.destroy', 'id_guest_star') }}">
            @csrf
            @method('DELETE')
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menghapus Guest Star?</h5>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('tambahGsModal');
        modal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var acId = button.getAttribute('data-acara-id');
            var input = document.getElementById('hiddenid_acara');
            input.value = acId;
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('hapusGuestStarModal');
        modal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var guestStarId = button.getAttribute('data-guest-star-id');
            var form = document.getElementById('hapusGuestStarForm');
            form.action = '/admings/' + guestStarId;
        });
    });
</script>

@endsection