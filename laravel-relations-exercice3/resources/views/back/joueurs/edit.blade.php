@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
<div class='container d-flex flex-column align-items-center justify-content-center'>
        <h1>Joueurs</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('joueur.update' , $joueur->id) }}' method='post' enctype="multipart/form-data">
            @csrf
            <div>
                <label for=''>nom</label>
                <input class='form-control'  type='text' name='nom' value='{{ $joueur->nom }}'>
            </div>
            <div>
                <label for=''>prenom</label>
                <input class='form-control'  type='text' name='prenom' value='{{ $joueur->prenom }}'>
            </div>
            <div>
                <label for=''>age</label>
                <input class='form-control'  type='text' name='age' value='{{ $joueur->age }}'>
            </div>
            <div>
                <label for=''>telephone</label>
                <input class='form-control'  type='text' name='telephone' value='{{ $joueur->telephone }}'>
            </div>
            <div>
                <label for=''>email</label>
                <input class='form-control'  type='text' name='email' value='{{ $joueur->email }}'>
            </div>
            <div>
                <label for=''>genre</label>
                <input class='form-control'  type='text' name='genre' value='{{ $joueur->genre }}'>
            </div>
            <div>
                <label for=''>pays</label>
                <input class='form-control'  type='text' name='pays' value='{{ $joueur->pays }}'>
            </div>
            <div>
                <label for="exampleFormControlSelect1">rôle</label>
                <select name='poste_id' class="form-control" id="exampleFormControlSelect1">
                    @foreach ($postes as $poste)
                        <option value="{{ $poste->id }}">{{ $poste->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="exampleFormControlSelect1">equipe</label>
                <select name='equipe_id' class="form-control" id="exampleFormControlSelect1">
                    @foreach ($equipes as $equipe)
                        <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="formFile" class="form-label">Default file input</label>
                <input class="form-control" type="file" id="formFile" name="imageEdit" accept="image/png, image/jpeg">
            </div>
            <button class='btn btn-warning mt-3' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
