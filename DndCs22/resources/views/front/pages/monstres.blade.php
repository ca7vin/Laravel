@extends('front/layouts/app')
@section('content')
@include('front/partials/navbar')  
<section id='monstres' class='flex justify-center items-center w-full'>
    <div class="flex flex-col items-center justify-center w-full">
        @foreach ($monstres as $monstre)
        <div class="w-full card">
            <div class=" border-b border-black lg:border-l-0 lg:border-black-400 p-4 flex flex-col justify-between leading-normal">
              <div class="mb-8">
                <p class="text-sm text-black flex items-center font-black">
                  {{ $monstre['type'] }} {{ $monstre['subtype'] }}
                </p>
                <div class="text-black font-black uppercase text-xl mb-2 spells">{{ $monstre['name'] }}</div>
                <p class="text-black text-base"><span class="font-black">Taille :&nbsp;</span>{{ $monstre['size'] }}</p>
                <p class="text-sm text-black flex items-center">
                </p>
              </div>
              <div class="flex items-center">
                <div class="text-sm">
                  <p class="text-black text-md"><span class="font-black">Durée d'incantation :&nbsp;</span> </p>
                  <p class="text-black text-md leading-none spellClass"><span class="font-black">Classes :</span> </p>
                  <p class="text-black text-md"><span class="font-black">Niveau de sort :</span> </p>
                  <p class="text-black text-md leading-none"><span class="font-black">Portée :</span> </p>
                  <p class="text-black text-md font-black"> </p>
                </div>
              </div>
            </div>
          </div>

        @endforeach
        <button  class="bg-yellow-400 rounded p-3 m-10">Load more</button>
    </div>
</section>

@endsection
