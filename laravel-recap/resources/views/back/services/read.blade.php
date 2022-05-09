@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Services</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>icon</th>
                    <th scope='col'>iconhover</th>
                    <th scope='col'>name</th>
                    <th scope='col'>text</th>
                    <th scope='col'>link</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $service->id }}</th>
                    <td>{{ $service->icon }}</td>
                    <td>{{ $service->iconhover }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->text }}</td>
                    <td>{{ $service->link }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('service.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
