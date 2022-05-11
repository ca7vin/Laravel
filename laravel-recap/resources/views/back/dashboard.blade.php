@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
    <section class="home-section position-relative">
        <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
        <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Dashboard</h1>
            <p>Bonjour {{ Auth::user()->name }}</p>
        </div>
    </section>
@endsection
