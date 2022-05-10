@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
    <section class="home-section">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Clients</h1>
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
            <a class='btn btn-success' href='{{ route('clients.create') }}' role='button'>Create</a>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>active</th>
                        <th scope='col'>name</th>
                        <th scope='col'>date</th>
                        <th scope='col'>category</th>
                        <th scope='col'>rating</th>
                        <th scope='col'>img</th>
                        <th scope='col'>quote</th>
                        <th scope='col'>job</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <th scope='row'>{{ $client->id }}</th>
                            <td>{{ $client->active }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->date }}</td>
                            <td>{{ $client->category }}</td>
                            <td>{{ $client->rating }}</td>
                            <td>
                                <img src="{{ asset('images/' . $client->img ) }}" alt="" class="w-100">
                            </td>
                            <td>{{ $client->quote }}</td>
                            <td>{{ $client->job }}</td>
                            <td> {{-- all_td_anchor --}}
                                <div class='d-flex'>
                                    <form action='{{ route('clients.destroy', $client->id) }}' method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button class='btn btn-danger' type=submit>Delete</button>
                                    </form>
                                    <a class='btn btn-primary' href='{{ route('clients.edit', $client->id) }}' role='button'>Edit</a>
                                    <a class='btn btn-primary' href='{{ route('clients.show', $client->id) }}' role='button'>Read</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
