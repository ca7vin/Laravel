@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class="my-5 textGradient"><strong><u>Users</u></strong></h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' class='text-uppercase text-center'>#</th>
                    <th scope='col' class='text-uppercase text-center'>name</th>
                    <th scope='col' class='text-uppercase text-center'>email</th>
                    <th scope='col' class='text-uppercase text-center'>password</th>
                    <th scope='col' class='text-uppercase text-center'>role</th>
                    <th scope='col' class='text-uppercase text-center'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $user->id }}</th>
                    <td class='text-center'>{{ $user->name }}</td>
                    <td class='text-center'>{{ $user->email }}</td>
                    <td class='text-center'>{{ $user->password }}</td>
                    <td class='text-center'>{{ $user->role->name }}</td>
                    <td class=""> {{-- read_td_anchor --}}
                        <div class="d-flex align-items-center justify-content-center">
                            <a class='btn btn-dark' href='{{ route('users.index') }}' role='button'>Back</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
