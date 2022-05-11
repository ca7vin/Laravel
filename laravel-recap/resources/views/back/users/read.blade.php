@extends('back.layouts.app')
@section('content')
<section class="home-section position-relative">
    <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
    <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Services</h1>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>icon</th>
                        <th scope='col'>iconhover</th>
                        <th scope='col'>name</th>
                        <th scope='col'>text</th>
                        <th scope='col'>link</th>
                    </tr> 
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>{{ $service->id }}</th>
                        <td>
                            <img src="{{ asset('images/' . $service->icon) }}" alt="">
                        </td>
                        <td>
                            <img src="{{ asset('images/' . $service->iconhover) }}" alt="">
                        </td>
                        <td>{!! $service->name !!}</td>
                        <td>{!! $service->text !!}</td>
                        <td>{{ $service->link }}</td>
                        <td>
                            <a class='btn btn-primary' href='{{ route('services.index') }}' role='button'>Back</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
