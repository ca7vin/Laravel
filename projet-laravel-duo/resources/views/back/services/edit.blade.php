@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Services</u></strong></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('services.update' , $service->id) }}' method='post'>
            @csrf
            @method("put")
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>title</label>
                <input class='form-control' type='text' name='title' value='{{ $service->title }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>text</label>
                <input class='form-control' type='text' name='text' value='{{ $service->text }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <p class="text-capitalize">Image</p>
                <div class="d-flex justify-content-around align-items-start">
                    @foreach ($services as $item)
                    <div class="form-check mx-3">
                        <label class="form-check-label" for="image">
                            <div class="">
                                <img class="w-100" src="{{ asset($item->image) }}" alt="">
                            </div>
                        </label>
                        <input class='form-check-input @error('image') is-invalid @enderror' name="image" type="radio"
                            checked value='{{ asset($item->image) }}'>
                    </div>
                @endforeach
                </div>
            </div>
            <button class="btn btn-dark mt-3" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
