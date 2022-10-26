<link rel="stylesheet" href= "http://127.0.0.1:8000/css/style.css">

<title>Register</title>

@extends('layouts.app')

@section('content')
<body style="background-color: #1E2046;">
            <div class="loginBox">
                <img class="user" src="{{ asset('images/logo-login2.png') }}" height="150px" width="150px">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <br>
                            <div class="inputBox">
                                <input id="name" type="text"  placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                      

                      
                            
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                   

                     
                                <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                     

                       
                                <input id="password-confirm" placeholder="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        

                       
                                <input type="submit" value="Register" style="background: blue;">
                                  
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
