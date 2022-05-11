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
                action='{{ route('clients.store') }}' method='post'>
                @csrf
                <div>
                    <label class='form-label text-uppercase' for=''>active</label>
                    <input class='form-control' type='text' name='active'>
                </div>
                <div>
                    <label class='form-label text-uppercase' for=''>name</label>
                    <input class='form-control' type='text' name='name'>
                </div>
                <div>
                    <label class='form-label text-uppercase' for=''>date</label>
                    <input class='form-control' type='text' name='date'>
                </div>
                <div>
                    <label class='form-label text-uppercase' for=''>category</label>
                    <input class='form-control' type='text' name='category'>
                </div>
                <div>
                    <label class='form-label text-uppercase' for=''>rating</label>
                    <input class='form-control' type='text' name='rating'>
                </div>
                <div>
                    <label class='form-label text-uppercase' for=''>quote</label>
                    <input class='form-control' type='text' name='quote'>
                </div>
                <div>
                    <label class='form-label text-uppercase' for=''>job</label>
                    <input class='form-control' type='text' name='job'>
                </div>
                <div>
                    <label class='text-uppercase form-label' for=''>img</label>
                    <input type="file" class='form-control' name='img'>
                    @error('img')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class='btn btn-dark mt-3' type='submit'>Create</button> 
            </form>
        </div>
    </section>
@endsection
