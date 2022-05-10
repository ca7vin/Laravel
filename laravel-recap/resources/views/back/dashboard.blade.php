@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
    <section class="home-section">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Dashboard</h1>
            <p>Bonjour {{ Auth::user()->name }}</p>
        </div>
    </section>
@endsection
