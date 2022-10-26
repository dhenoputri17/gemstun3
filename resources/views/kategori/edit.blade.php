@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Edit Kategori</h3>
          <div class="card-tools">
            <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <form action="{{ route('kategori.update', $itemkategori->id) }}" method="post">
            @csrf
            {{ method_field('patch') }}
            <div class="form-group">
              <label for="kode_kategori">Kode Kategori</label>
              <input type="text" name="kode_kategori" id="kode_kategori" class="form-control" value={{ $itemkategori->kode_kategori }}>
            </div>
            <div class="form-group">
              <label for="nama_kategori">Nama Kategori</label>
              <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value={{ $itemkategori->nama_kategori }}>
            </div>
            <div class="form-group">
              <label for="status">Kategori</label>
              <select name="slug_kategori" id="slug_kategori" class="form-control">
                <option value="Windows">Windows</option>
                <option value="XBOX">XBOX</option>
                <option value="PS 2">PS 2</option>
                <option value="PS 3">PS 3</option>
                <option value="PS 4">PS 4</option>
              </select>
            </div>
            <div class="form-group">
              <label for="slug_kategori">Deskripsi</label>
              <input type="text" name="deskripsi_kategori" id="deskripsi_kategori" class="form-control" value="-"readonly/>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" id="status" class="form-control">
                <option value="publish" {{ $itemkategori->status == 'publish'? 'selected': ''}}>Publish</option>
                <option value="unpublish" {{ $itemkategori->status == 'unpublish'? 'selected': ''}}>Unpublish</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection