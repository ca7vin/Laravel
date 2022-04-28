@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Courses</u></strong></h1>
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
        <a class='btn btn-dark' href='{{ route('courses.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' class='text-center text-uppercase'>#</th>
                    <th scope='col' class='text-center text-uppercase'>image</th>
                    <th scope='col' class='text-center text-uppercase'>title</th>
                    <th scope='col' class='text-center text-uppercase'>description 1</th>
                    <th scope='col' class='text-center text-uppercase'>description 2</th>
                    <th scope='col' class='text-center text-uppercase'>info 1</th>
                    <th scope='col' class='text-center text-uppercase'>info 2</th>
                    <th scope='col' class='text-center text-uppercase'>info 3</th>
                    <th scope='col' class='text-center text-uppercase'>price</th>
                    <th scope='col' class='text-center text-uppercase'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <th scope='row'>{{ $course->id }}</th>
						<td class="d-flex align-items-center justify-content-center">
                            <img class="" src="{{ asset($course->image )}}" alt="">
                        </td>
                        <td class="text-center">{{ $course->title }}</td>
                        <td class="text-center">{{ $course->description1 }}</td>
                        <td class="text-center">{{ $course->description2 }}</td>
                        <td class="text-center">{{ $course->info1 }}</td>
                        <td class="text-center">{{ $course->info2 }}</td>
                        <td class="text-center">{{ $course->info3 }}</td>
                        <td class="text-center">{{ $course->price }}</td>
                        <td class=""> {{-- all_td_anchor --}}
                            <div class='d-flex align-items-center justify-content-around'>
                                <form action='{{ route('courses.destroy', $course->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <a class='btn btn-dark mx-3' href='{{ route('courses.edit', $course->id) }}' role='button'>Edit</a>
                                <a class='btn btn-dark' href='{{ route('courses.show', $course->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
