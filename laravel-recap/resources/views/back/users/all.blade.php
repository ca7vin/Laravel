@extends('back.layouts.app')
@section('content')
    @include('back.partials.sidenav')
    <section class="home-section position-relative">
        <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
        <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Users</h1>
            @if (session()->has('message'))
                <div class='alert alert-success'>
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class='alert alert-danger'>
                    {{ session()->get('error') }}
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
            @can('create', App\Models\User::class)
                <a class='btn btn-success' href='{{ route('users.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th class="text-uppercase" scope='col'>#</th>
                        <th class="text-uppercase" scope='col'>name</th>
                        <th class="text-uppercase" scope='col'>email</th>
                        <th class="text-uppercase" scope='col'>password</th>
                        <th class="text-uppercase" scope='col'>role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope='row'>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                    {{ $role->role }} |
                                @endforeach
                            </td>
                            <td>
                                <div class='d-flex justify-content-around'>
                                    @can('delete', $user)
                                        <form action='{{ route('users.destroy', $user->id) }}' method='post'>
                                            @csrf
                                            @method('delete')
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                    @endcan
                                    @can('update', $user)
                                        <a class='btn btn-primary mx-2' href='{{ route('users.edit', $user->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                    <a class='btn btn-primary' href='{{ route('users.show', $user->id) }}'
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
