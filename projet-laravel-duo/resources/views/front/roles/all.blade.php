@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Roles</strong></u></h1>
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
        <table class='table table-light table-hover mt-3 table-striped table-borderless'>
            <thead>
                <tr>
                    <th scope='col' class='text-center'>#</th>
                    <th scope='col' class='text-uppercase text-center'>Name</th>
                    <th scope='col' class='text-uppercase text-center'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <th class='text-center' scope='row'>{{ $role->id }}</th>
                        <td class='text-center'>{{ $role->name }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex align-items-center justify-content-center'>
                                <a class='btn btn-warning me-3' href='{{ route('roles.edit', $role->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('roles.show', $role->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
