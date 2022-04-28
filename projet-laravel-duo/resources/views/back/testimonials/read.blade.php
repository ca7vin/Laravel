@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'><strong><u>Testimonials</u></strong></h1>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-center text-uppercase' scope='col'>#</th>
                    <th class='text-center text-uppercase' scope='col'>name</th>
                    <th class='text-center text-uppercase' scope='col'>text</th>
                    <th class='text-center text-uppercase' scope='col'>role</th>
                    <th class='text-center text-uppercase' scope='col'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $testimonial->id }}</th>
                    <td class='text-center text-capitalize'>{{ $testimonial->name }}</td>
                    <td class='text-center text-capitalize'>{{ $testimonial->text }}</td>
                    <td class='text-center text-capitalize'>{{ $testimonial->role }}</td>
                    <td> {{-- read_td_anchor --}}
                        <div class="d-flex align-items-center justify-content-center">
                            <a class='btn btn-dark' href='{{ route('testimonials.index') }}' role='button'>Back</a>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
