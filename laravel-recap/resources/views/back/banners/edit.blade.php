@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
    <section class="home-section">
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
            <form enctype="multipart/form-data" class='d-flex flex-column align-items-center justify-content-center' action='{{ route('banner.update' , $banner->id) }}' method='post'>
                @method('POST')
                @csrf
                <div class='py-2'>
                    <label class='form-label' for=''>title</label>
                    <input class='form-control' type='text' name='title' value='{{old('title') ? old('title') : $banner->title}}'>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='form-label' for=''>text</label>
                    <input class='form-control' type='text' name='text' value='{{old('text') ? old('text') : $banner->text}}'>
                    @error('text')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='form-label' for=''>btn1</label>
                    <input class='form-control' type='text' name='btn1' value='{{old('btn1') ? old('btn1') : $banner->btn1}}'>
                    @error('btn1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='form-label' for=''>icon1</label>
                    <input class='form-control' type='text' name='icon1' value='{{old('icon1') ? old('icon1') : $banner->icon1}}'>
                    @error('icon1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='form-label' for=''>link1</label>
                    <input class='form-control' type='text' name='link1' value='{{old('link1') ? old('link1') : $banner->link1}}'>
                    @error('link1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='form-label' for=''>btn2</label>
                    <input class='form-control' type='text' name='btn2' value='{{old('btn2') ? old('btn2') : $banner->btn2}}'>
                    @error('btn2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='form-label' for=''>icon2</label>
                    <input class='form-control' type='text' name='icon2' value='{{old('icon2') ? old('icon2') : $banner->icon2}}'>
                    @error('icon2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='form-label' for=''>link2</label>
                    <input class='form-control' type='text' name='link2' value='{{old('link2') ? old('link2') : $banner->link2}}'>
                    @error('link2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='py-2'>
                    <label class='form-label' for=''>img</label>
                    <input type="file" class='form-control' name='img'>
                    @error('img')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class='btn btn-dark my-3' type='submit'>Update</button> {{-- update_blade_anchor --}}
            </form>
        </div>
    </section>
@endsection
