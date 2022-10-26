<link rel="stylesheet" href= "http://127.0.0.1:8000/css/style.css">

<title>Login</title>


@extends('layouts.app')

@section('content')

        
            
                
        <body style="background-color: #1E2046;">
            <div class="loginBox">
                
                <img class="user" src="{{ asset('images/logo-login2.png') }}" height="150px" width="150px">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                       
                            <br>
                            <div class="inputBox">
                                
                                <input id="email" type="email" placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        

                    
                            
                                <input id="password" type="password" placeholder="Password" class="input-pass"  name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                

                        

                        
                           
                                <input type="submit" value="Login">
                                    
                               
                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                       
                       
                    </form>
                </div>
            </body>

@endsection
