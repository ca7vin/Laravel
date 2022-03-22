@extends('back/layout/app-back')
@section('content-back')
    @include('back/partials/sidenav-back')
    <div class="container-fluid pt-5 d-flex align-items-center justify-content-center">
        <form class="d-flex flex-column align-items-start justify-content-around w-50"
            action="{{ route('banner.update', $bannerEdit->id) }}" method="post">
            @csrf
            <label for="">Titre :</label>
            <input class='form-control w-100 @error('titre') is-invalid @enderror' name="titre" type="text"
                value="{{ $bannerEdit->titre }}">
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <label for="">Texte :</label>
            <input class='form-control w-100 @error('texte') is-invalid @enderror' name="texte" type="text"
                value="{{ $bannerEdit->texte }}">
            @error('texte')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <label for="">Lien :</label>
            <input class='form-control w-100 @error('lien') is-invalid @enderror' name="lien" type="text"
                value="{{ $bannerEdit->lien }}">
            @error('lien')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <label for="">Image :</label>
            <input class='form-control w-100 @error('image') is-invalid @enderror' name="image" type="text"
                value="{{ $bannerEdit->image }}">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror



            <button class="btn btn-success mt-5" type="submit">Update</button>
        </form>
    </div>
@endsection
