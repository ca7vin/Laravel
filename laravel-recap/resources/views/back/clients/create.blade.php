@extends('back.layouts.app')
@section('content')
    @include('back.partials.sidenav')
    <section class="home-section">
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
                    <label for=''>active</label>
                    <input class='form-control' type='text' name='active'>
                </div>
                <div>
                    <label for=''>name</label>
                    <input class='form-control' type='text' name='name'>
                </div>
                <div>
                    <label for=''>date</label>
                    <input class='form-control' type='text' name='date'>
                </div>
                <div>
                    <label for=''>category</label>
                    <input class='form-control' type='text' name='category'>
                </div>
                <div>
                    <label for=''>rating</label>
                    <input class='form-control' type='text' name='rating'>
                </div>
                <div>
                    <label for=''>quote</label>
                    <input class='form-control' type='text' name='quote'>
                </div>
                <div>
                    <label for=''>job</label>
                    <input class='form-control' type='text' name='job'>
                </div>
                <div>
                    <label class='text-uppercase' for=''>img</label>
                    <input type="file" class='form-control' name='img'>
                    @error('img')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class='btn btn-dark mt-3' type='submit'>Create</button> {{-- create_blade_anchor --}}
            </form>
        </div>
    </section>
@endsection
