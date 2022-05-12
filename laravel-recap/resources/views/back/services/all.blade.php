@extends('back.layouts.app')
@section('content')
    @include('back.partials.sidenav')
    <section class="home-section position-relative">
        <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
        <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Services</h1>
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
            @can('create', App\Models\Service::class )
                <a class='btn btn-success' href='{{ route('services.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th class="text-uppercase" scope='col'>#</th>
                        <th class="text-uppercase" scope='col'>icon</th>
                        <th class="text-uppercase" scope='col'>iconhover</th>
                        <th class="text-uppercase" scope='col'>class</th>
                        <th class="text-uppercase" scope='col'>name</th>
                        <th class="text-uppercase" scope='col'>text</th>
                        <th class="text-uppercase" scope='col'>link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <th scope='row'>{{ $service->id }}</th>
                            <td>
                                <img src="{{ asset('images/' . $service->icon) }}" alt="">
                            </td>
                            <td>
                                <img src="{{ asset('images/' . $service->iconhover) }}" alt="">
                            </td>
                            <td>{{ $service->class }}</td>
                            <td>{!! $service->name !!}</td>
                            <td>{!! $service->text !!}</td>
                            <td>{{ $service->link }}</td>
                            <td>
                                <div class='d-flex'>
                                    @can('delete', $service)
                                        <form action='{{ route('services.destroy', $service->id) }}' method='post'>
                                            @csrf
                                            @method('delete')
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                    @endcan
                                    @can('update', $service)
                                        <a class='btn btn-primary mx-2' href='{{ route('services.edit', $service->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                    <a class='btn btn-primary' href='{{ route('services.show', $service->id) }}'
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
