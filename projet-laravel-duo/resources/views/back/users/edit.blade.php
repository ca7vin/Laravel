@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>Users</u></strong></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('users.update' , $user->id) }}' method='post'>
            @csrf
            @method("put")
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>name</label>
                <input class='form-control' type='text' name='name' value='{{ $user->name }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>email</label>
                <input class='form-control' type='text' name='email' value='{{ $user->email }}'>
            </div>
            <div class="d-flex flex-column mb-4">
                <label class='form-label text-capitalize' for=''>password</label>
                <input class='form-control' type='text' name='password' value='{{ $user->password }}'>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Role</label>
                <select class="form-select" id="inputGroupSelect01" name="role_id">
                  <option selected>{{ $user->role->name }}</option>
                  @foreach ($roles as $role)
                  <option value="{{ $role->id }}">{{ $role->name }}</option>
                  @endforeach
                </select>
              </div>
            
            <button class="btn btn-dark mt-3" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
