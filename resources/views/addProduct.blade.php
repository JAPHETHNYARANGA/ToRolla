@extends('layout')


@push('loginStyle')
<link href="{{ asset('css/addProduct.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="navbar">
    <nav class="navbar navbar-light ">
        <span class="navbar-brand mb-0 ml-6 h1">{{$user['name']}}</span>
      </nav>

      <a href="logout">Logout</a>
</div>


<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Product Name</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Product Location</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Product Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </form>



@push('javascript')
<script src="{{ asset('js/addProduct.js') }}"></script>
@endpush
@endsection