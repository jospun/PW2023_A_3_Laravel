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
        background-color: white;
        width: 38vh;
        height: 20vh;
        border-radius: 8px;
        box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
        outline: 1px solid rgba(0, 0, 0, 0.5);
        overflow: hidden;
        margin-right: 1vh;
    }

    .hover-card:hover {
        border-color: red !important;
        border-width: 2px !important;
        transition: border-color 0.3s ease-in-out;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<nav style="position:relative">
    <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">User Managment</span>
    </div>
</nav>

<div class="container border p-3 rounded" id="isi">
    <div class="row p-2 d-flex">
        @forelse($user as $data)
        <div class="card hover-card" style="width: 18rem; margin-left: 1vh; margin-bottom: 1vh;">
            <img src="{{ $data->gambar }}" class="card-img-top" alt="rickroll">
            <div class="card-body">
                <h5 class="card-title">{{ $data->nama_user }}</h5>
                <p class="card-text">
                <ul style="list-style-type: none; font-size: 0.8em;">
                    <li>Username : {{ $data->nama_user }}</li>
                    <li>Email : {{ $data->email }}</li>
                    <li>Phone : {{ $data->no_telp }}</li>
                    <li>Tgl Lahir : {{ $data->tanggal_lahir }}</li>
                </ul>
                </p>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#editUserModal" data-user-id="{{ $data->id }}">
                    <i class="fa fa-edit me-1"></i>Edit
                </button>

                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#hapusUserModal" data-user-id="{{ $data->id }}">
                    <i class="fa fa-trash me-1"></i>Delete
                </button>
            </div>
        </div>
        @empty
        <div class="alert alert-danger">
            Tidak ada pengguna yang terdaftar
        </div>
        @endforelse
    </div>
</div>

<!-- EDIT MODAL -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="editUserForm" method="POST" action="{{ route('adminuser.update', 'id_user') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row p-2">
                        <label for="namaUser" class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="inputNamaUser" name="nama_user" required>
                        </div>
                    </div>

                    <div class="row p-2">
                        <label for="namaEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="inputEmail" name="email" required>
                        </div>
                    </div>

                    <div class="row p-2">
                        <label for="namaTanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input required type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Tanggal Lahir" class="form-control" id="inputTanggal" name="tanggal_lahir" required>
                        </div>
                    </div>

                    <!-- <div class="row p-2">
                            <label for="namaPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input required type="password" class="form-control" id="inputPassword" name="password" required>
                            </div>
                        </div> -->

                    <div class="row p-2">
                        <label for="namaNoTelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input required type="number" class="form-control" id="inputTelp" name="no_telp" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-outline-primary" data-bs-dismiss="modal" type="submit">
                        <i class="fas fa-save"></i> Save changes
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- MODAL DELETE USER -->
<div class="modal fade" id="hapusUserModal" tabindex="-1" aria-labelledby="hapusUserModalLabel" aria-hidden="true">
    <form id="hapusUserForm" method="POST" action="{{ route('admings.destroy', 'id_user') }}">
        @csrf
        @method('DELETE')
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menghapus User</h5>
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
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('hapusUserModal');
        modal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var userId = button.getAttribute('data-user-id');
            var form = document.getElementById('hapusUserForm');
            form.action = '/adminuser/' + userId;
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('editUserModal');
        modal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var userId = button.getAttribute('data-user-id');
            var form = document.getElementById('editUserForm');
            form.action = '/adminuser/' + userId;
        });
    });
</script>

@endsection