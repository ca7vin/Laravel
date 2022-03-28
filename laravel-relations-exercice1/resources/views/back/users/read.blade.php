@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Users</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>prenomo</th>
                    <th scope='col'>age</th>
                    <th scope='col'>email</th>
                    <th scope='col'>mdp</th>
                    <th scope='col'>naissance</th>
                    <th scope='col'>genre</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $user->id }}</th>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->prenomo }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mdp }}</td>
                    <td>{{ $user->naissance }}</td>
                    <td>{{ $user->genre }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('user.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
