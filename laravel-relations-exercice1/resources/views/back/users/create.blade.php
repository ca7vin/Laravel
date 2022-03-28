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
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=''>prenomo</label>
                <input type='text' name='prenomo'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age'>
            </div>
            <div>
                <label for=''>email</label>
                <input type='text' name='email'>
            </div>
            <div>
                <label for=''>mdp</label>
                <input type='text' name='mdp'>
            </div>
            <div>
                <label for=''>naissance</label>
                <input type='text' name='naissance'>
            </div>
            <div>
                <label for=''>genre</label>
                <input type='text' name='genre'>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Role Id</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="role_id">
                  <option selected>Choose...</option>
                  @foreach ($roles as $role)
                      <option value="{{ $role->id }}">{{ $role->nom }}</option>
                  </div>
                  @endforeach
                </select>
              </div>


            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
