@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Banner</u></h1>
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
        <a class='btn btn-dark' href='{{ route('banners.create') }}' role='button'>Create</a>
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
                @foreach ($banners as $banner)
                    <tr>
                        <th scope='row'>{{ $banner->id }}</th>
						<td class="d-flex align-items-center justify-content-center">
                            <img class="w-50" src="{{ asset($banner->image )}}" alt="">
                        </td>
						<td class='text-center'>{{ $banner->petit }}</td>
						<td class='text-center'>{{ $banner->grand }}</td>
						<td class='text-center'>{{ $banner->bouton }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('banners.destroy', $banner->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <td><a class='btn btn-dark' href='{{ route('banners.edit', $banner->id) }}' role='button'>Edit</a></td>
                                <td><a class='btn btn-dark' href='{{ route('banners.show', $banner->id) }}' role='button'>Read</a></td>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
