@extends('layout/app')
@section('content')
    @include('partials/nav')
    <div class="container px-5">
      <h1 class="text-uppercase fw-bold text-center p-5">Liste des Portfolios</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->nom }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->image }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @include('partials/footer')



@endsection




