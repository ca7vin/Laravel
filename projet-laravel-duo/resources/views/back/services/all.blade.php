@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Services</u></strong></h1>
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
        @can('create', \App\Models\Service::class)
        <a class='btn btn-dark' href='{{ route('services.create') }}' role='button'>Create</a>
        @endcan
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' class='text-center text-black text-uppercase'>#</th>
                    <th scope='col' class='text-center text-black text-uppercase'>image</th>
                    <th scope='col' class='text-center text-black text-uppercase'>title</th>
                    <th scope='col' class='text-center text-black text-uppercase'>text</th>
                    <th scope='col' class='text-center text-black text-uppercase'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th scope='row'>{{ $service->id }}</th>
						<td class="d-flex align-items-center justify-content-center">
                            <img class="w-50" src="{{ asset($service->image )}}" alt="">
                        </td>
                        <td class="text-center text-black">{{ $service->title }}</td>
                        <td class="text-center text-black">{{ $service->text }}</td>
                        <td class=""> {{-- all_td_anchor --}}
                            <div class='d-flex align-items-center justify-content-around'>
                                @can('delete', $service)
                                <form action='{{ route('services.destroy', $service->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{ encrypt($service->id) }}">
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                @endcan
                                @can('update', $service)
                                <a class='btn btn-dark' href='{{ route('services.edit', $service->id) }}' role='button'>Edit</a>
                                @endcan 
                                <a class='btn btn-dark' href='{{ route('services.show', $service->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
