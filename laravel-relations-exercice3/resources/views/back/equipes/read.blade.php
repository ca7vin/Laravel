@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
<div class='container d-flex flex-column align-items-center justify-content-center'>
        <h1 class='my-5'>Equipes</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th class='text-uppercase text-center' scope='col'>nom</th>
                    <th class='text-uppercase text-center' scope='col'>ville</th>
                    <th class='text-uppercase text-center' scope='col'>pays</th>
                    <th class='text-uppercase text-center' scope='col'>effectif</th>
                    <th class='text-uppercase text-center' scope='col'>joueurs</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $equipe->id }}</th>
                    <td class='text-center'>{{ $equipe->nom }}</td>
                    <td class='text-center'>{{ $equipe->ville }}</td>
                    <td class='text-center'>{{ $equipe->pays }}</td>
                    <td class='text-center'>{{ $equipe->joueurs->count() }} sur 7</td>
                    <td class='text-center'>
                        <ul class='list-unstyled'>
                            @foreach ($equipe->joueurs as $joueur)
                                <li class='list-group-items'><a href="{{ route('joueur.read', $joueur->id) }}">{{ $joueur->nom }} {{ $joueur->prenom }}</a>&nbsp;({{ $joueur->poste->nom }})</li>
                            @endforeach

                        </ul>
                    </td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('equipe.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
