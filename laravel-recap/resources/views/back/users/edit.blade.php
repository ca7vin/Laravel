@extends('back.layouts.app')
@section('content')
    @include('back.partials.sidenav')
    <section class="home-section position-relative">
        <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
        <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class='py-5'>Users</h1>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class='d-flex flex-column justify-content-center' action='{{ route('users.update', $user->id) }}'
                method='POST'>
                @method('PUT')
                @csrf
                <div class='my-2'>
                    <label class="text-uppercase form-label" for=''>name</label>
                    <input class="form-control" type='text' name='name'
                        value='{{ old('name') ? old('name') : $user->name }}'>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='my-2'>
                    <label class="text-uppercase form-label" for=''>email</label>
                    <input class="form-control" type='text' name='email'
                        value='{!! old('email') ? old('email') : $user->email !!}'>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='my-2'>
                    <label class="text-uppercase form-label" for=''>password</label>
                    <input class="form-control" type='text' name='password'
                        value='{!! old('password') ? old('password') : $user->password !!}'>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class='my-5 d-flex flex-column align-items-center justify-content-center'>
                    <div class="input-group mb-3">
                        @foreach ($roles as $role)
                        <div class="form-check form-check-inline">
                            <input name='roles[]' class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ $role->id }}" @if ($user->roles->contains($role->id)) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox1">{{ $role->role }}</label>
                          </div>
                        @endforeach
                    </div>
                    @error('roles[]')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class='btn btn-dark mt-3' type='submit'>Update</button>
            </form>
        </div>
    </section>
@endsection
