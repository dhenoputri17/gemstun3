@extends('layouts.template')
@section('content')
<br><br>
<div class="container">
  <div class="row mt-4">
    <div class="col col-lg-8 col-md-8">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        @foreach($itemproduk->images as $index => $image)
        @if($index == 0)
          <div class="center">
              <img src="{{ \Storage::url($image->foto) }}" class="d-block w-70"  alt="...">
          </div> s
        @else
        @endif
        @endforeach
        </div>
        
      </div>
    </div>
    <!-- deskripsi produk -->
    <div class="col col-lg-4 col-md-4">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <span class="small">{{ $itemproduk->kategori}}</span>
              <h5>{{ $itemproduk->nama_produk }}</h5>
              <!-- cek apakah ada promo -->
              @if($itemproduk->promo != null)
              <p>
                Rp. <del>{{ number_format($itemproduk->promo->harga_awal, 2) }}</del>
                <br />
                Rp. {{ number_format($itemproduk->promo->harga_akhir, 2) }}
              </p>
              @else
              <p>
                Rp. {{ number_format($itemproduk->harga, 2) }}
              </p>
              @endif
              <form action="{{ route('wishlist.store') }}" method="post">
                @csrf
                <input type="hidden" name="produk_id" value={{ $itemproduk->id }}>
                <button type="submit" class="btn btn-sm btn-outline-secondary">
                @if(isset($itemwishlist) && $itemwishlist)
                <i class="fas fa-heart"></i> Tambah ke wishlist
                @else
                <i class="far fa-heart"></i> Tambah ke wishlist
                @endif
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <div class="card">
            <div class="card-body">
            <form action="{{ route('cartdetail.store') }}" method="POST">
              @csrf
              <input type="hidden" name="produk_id" value={{$itemproduk->id}}>
              <button class="btn btn-block btn-primary" type="submit">
              <i class="fa fa-shopping-cart"></i> Tambahkan Ke Keranjang
              </button>
            </form>
              
            </div>
            <div class="card-footer">
              <div class="row mt-4">
                <div class="col text-center">
                  <i class="fa fa-truck-moving"></i> 
                  <p>Pengiriman Cepat</p>
                </div>
                <div class="col text-center">
                  <i class="fa fa-calendar-week"></i> 
                  <p>Garansi 7 hari</p>
                </div>
                <div class="col text-center">
                  <i class="fa fa-money-bill"></i> 
                  <p>Pembayaran Aman</p>
                </div>
              </div>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection