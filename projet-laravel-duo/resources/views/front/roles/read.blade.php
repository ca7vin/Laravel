@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'>Roles</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-uppercase text-center' scope='col'>#</th>
                    <th class='text-uppercase text-center' scope='col'>name</th>
                    <th class='text-uppercase text-center' scope='col'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row' class='text-center'>{{ $role->id }}</th>
                    <td class='text-center'>{{ $role->name }}</td>
                    <td> {{-- read_td_anchor --}}
                        <div class="d-flex align-items-center justify-content-center">
                            <a class='btn btn-primary' href='{{ route('roles.index') }}' role='button'>Back</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
