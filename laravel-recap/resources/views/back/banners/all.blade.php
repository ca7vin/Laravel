@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Banners</h1>
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
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>title</th>
                    <th scope='col'>text</th>
                    <th scope='col'>btn1</th>
                    <th scope='col'>icon1</th>
                    <th scope='col'>link1</th>
                    <th scope='col'>btn2</th>
                    <th scope='col'>icon2</th>
                    <th scope='col'>link2</th>
                    <th scope='col'>img</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <th scope='row'>{{ $banner->id }}</th>
                        <td>{{ $banner->title }}</td>
                        <td>{{ $banner->text }}</td>
                        <td>{{ $banner->btn1 }}</td>
                        <td>{{ $banner->icon1 }}</td>
                        <td>{{ $banner->link1 }}</td>
                        <td>{{ $banner->btn2 }}</td>
                        <td>{{ $banner->icon2 }}</td>
                        <td>{{ $banner->link2 }}</td>
                        <td>{{ $banner->img }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
