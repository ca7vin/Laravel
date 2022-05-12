@extends('back.layouts.app')
@section('content')
    @include('back.partials.sidenav')
    <section class="home-section position-relative">
        <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
        <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Clients</h1>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form enctype="multipart/form-data" class='d-flex flex-column align-items-center justify-content-center'
                action='{{ route('clients.update', $client->id) }}' method='POST'>
                @method('PUT')
                @csrf
                <div class='py-2'>
                    <label class='text-uppercase form-label' for=''>active</label>
                    <input class="form-control" type='text' name='active'
                        value='{{ old('active') ? old('active') : $client->active }}'>
                    @error('active')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='text-uppercase form-label' for=''>name</label>
                    <input class="form-control" type='text' name='name'
                        value='{{ old('name') ? old('name') : $client->name }}'>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='text-uppercase form-label' for=''>date</label>
                    <input class="form-control" type='text' name='date'
                        value='{{ old('date') ? old('date') : $client->date }}'>
                    @error('date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='text-uppercase form-label' for=''>category</label>
                    <input class="form-control" type='text' name='category'
                        value='{{ old('category') ? old('category') : $client->category }}'>
                    @error('category')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='text-uppercase form-label' for=''>rating</label>
                    <input class="form-control" type='text' name='rating'
                        value='{{ old('rating') ? old('rating') : $client->rating }}'>
                    @error('rating')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='text-uppercase form-label' for=''>quote</label>
                    <textarea rows="10" cols="23" class='form-control' type='text' name='quote'>{{old('quote') ? old('quote') : $client->quote}}</textarea>
                    @error('quote')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='text-uppercase form-label' for=''>job</label>
                    <input class="form-control" type='text' name='job'
                    value='{{ old('job') ? old('job') : $client->job }}'>
                    @error('job')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='text-uppercase form-label' for=''>img</label>
                    <input type="file" class='form-control' name='img'>
                    @error('img')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class='btn btn-dark my-3' type='submit'>Update</button> 
            </form>
        </div>
    </section>
@endsection
