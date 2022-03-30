@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Equipes</h1>
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
        <a class='btn btn-success' href='{{ route('equipe.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>ville</th>
                    <th scope='col'>pays</th>
                    <th scope='col'>effectif</th>
                    <th scope='col'>avants</th>
                    <th scope='col'>milieux</th>
                    <th scope='col'>centres</th>
                    <th scope='col'>remplacants</th>
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
                        <td> </td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('equipe.destroy', $equipe->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('equipe.edit', $equipe->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('equipe.read', $equipe->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
