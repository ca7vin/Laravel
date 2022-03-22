@extends('back/layout/app-back')
@section('content-back')
    @include('back/partials/sidenav-back')
<div class="container-fluid pt-5 d-flex align-items-center justify-content-center">
    <form class="d-flex flex-column align-items-start justify-content-around w-50" action="{{ route("footer.update", $footerEdit->id) }}" method="post">
    @csrf
        <label for="">Titre 1 :</label>
        <input class='mb-3 w-100  @error('titre') is-invalid @enderror' name="titre" type="text" value="{{ $footerEdit->titre }}">
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Icone 1 :</label>
        <input class='mb-3 w-100  @error('icone1') is-invalid @enderror' name="icone1" type="text" value="{{ $footerEdit->icone1 }}">
            @error('icone1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Icone 1 :</label>
        <input class='mb-3 w-100  @error('icone2') is-invalid @enderror' name="icone2" type="text" value="{{ $footerEdit->icone2 }}">
            @error('icone2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Icone 1 :</label>
        <input class='mb-3 w-100  @error('icone3') is-invalid @enderror' name="icone3" type="text" value="{{ $footerEdit->icone3 }}">
            @error('icone3')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Copyright :</label>
        <input class='mb-3 w-100  @error('copyright') is-invalid @enderror' name="copyright" type="text" value="{{ $footerEdit->copyright }}">
            @error('copyright')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        
        <button class="btn btn-success mt-5" type="submit">Update</button>
    </form>
</div>
@endsection