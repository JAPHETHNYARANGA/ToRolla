@extends('layout')
@push('loginStyle')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <h1 class="header mt-5">ToRolla</h1>

    <div class="body row mt-5">
        <div class="image col ">
            <img src="{{ asset('Assets/register.png')}}" alt="Login Vector Image">
        </div>
        <div class="text col ">
            <h3 class="details">Join Our Amazing Community Today</h3>

            <form action="{{ route('register.custom')}}" method="POST">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div class="form-group mt-5">
                  <label for="email" id="name">UserName</label>
                  
                   <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="form-group mt-5">
                    <label for="password" id="email"> Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="torolla@gmail.com">
                </div>
                <div class="form-group mt-5">
                    <label for="password" id="phoneNumber">PhoneNumber</label>
                    <input type="number" class="form-control" id="phone_number" name="phone_number">
                </div>
                <div class="form-group mt-5">
                    <label for="password" id="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                  <div class="button text-center">
                    <button class="btn btn-primary mt-5 text-center" type="submit">Register</button>
                  </div>
                <div class="register text-center mt-3">
                    <a href="login"><h4>Already have an account?Login here</h4></a>
                </div>
                  
            </form>   
        </div>
        
    </div>

    


</div>


@endsection

