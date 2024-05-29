@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header bg-primary text-white">Teachers Page</div>
  <div class="card-body bg-light">
   
 
        <div class="card-body">
        <h3 class="card-title">Name : {{ $teachers->name }}</h3>
        <p class="card-text">Subject : {{ $teachers->subject }}</p>
        <p class="card-text">Mobile : {{ $teachers->mobile }}</p>
  </div>
  <button class="btn btn-warning" onclick="window.history.back()">Back</button>  
    </hr>
  
  </div>
</div>
@endsection
