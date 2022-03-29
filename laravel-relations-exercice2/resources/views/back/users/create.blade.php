@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Users</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('user.store') }}' method='post'>
            @csrf
            <div class="d-flex flex-column align-items-start justify-content-around">
                <label for=''>email</label>
                <input type='text' name='email'>
            </div>
            <div class="d-flex flex-column align-items-start justify-content-around">
                <label for=''>nickname</label>
                <input type='text' name='nickname'>
            </div>
            <div class="d-flex flex-column align-items-start justify-content-around">
                <label for=''>name</label>
                <input type='text' name='name'>
            </div>
            <div class="d-flex flex-column align-items-start justify-content-around">
                <label for=''>age</label>
                <input type='text' name='age'>
            </div>
            <div class="d-flex flex-column align-items-start justify-content-around">
                <label for=''>phone</label>
                <input type='text' name='phone'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
