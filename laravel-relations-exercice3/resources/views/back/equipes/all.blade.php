@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
    <div class='container d-flex flex-column align-items-center justify-content-center'>
        <div class="container d-flex align-items-center justify-content-around">
            <h1 class='my-5'>Equipes</h1>
            <a class='btn btn-success' href='{{ route('equipe.create') }}' role='button'>Create</a>
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
                    <th class='text-uppercase' scope='col'>nom</th>
                    <th class='text-uppercase' scope='col'>ville</th>
                    <th class='text-uppercase' scope='col'>pays</th>
                    <th class='text-uppercase' scope='col'>effectif</th>
                    <th class='text-uppercase' scope='col'>avants</th>
                    <th class='text-uppercase' scope='col'>milieux</th>
                    <th class='text-uppercase' scope='col'>centres</th>
                    <th class='text-uppercase' scope='col'>remplacants</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($equipes as $equipe)
                    <tr>
                        <th scope='row'>{{ $equipe->id }}</th>
                        <td>{{ $equipe->nom }}</td>
                        <td>{{ $equipe->ville }}</td>
                        <td>{{ $equipe->pays }}</td>
                        <td>{{ $equipe->joueurs->count() }} sur 7</td>
                        <td>{{ $equipe->avants }} sur 2</td>
                        <td>{{ $equipe->milieux }} sur 2</td>
                        <td>{{ $equipe->arrieres }} sur 2</td>
                        <td>{{ $equipe->remplacants }} sur 3</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex justify-content-around'>
                                <form action='{{ route('equipe.destroy', $equipe->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <a class='btn btn-warning' href='{{ route('equipe.edit', $equipe->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('equipe.read', $equipe->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
