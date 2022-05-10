@extends('back.layouts.app')
@section('content')
@include('back.partials.sidenav')
    <section class="home-section">
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
            <a class='btn btn-success' href='{{ route('services.create') }}' role='button'>Create</a>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>icon</th>
                        <th scope='col'>iconhover</th>
                        <th scope='col'>class</th>
                        <th scope='col'>name</th>
                        <th scope='col'>text</th>
                        <th scope='col'>link</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <th scope='row'>{{ $service->id }}</th>
                            <td>
                                <img src="{{ asset('images/' . $service->icon ) }}" alt="">
                            </td>
                            <td>
                                <img src="{{ asset('images/' . $service->iconhover ) }}" alt="">
                            </td>
                            <td>{{ $service->class }}</td>
                            <td>{!! $service->name !!}</td>
                            <td>{!! $service->text !!}</td>
                            <td>{{ $service->link }}</td>
                            <td> {{-- all_td_anchor --}}
                                <div class='d-flex'>
                                    <form action='{{ route('services.destroy', $service->id) }}' method='post'>
                                        @csrf
                                        @method('delete')
                                        <button class='btn btn-danger' type=submit>Delete</button>
                                    </form>
                                    <a class='btn btn-primary' href='{{ route('services.edit', $service->id) }}' role='button'>Edit</a>
                                    <a class='btn btn-primary' href='{{ route('services.show', $service->id) }}' role='button'>Read</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
