@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Clients</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('client.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>active</label>
                <input type='text' name='active'>
            </div>
            <div>
                <label for=''>name</label>
                <input type='text' name='name'>
            </div>
            <div>
                <label for=''>date</label>
                <input type='text' name='date'>
            </div>
            <div>
                <label for=''>category</label>
                <input type='text' name='category'>
            </div>
            <div>
                <label for=''>rating</label>
                <input type='text' name='rating'>
            </div>
            <div>
                <label for=''>img</label>
                <input type='text' name='img'>
            </div>
            <div>
                <label for=''>quote</label>
                <input type='text' name='quote'>
            </div>
            <div>
                <label for=''>job</label>
                <input type='text' name='job'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
