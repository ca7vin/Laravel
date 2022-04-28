@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Banner</strong></u></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('banners.update' , $banner->id) }}' method='post'>
            @csrf
            @method('put')
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class='form-label text-capitalize' for=''>petit</label>
				<input class='form-control' type='text' name='petit' value='{{ $banner->petit }}'>
            </div>
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class='form-label text-capitalize' for=''>grand</label>
				<input class='form-control' type='text' name='grand' value='{{ $banner->grand }}'>
            </div>
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class='form-label text-capitalize' for=''>bouton</label>
				<input class='form-control' type='text' name='bouton' value='{{ $banner->bouton }}'>
            </div>
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class="form-label text-capitalize" for=''>image</label>
				<input class="form-control" type='file' name='image' value='{{ $banner->image }}'>
            </div>
            <button class="my-3 btn btn-dark text-white" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
