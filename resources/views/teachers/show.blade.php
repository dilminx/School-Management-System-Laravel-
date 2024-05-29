@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teachers Page</div>
    <div class="card-body">
        <!-- Loop through each teacher -->
        @foreach($teachers as $teacher)
        <div class="card-body">
            <h5 class="card-title">Name: {{ $teacher->name }}</h5>
            <p class="card-text">Subjects: {{ $teacher->subject }}</p>
            <p class="card-text">Mobile: {{ $teacher->mobile }}</p>
            <a class="btn btn-danger" href="{{ route('teachers.edit', $teacher->id) }}">Edit</a>
        </div>
        <hr>
        @endforeach
        <button class="btn btn-warning" onclick="window.history.back()">Back</button>
    </div>
</div>
@endsection
