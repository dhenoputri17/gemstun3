@extends('layouts.template')
@section('content')
@endsection

<!-- kategori produk -->
<br><br>
  <!-- carousel -->
  <center>
  <div class="row mt-5" >
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="height: auto;">
          <div class="carousel-item active">
              <img src="{{ asset('images/carousel-3.jpg') }}" class="d-block w-150 h-250" alt="..." style="max-width: 100%; height: auto;" >
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/carousel-2.jpg') }}" class="d-block w-150 h-250" alt="..." style="max-width: 100%; height: auto;"  >
          </div>
          <div class="carousel-item" >
            <img src="{{ asset('images/carousel-5.jpg') }}" class="d-block w-150 h-250" alt="..." style="max-width: 100%; height: auto;" >
          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> 
      </div>
    </div>
    
  </div>
  </center>
  <!-- end carousel -->
  <br>
  <center>
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center" style="color: white; ">Platform</h2>
      <a class="btn btn-outline-light btn-floating m-1" href="{{ URL::to('kategori/windows') }}">
        <img
          src="{{ asset('images/windows.png') }}"
          height="40"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="{{ URL::to('kategori/xbox') }}">
        <img
          src="{{ asset('images/xbox.png') }}"
          height="40"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="{{ URL::to('kategori/ps-2') }}">
        <img
          src="{{ asset('images/ps2.png') }}"
          height="40"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="{{ URL::to('kategori/ps-3') }}">
        <img
          src="{{ asset('images/ps3.png') }}"
          height="40"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="{{ URL::to('kategori/ps-4') }}">
        <img
          src="{{ asset('images/ps4.png') }}"
          height="40"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
    </div>
  </div>
  </center>
  
  <!-- produk Terbaru-->
  <div class="row mt-4" >
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center" style="color: white; ">Rekomendasi</h2>
     
    </div>
    <div class="container">
    @foreach($itemproduk as $produk)
    @if ($produk->foto !=null)
    <!-- produk pertama -->
    <div class="col-md-3">
      <div class="card mb-4 shadow-sm bg-dark">
        <a href="{{ URL::to('produkdetail/'.$produk->kode_produk) }}">
          <img src="{{ \Storage::url($produk->foto) }}" alt="foto produk" class="card-img-top" style="height: 240px; ">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produkdetail/'.$produk->kode_produk) }}" class="text-decoration-none">
            <p class="card-text" style="color: white;">
            {{ $produk->nama_produk }}
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-dark">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p style="color: white;">
              {{ number_format($produk->harga, 2) }}
              </p>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
@endforeach
  