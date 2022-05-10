@extends('back.layouts.app')
@section('content')
@include('back.partials.sidenav')
    <section class="section-home">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class="py-5">Services</h1>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('services.store') }}' method='post'>
                @csrf
                <div class='my-2 d-flex flex-column align-items-center justify-content-center'>
                    <label class="text-uppercase" for=''>icon</label>


                    <div class="d-flex align-items-center justify-content-around">

                        @foreach ($services as $service)
                            <div
                                class="form-check form-check-inline d-flex flex-column align-items-center justify-content-center">
                                <input class="form-check-input ms-0 mb-3" type="radio" name="icon" value="{{ $service->icon }}">
                                <label class="form-check-label" for="icon">
                                    <img src="{{ asset('images/' . $service->icon) }}" alt="">
                                </label>
                            </div>
                        @endforeach

                    </div>
                    @error('icon')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='my-2 d-flex flex-column align-items-center justify-content-center'>
                    <label class="text-uppercase" for=''>iconhover</label>
                    <div class="d-flex align-items-center justify-content-around">
                        @foreach ($services as $service)
                            <div
                                class="form-check form-check-inline d-flex flex-column align-items-center justify-content-center">
                                <input class="form-check-input ms-0 mb-3" type="radio" name="iconhover" value="{{ $service->iconhover }}">
                                <label class="form-check-label" for="iconhover">
                                    <img src="{{ asset('images/' . $service->iconhover) }}" alt="">
                                </label>
                            </div>
                        @endforeach
                    </div>
                    @error('iconhover')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for=''>class</label>
                    <input class="form-control" type='text' name='class'>
                </div>
                <div>
                    <label for=''>name</label>
                    <input class="form-control" type='text' name='name'>
                </div>
                <div>
                    <label for=''>text</label>
                    <input class="form-control" type='text' name='text'>
                </div>
                <div>
                    <label for=''>link</label>
                    <input class="form-control" type='text' name='link'>
                </div>
                <button class='btn btn-dark mt-3' type='submit'>Create</button> {{-- create_blade_anchor --}} 
            </form>
        </div>
    </section>
@endsection
