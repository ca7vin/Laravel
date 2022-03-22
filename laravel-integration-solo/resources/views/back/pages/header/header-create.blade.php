@extends('back/layout/app-back')
@section('content-back')
    @include('back/partials/sidenav-back')
<div class="container-fluid pt-5 d-flex align-items-center justify-content-center">
    <form class="d-flex flex-column align-items-start justify-content-around w-50" action="{{ route("header.store") }}" method="post">
    @csrf
        <label for="">Nav Texte :</label>
        <input class='mb-3  form-control w-100 @error('navText') is-invalid @enderror' name="navText" type="text" value="">
            @error('navText')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Nav Link :</label>
        <input class='mb-3  form-control w-100 @error('navLink') is-invalid @enderror' name="navLink" type="text" value="">
            @error('navLink')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Image :</label>
        <input class='mb-3  form-control w-100 @error('image') is-invalid @enderror' name="image" type="text" value="">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <button class="btn btn-success mt-5" type="submit">Create</button>
    </form>
</div>
@endsection