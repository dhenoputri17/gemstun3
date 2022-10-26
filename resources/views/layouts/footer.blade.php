<br><br><br>
<footer class=" width-full bg-dark text-center text-white absolute-bottom " style="width: 100%; left: 0; right: 0; ">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
   <!-- menu footer -->
    <section class="mb-4">
      
      <a class="btn btn-outline-light btn-floating m-1" href="{{ URL::to('about') }}">Tentang</a>
      <a class="btn btn-outline-light btn-floating m-1" href="{{ URL::to('produk') }}">Kategori</a>
      <a class="btn btn-outline-light btn-floating m-1" href="{{ URL::to('/') }}">Produk</a>
      <a class="btn btn-outline-light btn-floating m-1" href="{{ URL::to('kontak') }}">Kontak</a>
    <!-- end menu footer -->
    </section>
    <img
        src="{{ asset('images/logo-2.png') }}"
        height="40"
        alt="MDB Logo"
        loading="lazy"
      />
  </div>
  <!-- Grid container -->
  
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © Gamestoon
  </div>
  <!-- Copyright -->
</footer>