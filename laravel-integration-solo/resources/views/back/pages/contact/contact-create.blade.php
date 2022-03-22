@extends('back/layout/app-back')
@section('content-back')
    @include('back/partials/sidenav-back')
<div class="container-fluid pt-5 d-flex align-items-center justify-content-center">
    <form class="d-flex flex-column align-items-start justify-content-around w-50" action="{{ route("contact.store")}}" method="post">
    @csrf
        <label for="">Titre Top :</label>
        <input class='mb-3 w-100  form-control w-100 @error('titreTop') is-invalid @enderror' name="titreTop" type="text" value="">
            @error('titreTop')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Titre Bottom :</label>
        <input class='mb-3 w-100  form-control w-100 @error('titreBottom') is-invalid @enderror' name="titreBottom" type="text" value="">
            @error('titreBottom')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        
        <button class="btn btn-success mt-5" type="submit">Create</button>
    </form>
</div>
@endsection