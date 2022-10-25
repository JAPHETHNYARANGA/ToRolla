@extends('layout')

@push('loginStyle')
<link href="{{ asset('css/homePage.css') }}" rel="stylesheet">
@endpush
@section('content')


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

@endsection
