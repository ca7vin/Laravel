@extends('back.layouts.app')
@section('content')
@include('back.partials.sidenav')
    <section class="home-section">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Clients</h1>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>img</th>
                        <th scope='col'>active</th>
                        <th scope='col'>name</th>
                        <th scope='col'>date</th>
                        <th scope='col'>category</th>
                        <th scope='col'>rating</th>
                        <th scope='col'>quote</th>
                        <th scope='col'>job</th>
                    </tr> {{-- read_tr_anchor --}}
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>{{ $client->id }}</th>
                        <td>
                            <img src="{{ asset('images/' . $client->img) }}" alt="">
                        </td>
                        <td>{{ $client->active }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->date }}</td>
                        <td>{{ $client->category }}</td>
                        <td>{{ $client->rating }}</td>
                        <td>{{ $client->quote }}</td>
                        <td>{{ $client->job }}</td>
                        <td> {{-- read_td_anchor --}}
                            <a class='btn btn-primary' href='{{ route('clients.index') }}' role='button'>Back</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
