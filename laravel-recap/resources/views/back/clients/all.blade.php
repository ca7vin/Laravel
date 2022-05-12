@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidenav')
    <section class="home-section position-relative">
        <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
        <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
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
            @can('create', App\Models\Client::class )
                <a class='btn btn-success' href='{{ route('clients.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th class="text-uppercase" scope='col'>#</th>
                        <th class="text-uppercase" scope='col'>active</th>
                        <th class="text-uppercase" scope='col'>name</th>
                        <th class="text-uppercase" scope='col'>date</th>
                        <th class="text-uppercase" scope='col'>category</th>
                        <th class="text-uppercase" scope='col'>rating</th>
                        <th class="text-uppercase" scope='col'>img</th>
                        <th class="text-uppercase" scope='col'>quote</th>
                        <th class="text-uppercase" scope='col'>job</th>
                    </tr>
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
                                <img src="{{ asset('images/' . $client->img) }}" alt="" class="w-100">
                            </td>
                            <td>{{ $client->quote }}</td>
                            <td>{{ $client->job }}</td>
                            <td>
                                <div class='d-flex'>
                                    @can('delete', $client)
                                        <form action='{{ route('clients.destroy', $client->id) }}' method='post'>
                                            @csrf
                                            @method('DELETE')
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                    @endcan
                                    @can('update', $client)
                                        <a class='btn btn-primary mx-2' href='{{ route('clients.edit', $client->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                    <a class='btn btn-primary' href='{{ route('clients.show', $client->id) }}'
                                        role='button'>Read</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
