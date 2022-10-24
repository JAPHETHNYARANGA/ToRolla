@extends('layout')
@push('loginStyle')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="container">
    <h1 class="header mt-5">ToRolla</h1>

    <div class="body row mt-5">
        <div class="image col ">
            <img src="{{ asset('Assets/register.png')}}" alt="Login Vector Image">
        </div>
        <div class="text col ">
            <h3 class="details">Enter Your Details to Continue</h3>

            <form method="POST" action="{{ route('login.custom')}}">
              @csrf
                <div class="form-group mt-5">
                    <label for="email" id="email">Email</label>
                    
                     <input type="email" class="form-control" id="email" placeholder="torolla@gmail.com" >
                     @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                     @endif
                  </div>
                
                <div class="form-group mt-5">
                    <label for="password" id="password">Password</label>
                    <input type="password" class="form-control" id="password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="Rememberme" name="remember">
                      Remember me
                    </label>
                  </div>
                  <div class="button text-center">
                    <button class="btn btn-primary mt-5 text-center" type="submit">Login</button>
                  </div>
                <div class="register text-center mt-3">
                    <a href="register" ><h4>Don't have an account?Register here</h4></a>
                </div>

                <div class="register text-center mt-3">
                    <a href="forgotPassword" ><h4>Forgot Password?</h4></a>
                </div>
                  
            </form>   
        </div>
        
    </div>

    


</div>

    


@endsection