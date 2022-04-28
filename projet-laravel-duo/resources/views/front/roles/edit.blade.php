@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5 textGradient'><u><strong>Roles</strong></u></h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('roles.update' , $role->id) }}' method='post'>
            @csrf
            <div class='mb-3'>
                <label class='form-label text-capitalize' for=''>name</label>
                <input class='form-control' type='text' name='name' value='{{ $role->name }}'>
            </div>
            <button class='btn btn-primary mt-3' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
