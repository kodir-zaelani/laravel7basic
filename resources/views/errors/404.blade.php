@extends('templates.default')

@section('title', __('Not Found'))
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">404 Not Found</p>
            <a href="/">Home</a>
        </div>
    </div>
@endsection