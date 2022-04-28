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
        <form action='{{ route('testimonials.store') }}' method='post'>
            @csrf
            <div class="d-flex flex-column justify-content-between align-items-start mb-3">
                <label class="form-label text-capitalize" for=''>name</label>
                <input class='form-control' type='text' name='name'>
            </div>
            <div class="d-flex flex-column justify-content-between align-items-start mb-3">
                <label class="form-label text-capitalize" for=''>text</label>
                <input class='form-control' type='text' name='text'>
            </div>
            <div class="d-flex flex-column justify-content-between align-items-start mb-3">
                <label class="form-label text-capitalize" for=''>role</label>
                <input class='form-control' type='text' name='role'>
            </div>
            <button class="btn btn-dark mt-3" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
