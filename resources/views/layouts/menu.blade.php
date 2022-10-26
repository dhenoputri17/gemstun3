<br><br>
<nav class="navbar navbar-expand-lg navbar-light bg-dark mb-4 fixed-top" style="color: white;">
  <div class="container">
    <a class="navbar-brand mt-4 mt-lg-0" href="/">
      <img
        src="{{ asset('images/logo-2.png') }}"
        height="40"
        alt="MDB Logo"
        loading="lazy"
      />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('cart') }}">
          <i style="color:white; font-size:25px; margin-top:5px;" class="fa-solid fa-cart-shopping"></i>
        </a>
        </li>
        &nbsp &nbsp
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('login') }}">
          <button type="button" class="btn btn-primary me-3" style="background-color: #1E2046; border-color:white; width:100px; "href="{{ URL::to('login') }}">
            Login
          </button>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 