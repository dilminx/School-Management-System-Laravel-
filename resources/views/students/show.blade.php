@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header bg-primary text-white">Students Page</div>
  <div class="card-body bg-light">
   
 
        <div class="card-body">
        <h4 class="card-title">Name : {{ $students->name }}</h4>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>
  <button class="btn btn-warning" onclick="window.history.back()">Back</button>  
    </hr>
  
  </div>
</div>
@endsection
