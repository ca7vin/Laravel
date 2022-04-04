@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
    <div class='container d-flex flex-column align-items-center justify-content-center'>        <h1 class='my-5'>Joueurs</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th class='text-uppercase text-center' scope='col'>image</th>
                    <th class='text-uppercase text-center' scope='col'>nom</th>
                    <th class='text-uppercase text-center' scope='col'>prenom</th>
                    <th class='text-uppercase text-center' scope='col'>age</th>
                    <th class='text-uppercase text-center' scope='col'>telephone</th>
                    <th class='text-uppercase text-center' scope='col'>email</th>
                    <th class='text-uppercase text-center' scope='col'>genre</th>
                    <th class='text-uppercase text-center' scope='col'>pays</th>
                    <th class='text-uppercase text-center' scope='col'>equipe</th>
                    <th class='text-uppercase text-center' scope='col'>poste</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $joueur->id }}</th>
                    <td class='d-flex align-items-center justify-content-center'>
                        <img class='w-50' src="{{ asset('img/' . $joueur->photo->lien) }}" alt="">
                    </td>
                    <td class="text-center">{{ $joueur->nom }}</td>
                    <td class="text-center">{{ $joueur->prenom }}</td>
                    <td class="text-center">{{ $joueur->age }}</td>
                    <td class="text-center">{{ $joueur->telephone }}</td>
                    <td class="text-center">{{ $joueur->email }}</td>
                    <td class="text-center">{{ $joueur->genre }}</td>
                    <td class="text-center">{{ $joueur->pays }}</td>
                    <td class="text-center"><a href="{{ route('equipes.show', $joueur->equipe->id) }}">{{ $joueur->equipe->nom }}</a></td>
                    <td class="text-center">{{ $joueur->poste->nom }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('joueurs.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
