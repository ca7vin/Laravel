@extends('back.layouts.app')
@section('content')
@include('back/partials/sidenav')
<div class='container d-flex flex-column align-items-center justify-content-center'>
        <h1>Equipes</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('equipes.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input class='form-control'  type='text' name='nom'>
            </div>
            <div>
                <label for=''>ville</label>
                <input class='form-control'  type='text' name='ville'>
            </div>
            <div>
                <label for=''>pays</label>
                <input class='form-control'  type='text' name='pays'>
            </div>
            <div>
                <label for=''>effectif Max</label>
                <input class='form-control'  type='number' name='effectif'>
            </div>
            <div>
                <label for=''>avantsMax</label>
                <input class='form-control'  type='number' name='avantsMax'>
            </div>
            <div>
                <label for=''>milieuxMax</label>
                <input class='form-control'  type='number' name='milieuxMax'>
            </div>
            <div>
                <label for=''>arrieresMax</label>
                <input class='form-control'  type='number' name='arrieresMax'>
            </div>
            <div>
                <label for=''>remplacantsMax</label>
                <input class='form-control'  type='number' name='remplacantsMax'>
            </div>
            <button class='btn btn-success mt-3' type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
