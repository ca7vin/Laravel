@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'><strong><u>Testimonials</u></strong></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('testimonials.update', $testimonial->id) }}' method='post'>
            @csrf
            @method('put')
            <div class="d-flex flex-column justify-content-between align-items-start mb-3">
                <label class='form-label text-capitalize' for=''>name</label>
                <input class='form-control' type='text' name='name' value='{{ $testimonial->name }}'>
            </div>
            <div class="d-flex flex-column justify-content-between align-items-start mb-3">
                <label class='form-label text-capitalize' for=''>text</label>
                <input class='form-control' type='text' name='text' value='{{ $testimonial->text }}'>
            </div>
            <div class="d-flex flex-column justify-content-between align-items-start mb-3">
                <label class='form-label text-capitalize' for=''>role</label>
                <input class='form-control' type='text' name='role' value='{{ $testimonial->role }}'>
            </div>
            @if (Auth::user()->role_id === 1)
                <div class="d-flex flex-column">
                    <label class="form-label text-capitalize" for="validation">Souhaitez-vous approuver ce testimonial ? (0 si non, 1 si oui)</label>
                    <input class="form-control" type="text" name="validation" value="{{ $testimonial->validation }}">
                </div>
            @endif
            <button class="btn btn-dark mt-3" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
