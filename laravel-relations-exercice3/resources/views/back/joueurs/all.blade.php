@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidenav')
    <div class='container'>
        <div class="container d-flex align-items-center justify-content-around">
            <h1 class='my-5'>Joueurs</h1>
            <a class='btn btn-success' href='{{ route('joueur.create') }}' role='button'>Create</a>
        </div>
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
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th class='text-uppercase' scope='col'>image</th>
                    <th class='text-uppercase' scope='col'>nom</th>
                    <th class='text-uppercase' scope='col'>prenom</th>
                    <th class='text-uppercase' scope='col'>age</th>
                    <th class='text-uppercase' scope='col'>telephone</th>
                    <th class='text-uppercase' scope='col'>email</th>
                    <th class='text-uppercase' scope='col'>genre</th>
                    <th class='text-uppercase' scope='col'>pays</th>
                    <th class='text-uppercase' scope='col'>poste</th>
                    <th class='text-uppercase' scope='col'>equipe</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($joueurs as $joueur)
                    <tr>
                        <th scope='row'>{{ $joueur->id }}</th>
                        {{-- {{ dd($joueur->photo) }} --}}
                        <td class='d-flex align-items-center justify-content-center'>
                            <img class='w-50' src="{{ asset('img/' . $joueur->photo->lien) }}" alt="">
                        </td>
                        <td>{{ $joueur->nom }}</td>
                        <td>{{ $joueur->prenom }}</td>
                        <td>{{ $joueur->age }}</td>
                        <td>{{ $joueur->telephone }}</td>
                        <td>{{ $joueur->email }}</td>
                        <td>{{ $joueur->genre }}</td>
                        <td>{{ $joueur->pays }}</td>
                        <td>{{ $joueur->poste->nom }}</td>
                        <td>{{ $joueur->equipe->nom }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex justify-content-around'>
                                <form action='{{ route('joueur.destroy', $joueur->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <a class='btn btn-warning mx-3' href='{{ route('joueur.edit', $joueur->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('joueur.read', $joueur->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
