@extends('layout/app')
@section('content')
    @include('partials/nav')
    <div class="container px-5">
      <h1 class="text-uppercase fw-bold text-center p-5">Liste des Articles</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Date de publication</th>
            <th scope="col">Contenu</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->nom }}</td>
            <td>{{ $item->prenom }}</td>
            <td>{{ $item->datePublication }}</td>
            <td>{{ $item->contenu }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @include('partials/footer')

   


@endsection




