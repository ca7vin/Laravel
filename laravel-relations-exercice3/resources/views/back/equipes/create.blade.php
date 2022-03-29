@extends('back.layouts.app')
@section('content')
    <div class='container'>
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
        <form action='{{ route('equipe.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=''>ville</label>
                <input type='text' name='ville'>
            </div>
            <div>
                <label for=''>pays</label>
                <input type='text' name='pays'>
            </div>
            <div>
                <label for=''>effectif</label>
                <input type='text' name='effectif'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
