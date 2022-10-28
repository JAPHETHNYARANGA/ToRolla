@extends('layout')

@push('loginStyle')
<link href="{{ asset('css/homePage.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="navbar">
    <nav class="navbar navbar-light ">
        <span class="navbar-brand mb-0 ml-6 h1 home"><a href="home"><i class="fa fa-home" aria-hidden="true"></i></a></span>
        <span class="navbar-brand mb-0 ml-6 h1">{{$user['name']}}</span>
      </nav>

      <a href="logout">Logout</a>
</div>

<div class="top-links  text-center">
    <div class="row">
        <div class="col">
            <h4>Home</h4>
        </div>
        <div class="col">
            <h4>Messages</h4>
        </div>
    </div>
</div>


<div class="create-product-btn btn-left">
    <Button class="btn btn-success" id="click"><a href="addProduct">Add Product</a></Button>
</div>

<div class="dropdown btn-left btn-left">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Categories
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
</div>
  
  <div class="heading text-center">
    <h4 class="featured-heading">Top Featured Products</h4>
  </div>

    <div class="container">
        <div class="products row">
            @foreach($products as $item)
            
                <div class="card col-4" style="width: 18rem;">
                    <a href="individual-item/{{$item['id']}}">
                    <img class="card-img-top" img src="{{ asset('Assets/register.png')}}" alt="Login Vector Image">
                    <div class="card-body text-center">
                    <p class="card-text">{{$item['product_name']}}</p>
                    <p class="card-text">ksh : {{$item['product_price']}}</p>
                        
                    </div>
                </a>
                </div>
            
            @endforeach
        </div>
    </div>

@push('javascript')
<script src="{{ asset('js/home.js') }}"></script>
@endpush
@endsection
