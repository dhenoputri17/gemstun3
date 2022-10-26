@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="col-md-3">
      <div class="card">
        @foreach($itemwishlist as $wish)
        
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="#" class="img-fluid"/>
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body"  href="#">
          <h5 class="card-title"> {{ $wish->produk->nama_produk }}
          </h5>
          <p class="card-text"> {{ $wish->produk->kode_produk }}
          </p>
          <form action="{{ route('wishlist.destroy', $wish->id) }}" method="post" style="display:inline;">
            @csrf
            {{ method_field('delete') }}
            <button type="submit" class="btn btn-sm btn-danger mb-2">
              Hapus
            </button>                    
          </form>
          
         
          @endforeach
        </div>
        {{ $itemwishlist->links() }}
      </div>
    </div>
</div>
@endsection