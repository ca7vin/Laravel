@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Profiles</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('profile.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>name</label>
                <input type='text' name='name'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age'>
            </div>
            <div>
                <label for=''>phone</label>
                <input type='text' name='phone'>
            </div>
            <div>
                <label for=''>user_id</label>
                <input type='text' name='user_id'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
