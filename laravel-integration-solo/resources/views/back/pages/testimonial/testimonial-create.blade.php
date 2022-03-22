@extends('back/layout/app-back')
@section('content-back')
    @include('back/partials/sidenav-back')
<div class="container-fluid pt-5 d-flex align-items-center justify-content-center">
    <form class="d-flex flex-column align-items-start justify-content-around w-50" action="{{ route("testimonial.store") }}" method="post">
    @csrf
        <label for="">Titre :</label>
        <input class='mb-3  form-control w-100 @error('titre') is-invalid @enderror' name="titre" type="text" value="">
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Image :</label>
        <input class='mb-3  form-control w-100 @error('image') is-invalid @enderror' name="image" type="text" value="">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Titre 2 :</label>
        <input class='mb-3  form-control w-100 @error('titre2') is-invalid @enderror' name="titre2" type="text" value="">
            @error('titre2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Texte :</label>
        <input class='mb-3  form-control w-100 @error('texte') is-invalid @enderror' name="texte" type="text" value="">
            @error('texte')
                <div class="text-danger">{{ $message }}</div>
            @enderror


        
        <button class="btn btn-success mt-5" type="submit">Create</button>
    </form>
</div>
@endsection