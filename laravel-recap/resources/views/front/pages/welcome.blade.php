@extends('front/layouts/app_front')
@section('content')
    @include('front/partials/preloader')
    @include('front/partials/header')
    @include('front/partials/modal')
    @if (session()->has('message'))
        <div class='alert alert-danger d-flex flex-column align-items-center justify-content-center position-absolute' style='z-index:100 !important; top:130px;'>
            {{ session()->get('message') }}
            <div class="gradient-button">
                <a id="modal_trigger2" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In
                    Now</a>
            </div>
        </div>
    @endif
    @if (session()->has('success'))
        <div class='alert alert-success d-flex flex-column align-items-center justify-content-center position-absolute' style='z-index:100 !important; top:130px;'>
            {{ session()->get('success') }}
        </div>
    @endif
    @include('front/partials/mainBanner')
    @include('front/partials/services')
    @include('front/partials/about')
    @include('front/partials/client')
    @include('front/partials/footer')
@endsection
