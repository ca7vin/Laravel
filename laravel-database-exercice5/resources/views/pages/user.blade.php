@extends('layout/app')
@section('content')
    @include('partials/nav')
    <div class="container px-5">
      <h1 class="text-uppercase fw-bold text-center p-5">Liste des Users</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Pays</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->nom }}</td>
            <td>{{ $item->prenom }}</td>
            <td>{{ $item->age }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->pays }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @include('partials/footer')

   


@endsection




