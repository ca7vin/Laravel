@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Course</u></strong></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('courses.store') }}' method='post' enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column mb-3">
                <label class='form-label text-capitalize'for=''>title</label>
                <input class='form-control'type='text' name='title'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for=''>description1</label>
                <input class='form-control' type='text' name='description1'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for=''>description2</label>
                <input class='form-control' type='text' name='description2'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for=''>info1</label>
                <input class='form-control' type='text' name='info1'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for=''>info2</label>
                <input class='form-control' type='text' name='info2'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for=''>info3</label>
                <input class='form-control' type='text' name='info3'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for=''>price</label>
                <input class='form-control' type='text' name='price'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for='image' class="form-label">image</label>
                <input class="form-control" type='file' name='image'>
            </div>
            <button class="btn btn-success mt-3" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
