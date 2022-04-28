@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class="my-5 textGradient"><strong><u>Courses</u></strong></h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' class='text-uppercase text-center'>#</th>
                    <th scope='col' class='text-uppercase text-center'>image</th>
                    <th scope='col' class='text-uppercase text-center'>title</th>
                    <th scope='col' class='text-uppercase text-center'>description 1</th>
                    <th scope='col' class='text-uppercase text-center'>description 2</th>
                    <th scope='col' class='text-uppercase text-center'>info 1</th>
                    <th scope='col' class='text-uppercase text-center'>info 2</th>
                    <th scope='col' class='text-uppercase text-center'>info 3</th>
                    <th scope='col' class='text-uppercase text-center'>price</th>
                    <th scope='col' class='text-uppercase text-center'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $course->id }}</th>
                    <td class="d-flex align-items-center justify-content-center">
                        <img class="w-50" src="{{ asset($course->image) }}" alt="">
                    </td>
                    <td class='text-center'>{{ $course->title }}</td>
                    <td class='text-center'>{{ $course->description1 }}</td>
                    <td class='text-center'>{{ $course->description2 }}</td>
                    <td class='text-center'>{{ $course->info1 }}</td>
                    <td class='text-center'>{{ $course->info2 }}</td>
                    <td class='text-center'>{{ $course->info3 }}</td>
                    <td class='text-center'>{{ $course->price }}</td>
                    <td class=""> {{-- read_td_anchor --}}
                        <div class="d-flex align-items-center justify-content-center">
                            <a class='btn btn-dark' href='{{ route('courses.index') }}' role='button'>Back</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
