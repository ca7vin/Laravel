@extends('layout/app')
@section('content')
    @include('partials/nav')
    <div class="container px-5">
      <h1 class="text-uppercase fw-bold text-center p-5">Liste des Equipes</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Ville</th>
            <th scope="col">Commune</th>
            <th scope="col">Joueurs</th>
            <th scope="col">Postes</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->nom }}</td>
            <td>{{ $item->ville }}</td>
            <td>{{ $item->commune }}</td>
            <td>{{ $item->joueurs }}</td>
            <td>{{ $item->postes }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @include('partials/footer')
   


@endsection




