@extends('back/layout/app-back')
@section('content-back')
    @include('back/partials/sidenav-back')
<div class="container-fluid pt-5 d-flex align-items-center justify-content-center">
    <form class="d-flex flex-column align-items-start justify-content-around w-50" action="{{ route("header.update", $headerEdit->id) }}" method="post">
    @csrf
        <label for="">Nav Texte :</label>
        <input class='mb-3 w-100' name="navText" type="text" value="{{ $headerEdit->navText }}">
            @error('navText')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Nav Link :</label>
        <input class='mb-3 w-100' name="navLink" type="text" value="{{ $headerEdit->navLink }}">
            @error('navLink')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Image :</label>
        <input class='mb-3 w-100' name="image" type="text" value="{{ $headerEdit->image }}">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror


        
        <button class="btn btn-success mt-5" type="submit">Update</button>
    </form>
</div>
@endsection