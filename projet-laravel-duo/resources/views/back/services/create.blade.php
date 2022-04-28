@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Service</u></strong></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('services.store') }}' method='post' enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column mb-3">
                <label class='form-label text-capitalize'for=''>title</label>
                <input class='form-control'type='text' name='title'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for=''>text</label>
                <input class='form-control' type='text' name='text'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for='image' class="form-label">image</label>
                <input class="form-control" type='file' name='image'>
            </div>
            <button class="btn btn-dark mt-3" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
