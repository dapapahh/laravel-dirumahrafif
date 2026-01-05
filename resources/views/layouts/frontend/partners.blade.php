@extends('layouts.frontend.index')

@section('title', 'Partners')

@section('content')
<div class="container">
    <h2 class="mb-4">Our Partners</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Partner 1</h5>
                    <p class="card-text">Description of partner 1 and their contribution.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Partner 2</h5>
                    <p class="card-text">Description of partner 2 and their contribution.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Partner 3</h5>
                    <p class="card-text">Description of partner 3 and their contribution.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
