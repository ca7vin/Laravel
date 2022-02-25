@extends('layouts/app')
@section('content')
    @include('partials/nav')
    @include('partials/header')
    <div class="container p-0">
        <div class="img2 d-flex align-items-center justify-content-center">
            <span class="fs-1 text-secondary">1200 x 300</span>
        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center p-0 mt-3">
        <div class="row d-flex align-items-center justify-content-center w-100">
            @include('partials/card')
            @include('partials/card')
            @include('partials/card')
        </div>
    </div>
    @include('partials/footer')
@endsection