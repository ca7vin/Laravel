@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Clients</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>active</th>
                    <th scope='col'>name</th>
                    <th scope='col'>date</th>
                    <th scope='col'>category</th>
                    <th scope='col'>rating</th>
                    <th scope='col'>img</th>
                    <th scope='col'>quote</th>
                    <th scope='col'>job</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $client->id }}</th>
                    <td>{{ $client->active }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->date }}</td>
                    <td>{{ $client->category }}</td>
                    <td>{{ $client->rating }}</td>
                    <td>{{ $client->img }}</td>
                    <td>{{ $client->quote }}</td>
                    <td>{{ $client->job }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('client.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
