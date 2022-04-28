@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Courses</u></strong></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('courses.update' , $course->id) }}' method='post'>
            @csrf
            @method('put')
-            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>title</label>
                <input class='form-control' type='text' name='title' value='{{ $course->title }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>description 1</label>
                <input class='form-control' type='text' name='text' value='{{ $course->description1 }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>description 2</label>
                <input class='form-control' type='text' name='text' value='{{ $course->description2 }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>info 1</label>
                <input class='form-control' type='text' name='text' value='{{ $course->info1 }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>info 2</label>
                <input class='form-control' type='text' name='text' value='{{ $course->info2 }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>info 3</label>
                <input class='form-control' type='text' name='text' value='{{ $course->info3 }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>price</label>
                <input class='form-control' type='text' name='text' value='{{ $course->price }}'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class="form-label text-capitalize" for='image' class="form-label">image</label>
                <input class="form-control" type='file' name='image'>
            </div>
            <button class="btn btn-dark mt-3" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
