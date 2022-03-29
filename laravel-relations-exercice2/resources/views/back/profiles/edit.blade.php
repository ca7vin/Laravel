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
        <form action='{{ route('profile.update' , $profile->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>name</label>
                <input type='text' name='name' value='{{ $profile->name }}'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age' value='{{ $profile->age }}'>
            </div>
            <div>
                <label for=''>phone</label>
                <input type='text' name='phone' value='{{ $profile->phone }}'>
            </div>
            <div>
                <label for=''>user_id</label>
                <input type='text' name='user_id' value='{{ $profile->user_id }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
