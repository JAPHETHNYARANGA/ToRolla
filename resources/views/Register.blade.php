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

            <form>
                <div class="form-group mt-5">
                  <label for="email" id="email">UserName</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="form-group mt-5">
                    <label for="password" id="password"> Email</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="torolla@gmail.com">
                </div>
                <div class="form-group mt-5">
                    <label for="password" id="password">PhoneNumber</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group mt-5">
                    <label for="password" id="password">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1">
                </div>
                  <div class="button text-center">
                    <button class="btn btn-primary mt-5 text-center">Register</button>
                  </div>
                <div class="register text-center mt-3">
                    <a href=""><h4>Already have an account?Login here</h4></a>
                </div>
                  
            </form>   
        </div>
        
    </div>

    


</div>


@endsection

