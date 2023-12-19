@extends('navbar/sidebarAdmin')
@section('content')


<style>
    
    ol, ul{
            margin-left: 0px;
            padding-left: 0px;
        }
    </style>
<nav style="position:relative">
  <div class="sidebar-button">
  <i class="bx bx-menu sidebarBtn"></i>
  <span class="dashboard">Dashboard</span>
  </div>
</nav>
  <div class="home-content">
    <h1 class="p-2 ms-3">Pendaftar Baru</h1>
    
    <div class="overview-boxes">
      @forelse($event as $ev)
      <div class="box">
        <div class="right-side">
          <div class="box-topic">{{ $ev->nama_user }}</div>
          <div class="number">{{ $ev->jumlah }} Tiket</div>
          <div class="indicator">
            <i class="bx bx-up-arrow-alt"></i>
            <span class="text">Sudah Bayar: {{ \Carbon\Carbon::parse($ev->tanggal_bayar)->translatedFormat('l, j F Y') }}</span>
          </div>
        </div>
      </div>
      @empty
        <div class="alert alert-success">
          Semua Pendaftar Sudah Di verifikasi
        </div>
    @endforelse
    </div>
    

    <div class="sales-boxes">
      <div class="recent-sales box">
        <div class="title">Recent Sales</div>
        <div class="sales-details">
          <ul class="details">
            <li class="topic">Acara</li>
          </ul>
          <ul class="details">
            <li class="topic">Pendaftar</li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
          </ul>
        </div>
      </div>

      {{-- <div class="top-sales box">
        <div class="title">Top Seling Product</div>
        <ul class="top-sales-details">
          <li>
            <a href="#">
              <img src="images/sunglasses.jpg" alt="" />
              <span class="product">Vuitton Sunglasses</span>
            </a>
            <span class="price">$1107</span>
          </li>
          <li>
            <a href="#">
              <img src="images/jeans.jpg" alt="" />
              <span class="product">Hourglass Jeans </span>
            </a>
            <span class="price">$1567</span>
          </li>
          <li>
            <a href="#">
              <img src="images/nike-min.jpg" alt="" />
              <span class="product">Nike Sport Shoe</span>
            </a>
            <span class="price">$1234</span>
          </li>
          <li>
            <a href="#">
              <img src="images/scarves.jpg" alt="" />
              <span class="product">Hermes Silk Scarves.</span>
            </a>
            <span class="price">$2312</span>
          </li>
          <li>
            <a href="#">
              <img src="images/blueBag.jpg" alt="" />
              <span class="product">Succi Ladies Bag</span>
            </a>
            <span class="price">$1456</span>
          </li>
          <li>
            <a href="#">
              <img src="images/bag.jpg" alt="" />
              <span class="product">Gucci Womens's Bags</span>
            </a>
            <span class="price">$2345</span>
          </li>

          <li>
            <a href="#">
              <img src="images/addidas.jpg" alt="" />
              <span class="product">Addidas Running Shoe</span>
            </a>
            <span class="price">$2345</span>
          </li>
          <li>
            <a href="#">
              <img src="images/shirt.jpg" alt="" />
              <span class="product">Bilack Wear's Shirt</span>
            </a>
            <span class="price">$1245</span>
          </li>
        </ul>
      </div> --}}
    </div> 
  </div>

@endsection