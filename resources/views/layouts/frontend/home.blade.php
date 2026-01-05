@extends('layouts.frontend.index')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron bg-light p-5 rounded">
                <h1 class="display-4">Welcome to MyApp</h1>
                <p class="lead">This is a simple Laravel application with Bootstrap styling.</p>
                <hr class="my-4">
                <p>Get started by exploring our features and services.</p>
                <a class="btn btn-primary btn-lg" href="{{ url('/about') }}" role="button">Learn more</a>
            </div>
        </div>
    </div>
</div>
@endsection