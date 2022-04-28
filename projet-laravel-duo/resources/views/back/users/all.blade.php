@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Users</strong></u></h1>
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
        <a class='btn btn-dark' href='{{ route('users.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-uppercase text-center' scope='col'>#</th>
                    <th class='text-uppercase text-center' scope='col'>Name</th>
                    <th class='text-uppercase text-center' scope='col'>Email</th>
                    <th class='text-uppercase text-center' scope='col'>Password</th>
                    <th class='text-uppercase text-center' scope='col'>Role</th>
                    <th class='text-uppercase text-center' scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th class="text-center text-capitalize" scope='row'>{{ $user->id }}</th>
                        <td class="text-center text-capitalize">{{ $user->name }}</td>
                        <td class="text-center text-capitalize">{{ $user->email }}</td>
                        <td class="text-center text-capitalize">{{ $user->password }}</td>
                        <td class="text-center text-capitalize">{{ $user->role->name }}</td>
                        <td class=""> {{-- all_td_anchor --}}
                            <div class='d-flex align-items-center justify-content-around'>
                                <form action='{{ route('users.destroy', $user->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <a class='btn btn-dark' href='{{ route('users.edit', $user->id) }}' role='button'>Edit</a>
                                <a class='btn btn-dark' href='{{ route('users.show', $user->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
