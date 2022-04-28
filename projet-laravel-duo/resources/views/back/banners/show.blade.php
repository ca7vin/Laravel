@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Banner</strong></u></h1>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-center text-uppercase' scope='col'>#</th>
                    <th class='text-center text-uppercase w-25' scope='col'>image</th>
                    <th class='text-center text-uppercase' scope='col'>petit</th>
                    <th class='text-center text-uppercase' scope='col'>grand</th>
                    <th class='text-center text-uppercase' scope='col'>bouton</th>
                    <th class='text-center text-uppercase' scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $banner->id }}</th>
                    <td class="d-flex align-items-center justify-content-center">
                        <img class="w-50" src="{{ asset($banner->image) }}" alt="">
                    </td>
                    <td class='text-center'>{{ $banner->petit }}</td>
                    <td class='text-center'>{{ $banner->grand }}</td>
                    <td class='text-center'>{{ $banner->bouton }}</td>
                    <td class='text-center'> {{-- all_td_anchor --}}
                        <div class='d-flex align-items-center justify-content-around'>
                            <a class='btn btn-dark' href='{{ route('banners.index') }}' role='button'>Back</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
