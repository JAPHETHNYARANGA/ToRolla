@extends('layout')

@push('loginStyle')
<link href="{{ asset('css/homePage.css') }}" rel="stylesheet">
@endpush
@section('content')

<div class="navbar">
    <nav class="navbar navbar-light ">
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
    <Button class="btn btn-success" id="click">Add Product</Button>
</div>

<div class="dropdown btn-left btn-left">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown button
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </div>
  

<table class="table">
    <thead>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>
    </thead> 
    <tbody>
        <tr>
            <td>{{$user['name']}}</td>
            <td>{{$user['phone_number']}}</td>
            <td>{{$user['email']}}</td>
            <td><a href="logout">Logout</a></td>
        </tr>
    </tbody>
</table>

@push('javascript')
<script src="{{ asset('js/home.js') }}"></script>
@endpush
@endsection
