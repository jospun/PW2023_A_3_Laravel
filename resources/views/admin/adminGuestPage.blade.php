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
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>



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
                <div class="col">
                    <a href="#" id="editButton" data-bs-toggle="modal" data-bs-target="#editEventModal" data-acara-id="{{ $ac->id }}">
                        <box-icon type='solid' name='edit-alt' id="editEvent"></box-icon>
                    </a>
                    <a href="#" id="removeButton" data-bs-toggle="modal" data-bs-target="#hapusEventModal" data-acara-id="{{ $ac->id }}">
                        <box-icon name='trash' id="removeEvent"></box-icon>
                    </a>
                </div>
            </div>
            <textarea class="form-control" name="deskripsi" id="deskripsi1" cols="30" rows="5" readonly>{{ $ac->deskripsi }}</textarea>
        </div>

    </div>
    <hr class="mt-0">

    <div class="row">
        <?php
        $pendaftaran = \App\Models\Pendaftaran::all();
        $pendaftaranFiltered = $pendaftaran->where('id_acara', '=', $ac->id);
        $totalPdft = $pendaftaranFiltered->count();
        ?>
        <p class="m-0">Total Pendaftar: {{ $totalPdft }}</p>
        <div class="scrollable" id="userContainer">
            <div class="row">
                @forelse($pendaftaranFiltered as $pdft)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card" name="user">
                        <div class="row">
                            <div style="display: flex; justify-content: left;">
                                <div class="col-2">
                                    <box-icon type='solid' name='user-circle' id="iconUser"></box-icon>
                                </div>
                                <div class="col-6">
                                    <p>
                                        <strong>{{ $pdft->id_user }}</strong>
                                        <br> <strong>Status : {{ $pdft->status }}</strong>
                                    </p>
                                </div>
                                @if($pdft->status == 'Belum Lunas')
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <a href="#" id="checkButtonUser" class="pp" data-bs-toggle="modal" data-bs-target="#verifModal" data-user-id="{{ $pdft->id }}">
                                        <box-icon name='check' id="checkUser1"></box-icon>
                                    </a>
                                </div>
                                @endif
                                <div class="col-2">
                                    <a href="#" id="removeButtonUser" data-bs-toggle="modal" data-bs-target="#hapusUserModal" data-user-id="{{ $pdft->id }}">
                                        <box-icon name='trash' id="removeUser"></box-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger">
                    Tidak ada pendaftar
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col mt-3">
            <p>Harga Ticket : {{ $ac->biaya }}
                <br> Tanggal : {{ $ac->tanggal_mulai }} - {{ $ac->tanggal_tutup }}
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

@empty
<div class="alert alert-danger">
    Data Event masi kosong
</div>
@endforelse

<!-- TAMBAH EVENT -->
<div class="container d-flex justify-content-center mb-5">
    <a href="#" class="btn rounded border" data-bs-toggle="modal" data-bs-target="#tambahEventModal">
        <box-icon name='add-to-queue'></box-icon>
    </a>
</div>

</div>

<script>
    var hapusEventModal = document.getElementById('hapusEventModal');
    hapusEventModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var acaraId = button.getAttribute('data-acara-id');
        var form = hapusEventModal.querySelector('#hapusEventForm');
        var action = form.getAttribute('action').replace('id_acara', acaraId);
        form.setAttribute('action', action);
    });
</script>

<script>
    var verifModal = document.getElementById('verifModal');
    verifModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var userId = button.getAttribute('data-user-id');
        console.log(userId);
        var form = verifModal.querySelector('#verifModalForm');
        var action = form.getAttribute('action').replace('id_user', userId);
        form.setAttribute('action', action);
    });
</script>

<script>
    var hapusUserModal = document.getElementById('hapusUserModal');
    hapusUserModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var userId = button.getAttribute('data-user-id');
        console.log(userId);
        var form = hapusUserModal.querySelector('#hapusUserForm');
        var action = form.getAttribute('action').replace('id_user', userId);
        form.setAttribute('action', action);
    });
</script>

<script>
    var editEventModal = document.getElementById('editEventModal');
    editEventModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var acaraId = button.getAttribute('data-acara-id');

        fetch('adminac/' + acaraId)
            .then(response => response.json())
            .then(data => {
                document.getElementById('inputEventE').value = data.data.nama_acara;
                console.log(data.data.deskripsi)
                document.getElementById('inputDeskripsiE').value = data.data.deskripsi;
                document.getElementById('biayaE').value = data.data.biaya;
                document.getElementById('startDateE').value = data.data.tanggal_mulai;
                document.getElementById('endDateE').value = data.data.tanggal_tutup;

            })
            .catch(error => {
                console.error('Error:', error);
            });

        var form = editEventModal.querySelector('#editEventForm');
        var action = form.getAttribute('action').replace('id_acara', acaraId);
        form.setAttribute('action', action);
    });
</script>

@endsection