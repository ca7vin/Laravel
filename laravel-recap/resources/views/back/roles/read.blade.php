@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
<section class="home-section position-relative">
    <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
    <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
    <div class='container d-flex flex-column align-items-center justify-content-center'>
        <h1 class='my-5'>Roles</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th class="text-uppercase"  scope='col'>#</th>
                    <th class="text-uppercase"  scope='col'>role</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $role->id }}</th>
                    <td>{{ $role->role }}</td>
                    <td> 
                        <a class='btn btn-primary' href='{{ route('role.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
