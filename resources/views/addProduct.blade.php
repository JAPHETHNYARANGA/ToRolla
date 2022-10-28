@extends('layout')


@push('loginStyle')
<link href="{{ asset('css/addProduct.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="addProduct">
    <div class="navbar">
        <nav class="navbar navbar-light ">
            <span class="navbar-brand mb-0 ml-6 h1">{{$user['name']}}</span>
          </nav>
    
          <a href="logout">Logout</a>
    </div>
    
    <button class="btn btn-success mt-2 ml-2"><a href='myProducts'>My Products</a></button>
  
    <form method="POST" action="{{ route('addProduct.post')}}" >
        @csrf
        <div class="form-group">
          <label for="productName">Product Name</label>
          <input type="text" class="form-control" id="productName" name="productName" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Product Location</label>
            <input type="text" class="form-control" id="productLocation" name="productLocation">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">ProductCategory</label>
            <input type="text" class="form-control" id="productCategory" name="productCategory">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">ProductPrice</label>
            <input type="number" class="form-control" id="productPrice" name="productPrice">
          </div>
        <div class="form-group">
          <label for="productDescription">Product Description</label>
          <textarea class="form-control" id="productDescription" rows="3" name="productDescription"></textarea>
        </div>
  
        <div class="input-group control-group increment mt-3" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
          </div>
        </div>

        <div class="button text-center">
            <button class="btn btn-success">Post</button>
        </div>
        
      </form>
</div>




@push('javascript')
<script src="{{ asset('js/addProduct.js') }}"></script>
@endpush
@endsection