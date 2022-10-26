<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    body {
      background-color: #000000;
      left: 0%;
      right: 0%;
      
    }
    </style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: white;">
                    <img
                    src="{{ asset('images/logo-2.png') }}"
                    height="40"
                    alt="MDB Logo"
                    loading="lazy"
                  />            
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto" >
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('cart') }}">
                              <i style="color:white; font-size:25px; margin-top:5px;" class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </li> &nbsp &nbsp

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" >
                                    <a class="nav-link" href="{{ URL::to('login') }}">
                                        <button type="button" class="btn btn-primary me-3" style="background-color: #1E2046; border-color:white; width:100px; "href="{{ URL::to('login') }}">
                                          Login
                                        </button>
                                        </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color: white; font-size: 20px;" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
 <!-- Start Logout -->
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa-solid fa-user"></i>
                                        My Profile
                                    </a>

                                    <a class="dropdown-item" href="{{ URL::to('user/wishlist') }}">
                                        <i class="fa-solid fa-heart"></i>
                                        Wishlist
                                    </a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                 <!-- End Logout -->
                                 
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
