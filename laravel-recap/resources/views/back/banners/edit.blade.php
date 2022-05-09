@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Banners</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('banner.update' , $banner->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>title</label>
                <input type='text' name='title' value='{{ $banner->title }}'>
            </div>
            <div>
                <label for=''>text</label>
                <input type='text' name='text' value='{{ $banner->text }}'>
            </div>
            <div>
                <label for=''>btn1</label>
                <input type='text' name='btn1' value='{{ $banner->btn1 }}'>
            </div>
            <div>
                <label for=''>icon1</label>
                <input type='text' name='icon1' value='{{ $banner->icon1 }}'>
            </div>
            <div>
                <label for=''>link1</label>
                <input type='text' name='link1' value='{{ $banner->link1 }}'>
            </div>
            <div>
                <label for=''>btn2</label>
                <input type='text' name='btn2' value='{{ $banner->btn2 }}'>
            </div>
            <div>
                <label for=''>icon2</label>
                <input type='text' name='icon2' value='{{ $banner->icon2 }}'>
            </div>
            <div>
                <label for=''>link2</label>
                <input type='text' name='link2' value='{{ $banner->link2 }}'>
            </div>
            <div>
                <label for=''>img</label>
                <input type='text' name='img' value='{{ $banner->img }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
