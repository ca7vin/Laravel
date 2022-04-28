@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class="my-5 textGradient"><strong><u>Services</u></strong></h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' class='text-uppercase text-center'>#</th>
                    <th scope='col' class='text-uppercase text-center'>image</th>
                    <th scope='col' class='text-uppercase text-center'>title</th>
                    <th scope='col' class='text-uppercase text-center'>text</th>
                    <th scope='col' class='text-uppercase text-center'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $service->id }}</th>
                    <td class="d-flex align-items-center justify-content-center">
                        <img class="w-50" src="{{ asset($service->image) }}" alt="">
                    </td>
                    <td class='text-center'>{{ $service->title }}</td>
                    <td class='text-center'>{{ $service->text }}</td>
                    <td class=""> {{-- read_td_anchor --}}
                        <div class="d-flex align-items-center justify-content-center">
                            <a class='btn btn-dark' href='{{ route('services.index') }}' role='button'>Back</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
