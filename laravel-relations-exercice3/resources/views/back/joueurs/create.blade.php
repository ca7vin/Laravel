@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Joueurs</h1>

        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('joueur.store') }}' method='post' enctype="multipart/form-data">
            @csrf
            <div>
                <label for=''>nom</label>
                <input class='form-control' type='text' name='nom'>
            </div>
            <div>
                <label for=''>prenom</label>
                <input class='form-control' type='text' name='prenom'>
            </div>
            <div>
                <label for=''>age</label>
                <input class='form-control' type='text' name='age'>
            </div>
            <div>
                <label for=''>telephone</label>
                <input class='form-control' type='text' name='telephone'>
            </div>
            <div>
                <label for=''>email</label>
                <input class='form-control' type='text' name='email'>
            </div>
            <div>
                <label for=''>genre</label>
                <input class='form-control' type='text' name='genre'>
            </div>
            <div>
                <label for=''>pays</label>
                <input class='form-control' type='text' name='pays'>
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
                <input class="form-control" type="file" id="formFile" name="image" accept="image/png, image/jpeg">
            </div>
            <button class='btn btn-success mt-5' type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
