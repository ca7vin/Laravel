@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
<section class="home-section position-relative">
    <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
    <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Banners</h1>
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
            <table class='table'>
                <thead>
                    <tr>
                        <th class="text-uppercase" scope='col'>#</th>
                        <th class="text-uppercase" scope='col'>img</th>
                        <th class="text-uppercase" scope='col'>title</th>
                        <th class="text-uppercase" scope='col'>text</th>
                        <th class="text-uppercase" scope='col'>btn1</th>
                        <th class="text-uppercase" scope='col'>icon1</th>
                        <th class="text-uppercase" scope='col'>link1</th>
                        <th class="text-uppercase" scope='col'>btn2</th>
                        <th class="text-uppercase" scope='col'>icon2</th>
                        <th class="text-uppercase" scope='col'>link2</th>
                    </tr> 
                </thead>
                <tbody>
                    @foreach ($banners as $banner)
                        <tr>
                            <th scope='row'>{{ $banner->id }}</th>
                            <td>
                                <img class='w-100' src="{{ asset('images/' . $banner->img) }}" alt="">
                            </td>
                            <td>{{ $banner->title }}</td>
                            <td>{{ $banner->text }}</td>
                            <td>{{ $banner->btn1 }}</td>
                            <td>
                                <i class='{{ $banner->icon1 }} fa-2x'></i>
                            </td>
                            <td>{{ $banner->link1 }}</td>
                            <td>{{ $banner->btn2 }}</td>
                            <td>
                                <i class='{{ $banner->icon2 }} fa-2x'></i>
                            </td>
                            <td>{{ $banner->link2 }}</td>
                            <td> 
                                <div class='d-flex'>
                                    <a class='btn btn-primary' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
