@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Title</strong></u></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="" action='{{ route('titles.store') }}' method='post'>
            @csrf
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class='form-label text-capitalize' for=''>petit</label>
				<input class="form-control" type='text' name='petit'>
            </div>
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class='form-label text-capitalize' for=''>grand</label>
				<input class="form-control" type='text' name='grand'>
            </div>
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class='form-label text-capitalize' for=''>grand 2</label>
				<input class="form-control" type='text' name='grand2'>
            </div>
			<div class="d-flex flex-column justify-content-between align-items-start mb-3">
				<label class='form-label text-capitalize' for=''>description</label>
				<input class="form-control" type='text' name='description'>
            </div>
            <button class="btn btn-dark text-white mt-3" type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
