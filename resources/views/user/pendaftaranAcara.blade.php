@extends('navbar/navbarUser')
@section('content')

<div style="display: flex;" class="mt-5">
    <div class="column-boxEvent bg-white m-2 mt-4">
        <div class="eventTitle">{{$acara->nama_acara}}</div>
        <div class="img-forEvent">
            <img src="{{$acara->poster}}" alt="Gambar">
        </div>
        <div class="desc-forEvent">
            <div class="desc-performerTitle ml-5 mb-3">Deskripsi</div>
            <p div class="ml-5 mr-5">
                {{$acara->deskripsi}}
            </p>
        </div>

        <div class="desc-performerEvent">
            <div class="desc-performerTitle ml-5">Performer</div>
            <div class="desc-performerMultiLine">
                <div class="row ml-4" style="display: flex;">
                    @foreach($performer as $perf)
                    <div class="desc-performerColumn">
                        <div class="desc-performerRow" style="display: flex;">
                            <div class="desc-performerImg"><img src="{{ $perf->foto }}" alt="Gambar"></div>
                            <div class="desc-performerDisplayer">
                                {{ $perf->nama }}
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    <p class="preSaleStyle"> Sale 1 <br><strong class="preSaleStyle2">Rp {{$acara->biaya}}</strong></p>
                    <div style="margin-left: auto;">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalJumlah">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Jumlah Tiket -->
<div class="modal fade" id="modalJumlah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$acara->nama_acara}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="jumlah">Jumlah Tiket :</label>
                <input type="number" id="jumlah" name="jumlah" min="1" oninput="updateSubtotal()" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#modalPembayaran" onclick="copyJumlah(); switchModal();">Pembayaran</button>                
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
                            <p class="preSaleStyle"> Pre-Sale 1 <br><strong class="preSaleStyle2">Rp {{$acara->biaya}}</strong></p>
                            <div style="margin-left: auto;">
                                <button type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#modalJumlah">Buy Now</button>
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

                                    <form id="Event" action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_acara" value="{{$acara->id}}">
                                        <input type="hidden" id="hiddenJumlah" name="jumlah">

                                        <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Nama Pemegang Kartu</span> </div>
                                        <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Nomor Kartu</span> <i class="fa fa-eye"></i> </div>
                                        <div class="d-flex flex-row">
                                            <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Tenggat Pembayaran</span> </div>
                                            <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>CVV</span> </div>
                                        </div>

                                        <div id="subtotal">Subtotal: $0</div>

                                        <div class="px-5 pay"> <button type="submit" class="btn btn-success btn-block">Pay</button> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                            <div class="px-5">
                                <div style="width: auto; height: auto; overflow: hidden;">
                                    <img src="https://i.pinimg.com/originals/60/c1/4a/60c14a43fb4745795b3b358868517e79.png" style="width: 100%; height: auto;">
                                </div>

                                <form id="Event" action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id_acara" value="{{$acara->id}}">
                                    <input type="hidden" id="hiddenJumlah" name="jumlah">

                                    <div class="pay px-5"> <button type="submit" class="btn btn-primary btn-block">Confirm</button> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function copyJumlah() {
    var jumlah = document.getElementById('jumlah').value;
    document.getElementById('hiddenJumlah').value = jumlah;
}
</script>

<script>
function switchModal() {
    $('#exampleModal').modal('hide');
    $('#modalPembayaran').modal('show');
}
</script>

<script>
function updateSubtotal() {
    var jumlah = document.getElementById('jumlah').value;
    var biaya = Number("{{$acara->biaya}}");
    var subtotal = jumlah * biaya;
    document.getElementById('subtotal').textContent = 'Subtotal: $' + subtotal;
}
</script>

@endsection