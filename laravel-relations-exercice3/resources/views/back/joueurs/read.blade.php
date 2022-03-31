@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Joueurs</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>prenom</th>
                    <th scope='col'>age</th>
                    <th scope='col'>telephone</th>
                    <th scope='col'>email</th>
                    <th scope='col'>genre</th>
                    <th scope='col'>pays</th>
                    <th scope='col'>equipe</th>
                    <th scope='col'>poste</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $joueur->id }}</th>
                    <td>{{ $joueur->nom }}</td>
                    <td>{{ $joueur->prenom }}</td>
                    <td>{{ $joueur->age }}</td>
                    <td>{{ $joueur->telephone }}</td>
                    <td>{{ $joueur->email }}</td>
                    <td>{{ $joueur->genre }}</td>
                    <td>{{ $joueur->pays }}</td>
                    <td><a href="{{ route('equipe.read', $joueur->equipe->id) }}">{{ $joueur->equipe->nom }}</a></td>
                    <td>{{ $joueur->poste->nom }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('joueur.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
