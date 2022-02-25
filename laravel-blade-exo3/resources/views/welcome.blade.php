@extends('layouts/app')
@section('content')
    @include('partials/nav')
    @include('partials/header')
    <div class="container p-0 mb-3">
        {{ url()->current() }}{{ url()->previous() }}
    </div>
    @include('partials/banner')
    <div class="container d-flex flex-column align-items-center justify-content-center mt-3">
        <h3>Bonus :</h3>
        <p>URL actuelle : {{ url()->current() }}</p>
        <p>URL précédente : {{ url()->previous() }}</p>
        <i class="fa-brands fa-airbnb"></i>
    </div>
    @include('partials/footer')
@endsection
