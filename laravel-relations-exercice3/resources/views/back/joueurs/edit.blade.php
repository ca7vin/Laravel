@extends('back.layouts.app')
@section('content')
    <div class='container'>
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
        <form action='{{ route('joueur.update' , $joueur->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom' value='{{ $joueur->nom }}'>
            </div>
            <div>
                <label for=''>prenom</label>
                <input type='text' name='prenom' value='{{ $joueur->prenom }}'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age' value='{{ $joueur->age }}'>
            </div>
            <div>
                <label for=''>telephone</label>
                <input type='text' name='telephone' value='{{ $joueur->telephone }}'>
            </div>
            <div>
                <label for=''>email</label>
                <input type='text' name='email' value='{{ $joueur->email }}'>
            </div>
            <div>
                <label for=''>genre</label>
                <input type='text' name='genre' value='{{ $joueur->genre }}'>
            </div>
            <div>
                <label for=''>pays</label>
                <input type='text' name='pays' value='{{ $joueur->pays }}'>
            </div>
            <div>
                <label for=''>role</label>
                <input type='text' name='role' value='{{ $joueur->role }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
