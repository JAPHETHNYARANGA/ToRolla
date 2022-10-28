@extends('layout')

@push('loginStyle')

@endpush
<link href="{{ asset('css/individualItem.css') }}" rel="stylesheet">

@section('content')
<div class="navbar">
    <nav class="navbar navbar-light ">
        <span class="navbar-brand mb-0 ml-6 h1 home"><a href="{{ route('home.custom') }}"><i class="fa fa-home" aria-hidden="true"></i></a></span>
        <span class="navbar-brand mb-0 ml-6 h1">{{$user['name']}}</span>
      </nav>

      <a href="{{ route('logout.custom') }}">Logout</a>
</div>


<div class="container">
    <div class="topText text-center">
        <h4 class="mt-2">{{$individualItem['product_name']}}</h4>
        <h4 class="mt-2">ksh : {{$individualItem['product_price']}}</h4>
        <h4 class="mt-2">{{$individualItem['product_location']}}</h4>
    </div>
    
    <h5 class="topText mt-4">Description</h5>
    <p>{{$individualItem['product_description']}}</p>

</div>
@push('javascript')


@endpush

@endsection