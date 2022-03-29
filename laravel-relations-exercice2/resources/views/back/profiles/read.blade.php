@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Profiles</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>name</th>
                    <th scope='col'>age</th>
                    <th scope='col'>phone</th>
                    <th scope='col'>user_id</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $profile->id }}</th>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->age }}</td>
                    <td>{{ $profile->phone }}</td>
                    <td>{{ $profile->user_id }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('profile.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
