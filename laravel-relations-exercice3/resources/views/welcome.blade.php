@extends('back/layouts/app')
@section('content')
    @include('back/partials/sidenav')
    <div class='container d-flex flex-column align-items-center justify-content-center p-5'>
        <h2>2 équipes full au hasard</h2>
        <div class="container-fluid d-flex align-items-center justify-content-around">
            @foreach ($twoTeam as $equipe)
                    <div class="card mb-5 p-5">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title">{{ $equipe->nom }}</h5>
                            <p class="card-text">Effectif : {{ $equipe->effectif }}</p>
                            <p class="card-text">Joueurs : {{ $equipe->joueurs->count() }}</p>
                            <a href="{{ route('equipes.show', $equipe->id) }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
            @endforeach
        </div>
        <h2>4 Joueurs sans équipe</h2>
        <div class="container-fluid d-flex align-items-center justify-content-around">
            @foreach ($fourPlayers as $joueur)
                    <div class="card mb-5 p-5">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title text-center">{{ $joueur->nom }} {{ $joueur->prenom }}</h5>
                            <p class="card-text">{{ $joueur->poste->nom }}</p>
                            <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
            @endforeach
        </div>

        <h2>4 Joueurs avec équipe</h2>
        <div class="container d-flex align-items-center justify-content-around">
            @foreach ($fourWoTeam as $joueur)
                    <div class="card mb-5 p-5">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title text-center">{{ $joueur->nom }} {{ $joueur->prenom }}</h5>
                            <p><a class='card-text' href="{{ route('equipes.show', $joueur->equipe->id) }}">{{ $joueur->equipe->nom }}</a></p>
                            <p class="card-text">{{ $joueur->poste->nom }}</p>
                            <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
            @endforeach
        </div>

        <h2>Equipes avec un effectif insuffisant</h2>
        <div class="container-fluid d-flex align-items-center justify-content-around">
            @foreach ($emptyTeam as $equipe)
                    <div class="card mb-5 p-5">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title">{{ $equipe->nom }}</h5>
                            <p class="card-text">Effectif : {{ $equipe->effectif }}</p>
                            <p class="card-text">Joueurs : {{ $equipe->joueurs->count() }}</p>
                            <a href="{{ route('equipes.show', $equipe->id) }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
            @endforeach
        </div>
    <h2>Joueurs avec le même pays que leur équipe</h2>
    <div class="container-fluid d-flex align-items-center justify-content-around">
        @foreach ($joueurs as $joueur)
            @if ($joueur->equipe->pays == $joueur->pays)
                <div class="card mb-5 p-5">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title text-center">{{ $joueur->nom }} {{ $joueur->prenom }}</h5>
                        <p class="card-text">{{ $joueur->poste->nom }}</p>
                        <p><a class='card-text' href="{{ route('equipes.show', $joueur->equipe->id) }}">{{ $joueur->equipe->nom }}</a></p>
                        <p class="card-text">{{ $joueur->pays }}</p>
                        <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn btn-primary">Show</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <h2>5 femmes avec equipe</h2>
        <div class="container-fluid d-flex align-items-center justify-content-around">
            @foreach ($femaleWithTeam as $joueur)
                    <div class="card mb-5 p-5">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title text-center">{{ $joueur->nom }} {{ $joueur->prenom }}</h5>
                            <p class="card-text">{{ $joueur->poste->nom }}</p>
                            <p><a class='card-text' href="{{ route('equipes.show', $joueur->equipe->id) }}">{{ $joueur->equipe->nom }}</a></p>
                            <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
            @endforeach
        </div>
    <h2>5 hommes avec equipe</h2>
        <div class="container-fluid d-flex align-items-center justify-content-around">
            @foreach ($maleWithTeam as $joueur)
                    <div class="card mb-5 p-5">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title text-center">{{ $joueur->nom }} {{ $joueur->prenom }}</h5>
                            <p class="card-text">{{ $joueur->poste->nom }}</p>
                            <p><a class='card-text' href="{{ route('equipes.show', $joueur->equipe->id) }}">{{ $joueur->equipe->nom }}</a></p>
                            <a href="{{ route('joueurs.show', $joueur->id) }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
            @endforeach
        </div>
@endsection
</div>
