@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><strong><u>User</u></strong></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('users.store') }}' method='post' enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column mb-3">
                <label class='form-label text-capitalize'for=''>name</label>
                <input class='form-control'type='text' name='name'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class='form-label text-capitalize'for=''>email</label>
                <input class='form-control'type='email' name='email'>
            </div>
            <div class="d-flex flex-column mb-3">
                <label class='form-label text-capitalize'for=''>password</label>
                <input class='form-control'type='text' name='password'>
            </div>


            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Role</label>
                <select class="form-select" id="inputGroupSelect01" name="role_id">
                  <option selected>Choose...</option>
                  @foreach ($roles as $role)
                  <option value="{{ $role->id }}">{{ $role->name }}</option>
                  @endforeach
                </select>
              </div>
            
            
            
            <button class="btn btn-dark mt-3" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
