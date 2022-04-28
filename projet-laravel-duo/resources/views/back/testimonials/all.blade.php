@extends('back.layouts.app')
@section('content')
    <div class='container p-5'>
        <h1 class='my-3 textGradient'><strong><u>Testimonials</u></strong></h1>
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


        {{-- LAST EX --}}
        @if (Auth::user()->role_id === 1)
            @foreach ($testimonials as $testimonial)
                {{-- <h1>{{ $testimonial->name }}</h1> --}}
                @if ($testimonial->validation === 0)
                    <table class="table">
                        {{-- <thead> supp et editer  , dans blade edit, faut --}}
                        <tr>
                            <th scope='col' class='text-center text-uppercase'>#</th>
                            <th scope='col' class='text-center text-uppercase'>name</th>
                            <th scope='col' class='text-center text-uppercase'>text</th>
                            <th scope='col' class='text-center text-uppercase'>role</th>
                            <th scope='col' class='text-center text-uppercase'>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope='row' class='text-center'>{{ $testimonial->id }}</th>
                                <td class='text-center'>{{ $testimonial->name }}</td>
                                <td class='text-center'>{{ $testimonial->text }}</td>
                                <td class='text-center'>{{ $testimonial->role }}</td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        @can('delete', $testimonial)
                                            <form class="mx-3"
                                                action='{{ route('testimonials.destroy', $testimonial->id) }}' method='post'>
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{ encrypt($testimonial->id) }}">
                                                <button class="btn btn-danger" type=submit>Delete</button>
                                            </form>
                                        @endcan
                                        @can('update', $testimonial)
                                            <a class='btn btn-dark' href='{{ route('testimonials.edit', $testimonial->id) }}'
                                                role='button'>Edit</a>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endif
            @endforeach
        @endif
        @can('create', App\Models\Testimonial::class)
            <a class='btn btn-dark mt-1' href='{{ route('testimonials.create') }}' role='button'>Create</a>
        @endcan
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col' class='text-center text-uppercase'>#</th>
                    <th scope='col' class='text-center text-uppercase'>name</th>
                    <th scope='col' class='text-center text-uppercase'>text</th>
                    <th scope='col' class='text-center text-uppercase'>role</th>
                    <th scope='col' class='text-center text-uppercase'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    @if ($testimonial->validation === 1)
                        <tr>
                            <th scope='row' class='text-center'>{{ $testimonial->id }}</th>
                            <td class='text-center'>{{ $testimonial->name }}</td>
                            <td class='text-center'>{{ $testimonial->text }}</td>
                            <td class='text-center'>{{ $testimonial->role }}</td>
                            <td> {{-- all_td_anchor --}}
                                <div class="d-flex align-items-center justify-content-center">
                                    @can('delete', $testimonial)
                                        <form class="mx-3" action='{{ route('testimonials.destroy', $testimonial->id) }}' method='post'>
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ encrypt($testimonial->id) }}">
                                            <button class="btn btn-danger" type=submit>Delete</button>
                                        </form>
                                    @endcan
                                    @can('update', $testimonial)
                                        @if ($testimonial->user_id === Auth::user()->id || Auth::user()->role_id === 1)
                                            <a class='btn btn-dark' href='{{ route('testimonials.edit', $testimonial->id) }}'
                                                role='button'>Edit</a>
                                        @endif
                                    @endcan
                                    <a class='btn btn-dark mx-3' href='{{ route('testimonials.show', $testimonial->id) }}'
                                        role='button'>Read</a>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        @if (Auth::user()->id !== 1)
            <div class="col-6">
                {!! $testimonials->links('pagination::bootstrap-5') !!}
            </div>
            
        @endif


            {{-- {{ dd(Auth::user()->role_id) }} --}}

    </div>
@endsection
