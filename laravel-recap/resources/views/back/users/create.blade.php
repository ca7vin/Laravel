@extends('back.layouts.app')
@section('content')
    @include('back.partials.sidenav')
    <section class="home-section position-relative">
        <img class='position-absolute top-0 start-0' src="{{ asset('images/regular-table-top.png') }}" alt="">
        <img class='position-absolute bottom-0 end-0' src="{{ asset('images/regular-table-bottom.png') }}" alt="">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <h1 class="py-5">Users</h1>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('users.store') }}'
                method='post'>
                @csrf
                <div>
                    <label class="text-uppercase form-label" for=''>name</label>
                    <input class="form-control" type='text' name='name'>
                </div>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label class="text-uppercase form-label" for=''>email</label>
                    <input class="form-control" type='email' name='email'>
                </div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label class="text-uppercase form-label" for='password'>password</label>
                    <input class="form-control" type='text' name='password'>
                </div>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class='my-5 d-flex flex-column align-items-center justify-content-center'>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="role_id">Role</label>
                        </div>
                        <select name='role_id' class="custom-select" id="inputGroupSelect01">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('role_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class='btn btn-dark mt-3' type='submit'>Create</button>
            </form>
        </div>
    </section>
@endsection
