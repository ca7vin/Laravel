@extends('back.layouts.app')
@section('content')
@include('back.partials.sidenav')
<section class="home-section position-relative">
    <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
    <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Clients</h1>
            <table class='table'>
                <thead>
                    <tr>
                        <th  class="text-uppercase"  scope='col'>#</th>
                        <th  class="text-uppercase"  scope='col'>img</th>
                        <th  class="text-uppercase"  scope='col'>active</th>
                        <th  class="text-uppercase"  scope='col'>name</th>
                        <th  class="text-uppercase"  scope='col'>date</th>
                        <th  class="text-uppercase"  scope='col'>category</th>
                        <th  class="text-uppercase"  scope='col'>rating</th>
                        <th  class="text-uppercase"  scope='col'>quote</th>
                        <th  class="text-uppercase"  scope='col'>job</th>
                    </tr> 
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
                        <td> 
                            <a class='btn btn-primary' href='{{ route('clients.index') }}' role='button'>Back</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
