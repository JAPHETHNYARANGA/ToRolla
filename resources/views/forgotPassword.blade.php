@extends('layout')
@push('loginStyle')
    <link href="{{ asset('css/forgotPass.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="container">
    <h1 class="header mt-5">ToRolla</h1>

    <div class="body row mt-5">
        <div class="image col ">
            <img src="{{ asset('Assets/register.png')}}" alt="Login Vector Image">
        </div>
        <div class="text col ">
            <h3 class="details">Enter Email to Reset Password</h3>

            <form>
                <div class="form-group mt-5">
                    <label for="email" id="email">  Email</label>
                    
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="torolla@gmail.com" >
                  </div>
                
                  <div class="button text-center">
                    <button class="btn btn-primary mt-5 text-center">Reset</button>
                  </div>
                <div class="register text-center mt-3">
                    <a href="login" ><h4>Have an account?Login here</h4></a>
                </div>
                  
            </form>   
        </div>
        
    </div>

    


</div>

    


@endsection