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

            <form>
                <div class="form-group mt-5">
                  <label for="email" id="email">Email</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group mt-5">
                    <label for="password" id="password">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="button text-center">
                    <button class="btn btn-primary mt-5 text-center">Login</button>
                  </div>
                <div class="register text-center mt-3">
                    <a href=""><h4>Don't have an account?Register here</h4></a>
                </div>
                  
            </form>   
        </div>
        
    </div>

    


</div>

    


@endsection