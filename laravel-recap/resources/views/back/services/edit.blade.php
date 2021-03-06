@extends('back.layouts.app')
@section('content')
    @include('back.partials.sidenav')
    <section class="home-section position-relative">
        <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
        <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Services</h1>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class='d-flex flex-column justify-content-center' action='{{ route('services.update', $service->id) }}'
                method='POST'>
                @method('PUT')
                @csrf
                <div class='my-2 d-flex flex-column align-items-center justify-content-center'>
                    <label class="text-uppercase form-label" for=''>icon</label>


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
                    <label class="text-uppercase form-label" for=''>iconhover</label>
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
                <div class='my-2'>
                    <label class="text-uppercase form-label" for=''>class</label>
                    <input class="form-control" type='text' name='class'
                        value='{{ old('class') ? old('class') : $service->class }}'>
                    @error('class')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='my-2'>
                    <label class="text-uppercase form-label" for=''>name</label>
                    <input class="form-control" type='text' name='name'
                        value='{!! old('name') ? old('name') : $service->name !!}'>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='my-2'>
                    <label class="text-uppercase form-label" for=''>text</label>
                    <textarea rows="10" cols="23" class='form-control' type='text' name='text'>{{old('text') ? old('text') : $service->text}}</textarea>
                    @error('text')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='my-2'>
                    <label class="text-uppercase form-label" for=''>link</label>
                    <input class="form-control" type='text' name='link'
                        value='{{ old('link') ? old('link') : $service->link }}'>
                    @error('link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class='btn btn-dark mt-3' type='submit'>Update</button> 
            </form>
        </div>
    </section>
@endsection
