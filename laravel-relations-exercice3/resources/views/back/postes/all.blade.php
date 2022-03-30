@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Postes</h1>
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
                    <th scope='col'>nom</th>
                    <th scope='col'>limite</th>
                    <th scope='col'>nombre</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($postes as $poste)
                    <tr>
                        <th scope='row'>{{ $poste->id }}</th>
                        <td>{{ $poste->nom }}</td>
                        <td>{{ $poste->limite }}</td>
                        <td>{{ $poste->nombre }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
