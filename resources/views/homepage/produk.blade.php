@extends('layouts.template')
@section('content')
<br><br>


<div class="container ">
    <div class="col col-lg-9 col-md-9 mb-2 "  style="color: white; font-size: 20px; text-decoration: none;">
      @if(isset($itemkategori))
      <h3>{{ $itemkategori->nama_kategori }}</h3>
      @else
      <a class="brand mt-4 mt-lg-0"  style="color: white; font-size: 20px; text-decoration: none;">
      <h3>Semua Kategori</h3>
      @endif
      <div class="row mt-4">
        @foreach($itemproduk as $produk)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm bg-dark   ">
            <a href="{{ URL::to('produkdetail/'.$produk->kode_produk)}}">
              @if($produk->foto != null)
              <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}" class="card-img-top" style="height: 240px; ">
              @else
              <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
              @endif
            </a>
            <div class="card-body">
              <a href="{{ URL::to('produk/'.$produk->slug_produk ) }}" class="text-decoration-none">
                <p class="card-text" style="color: white;">
                  {{ $produk->nama_produk }}
                </p>
              </a>
              <div class="row mt-4">
                <div class="col">
                </div>
                <div class="col-auto">
                  <p>
                    Rp. {{ number_format($produk->harga, 2) }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col">
          {{ $itemproduk->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection