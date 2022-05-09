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
        <form action='{{ route('client.update' , $client->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>active</label>
                <input type='text' name='active' value='{{ $client->active }}'>
            </div>
            <div>
                <label for=''>name</label>
                <input type='text' name='name' value='{{ $client->name }}'>
            </div>
            <div>
                <label for=''>date</label>
                <input type='text' name='date' value='{{ $client->date }}'>
            </div>
            <div>
                <label for=''>category</label>
                <input type='text' name='category' value='{{ $client->category }}'>
            </div>
            <div>
                <label for=''>rating</label>
                <input type='text' name='rating' value='{{ $client->rating }}'>
            </div>
            <div>
                <label for=''>img</label>
                <input type='text' name='img' value='{{ $client->img }}'>
            </div>
            <div>
                <label for=''>quote</label>
                <input type='text' name='quote' value='{{ $client->quote }}'>
            </div>
            <div>
                <label for=''>job</label>
                <input type='text' name='job' value='{{ $client->job }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
