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
        <form action='{{ route('equipe.update' , $equipe->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input class='form-control'  type='text' name='nom' value='{{ $equipe->nom }}'>
            </div>
            <div>
                <label for=''>ville</label>
                <input class='form-control'  type='text' name='ville' value='{{ $equipe->ville }}'>
            </div>
            <div>
                <label for=''>pays</label>
                <input class='form-control'  type='text' name='pays' value='{{ $equipe->pays }}'>
            </div>
            <div>
                <label for=''>Effectif Max</label>
                <input class='form-control'  type='number' name='effectif' value='{{ $equipe->effectif }}'>
            </div>
            <div>
                <label for=''>Avants Max</label>
                <input class='form-control'  type='number' name='avantsMax' value='{{ $equipe->avantsMax }}'>
            </div>
            <div>
                <label for=''>Milieux Max</label>
                <input class='form-control'  type='number' name='milieuxMax' value='{{ $equipe->milieuxMax }}'>
            </div>
            <div>
                <label for=''>Arrieres Max</label>
                <input class='form-control'  type='number' name='arrieresMax' value='{{ $equipe->arrieresMax }}'>
            </div>
            <div>
                <label for=''>Remplacant Max</label>
                <input class='form-control'  type='number' name='remplacantsMax' value='{{ $equipe->remplacantsMax }}'>
            </div>
            <button class='btn btn-warning mt-3' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
