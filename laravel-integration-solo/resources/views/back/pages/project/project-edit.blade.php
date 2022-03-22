@extends('back/layout/app-back')
@section('content-back')
    @include('back/partials/sidenav-back')
<div class="container-fluid pt-5 d-flex align-items-center justify-content-center">
    <form class="d-flex flex-column align-items-start justify-content-around w-50" action="{{ route("project.update", $projectEdit->id) }}" method="post">
    @csrf
        <label for="">Titre Top :</label>
        <input class='mb-3  form-control w-100 @error('titreTop') is-invalid @enderror' name="titreTop" type="text" value="{{ $projectEdit->titreTop }}">
            @error('titreTop')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Titre Mid :</label>
        <input class='mb-3  form-control w-100 @error('titreMid') is-invalid @enderror' name="titreMid" type="text" value="{{ $projectEdit->titreMid }}">
            @error('titreMid')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Titre Bottom :</label>
        <input class='mb-3  form-control w-100 @error('titreBottom') is-invalid @enderror' name="titreBottom" type="text" value="{{ $projectEdit->titreBottom }}">
            @error('titreBottom')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Image :</label>
        <input class='mb-3  form-control w-100 @error('image') is-invalid @enderror' name="image" type="text" value="{{ $projectEdit->image }}">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Texte :</label>
        <input class='mb-3  form-control w-100 @error('texte') is-invalid @enderror' name="texte" type="text" value="{{ $projectEdit->texte }}">
            @error('texte')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Lien :</label>
        <input class='mb-3  form-control w-100 @error('lien') is-invalid @enderror' name="lien" type="text" value="{{ $projectEdit->lien }}">
            @error('lien')
                <div class="text-danger">{{ $message }}</div>
            @enderror



        
        <button class="btn btn-success mt-5" type="submit">Update</button>
    </form>
</div>
@endsection