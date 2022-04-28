@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Titles</u></strong></h1>
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
        <a class='btn btn-dark' href='{{ route('titles.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-uppercase text-center' scope='col'>#</th>
                    <th class='text-uppercase text-center' scope='col'>petit</th>
                    <th class='text-uppercase text-center' scope='col'>grand</th>
                    <th class='text-uppercase text-center' scope='col'>grand 2</th>
                    <th class='text-uppercase text-center' scope='col'>description</th>
                    <th class='text-uppercase text-center' scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($titles as $title)
                    <tr>
                        <th class='text-center' scope='row'>{{ $title->id }}</th>
                        <td class='text-center'>{{ $title->petit }}</td>
                        <td class='text-center'>{{ $title->grand }}</td>
                        <td class='text-center'>{{ $title->grand2 }}</td>
                        <td class='text-center'>{{ $title->description }}</td>
                        <td class='d-flex align-items-center justify-content-around'> {{-- all_td_anchor --}}
                            <form action='{{ route('titles.destroy', $title->id) }}' method='post'>
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type=submit>Delete</button>
                            </form>
                            <a class='btn btn-dark mx-3' href='{{ route('titles.edit', $title->id) }}' role='button'>Edit</a>
                            <a class='btn btn-dark' href='{{ route('titles.show', $title->id) }}'
                                role='button'>Read</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
