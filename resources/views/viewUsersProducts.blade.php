@extends('layout')

@push('loginStyle')
<link href="{{ asset('css/viewUsersProducts.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="navbar">
    <nav class="navbar navbar-light ">
        <span class="navbar-brand mb-0 ml-6 h1 home"><a href="home"><i class="fa fa-home" aria-hidden="true"></i></a></span>
        <span class="navbar-brand mb-0 ml-6 h1">{{$user['name']}}</span>
      </nav>

      <a href="logout">Logout</a>
</div>

<div class="heading text-center mt-2">
    <h3>My Products</h3>
</div>

<div class="container">
    <div class="products row">
        @foreach ($product as $item)
       
        <div class="card col-4" style="width: 18rem;">
          <a href="individual-item/{{$item['id']}}">
            <img class="card-img-top" img src="{{ asset('Assets/register.png')}}" alt="Login Vector Image">
            <div class="card-body text-center">
              <p class="card-text">{{$item['product_name']}}</p>
              <p class="card-text">{{$item['product_price']}}</p>
              <p class="card-text">{{$item['product_location']}}</p>
            </div>
          </a>  
          </div>
            
        @endforeach
        
    </div>
</div>


@push('javascript')

@endpush
@endsection