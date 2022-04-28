@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Banner</u></strong></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="" action='{{ route('banners.store') }}' method='post' enctype="multipart/form-data">
            @csrf
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class="form-label text-capitalize" for=''>petit</label>
				<input class="form-control" type='text' name='petit'>
            </div>
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class="form-label text-capitalize" for=''>grand</label>
				<input class="form-control" type='text' name='grand'>
            </div>
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class="form-label text-capitalize" for=''>bouton</label>
				<input class="form-control" type='text' name='bouton'>
            </div>
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label for='image' class="form-label text-capitalize ">image</label>
				<input type='file' name='image' class="form-control " id="image">
            </div>
            <button class="my-3 btn btn-dark text-white" type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
