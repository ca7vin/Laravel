@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Users</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('user.update' , $user->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom' value='{{ $user->nom }}'>
            </div>
            <div>
                <label for=''>prenomo</label>
                <input type='text' name='prenomo' value='{{ $user->prenomo }}'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age' value='{{ $user->age }}'>
            </div>
            <div>
                <label for=''>email</label>
                <input type='text' name='email' value='{{ $user->email }}'>
            </div>
            <div>
                <label for=''>mdp</label>
                <input type='text' name='mdp' value='{{ $user->mdp }}'>
            </div>
            <div>
                <label for=''>naissance</label>
                <input type='text' name='naissance' value='{{ $user->naissance }}'>
            </div>
            <div>
                <label for=''>genre</label>
                <input type='text' name='genre' value='{{ $user->genre }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
