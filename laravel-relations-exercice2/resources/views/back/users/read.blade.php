@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Users</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>email</th>
                    <th scope='col'>nickname</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $user->id }}</th>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->nickname }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('user.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
