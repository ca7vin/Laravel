@extends('front/layouts/app')
@section('content')
@include('front/partials/sidenav')  
<section id='grimoire' class='home-section flex justify-center items-center w-max'>
    <div class="flex flex-col items-center justify-center">
        @foreach ($spells as $spell)
        <div class="w-full card">
            <div class=" border-b border-black lg:border-l-0 lg:border-black-400 p-4 flex flex-col justify-between leading-normal">
              <div class="mb-8">
                <p class="text-sm text-black flex items-center font-black">
                  {{ $spell['school'] }}
                </p>
                <div class="text-red-800 font-black uppercase text-xl mb-2 spells">{{ $spell['name'] }}</div>
                <p class="text-black text-base"><span class="font-black">Description :&nbsp;</span>{{ $spell['desc'] }}</p>
                <p class="text-sm text-black flex items-center">
                </p>
              </div>
              <div class="flex items-center">
                <div class="text-sm">
                  <p class="text-black text-md"><span class="font-black">Durée d'incantation :&nbsp;</span> {{ $spell['casting_time'] }}</p>
                  <p class="text-black text-md leading-none spellClass"><span class="font-black">Classes :</span> {{ $spell['dnd_class'] }}</p>
                  <p class="text-black text-md"><span class="font-black">Niveau de sort :</span> {{ $spell['level'] }}</p>
                  <p class="text-black text-md leading-none"><span class="font-black">Portée :</span> {{ $spell['range'] }}</p>
                  <p class="text-black text-md font-black">{{ $spell['level'] }}</p>
                </div>
              </div>
            </div>
          </div>

        @endforeach
    </div>
</section>

@endsection
