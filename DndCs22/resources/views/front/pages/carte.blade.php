@extends('front/layouts/app')
@section('content')
    @include('front/partials/navbar')
    <div class="flex justify-center items-center">
        <div class="flex flex-col items-center justify-center p-5 w-1/2">
            <img class='' src="{{ asset('img/map.jpg') }}" alt="" onclick="window.open(this.src)">
        </div>
        <div class="flex flex-col items-start justify-center p-5 w-1/2 h-max">
            <h1 class='text-3xl font-bold mb-5'>Faërun</h1>
            <p class='pr-10'>Le monde dans lequel sont situés les Royaumes Oubliés se nomme Toril. C'est la planète.
                Toril est divisé en plusieurs continents. Le plus connu est Faerûn, mais il existe également ceux de Kara-Tur (ambiance orientale, à l'est), Maztica (ambiance aztèque, à l'ouest) et Zakhara (ambiance 1001 nuits, au sud).
                Le continent de Faerûn est à son tour divisé en plusieurs grandes régions :</p>
            <ul class='ml-5 mt-5 list-disc'>
                <li>Le Nord et la Côte des Epées</li>
                <li>Le Mitan</li>
                <li>Les Terres Gelées</li>
                <li>Turmish</li>
                <li>Les terres de la Horde</li>
                <li>Les terres de l'Intrigue</li>
                <li>Les Vieux Empires</li>
                <li>Le Sud Etincelant</li>
            </ul>
        </div>
    </div>
@endsection
