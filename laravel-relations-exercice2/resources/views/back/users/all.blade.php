@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Users</h1>
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
        <a class='btn btn-success' href='{{ route('user.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>email</th>
                    <th scope='col'>nickname</th>
                    <th scope='col'>name</th>
                    <th scope='col'>age</th>
                    <th scope='col'>phone</th>
                    <th scope='col'>user_id</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope='row'>{{ $user->id }}</th>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->nickname }}</td>
                        <td>{{ $user->profile->name }}</td>
                        <td>{{ $user->profile->age }}</td>
                        <td>{{ $user->profile->phone }}</td>
                        <td>{{ $user->profile->user_id }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('user.destroy', $user->id) }}' method='post'>
                                    @csrf
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <a class='btn btn-warning' href='{{ route('user.edit', $user->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('user.read', $user->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
