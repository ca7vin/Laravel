@extends('front/layouts/app')
@section('content')
    @include('front/partials/navbar')
    <section id='monstres' class='flex justify-center items-center w-full'>
        <div class="flex flex-col items-center justify-center w-full">
            @foreach ($monstres as $monstre)
                <div class="w-full card">
                    <div
                        class=" border-b border-black lg:border-l-0 lg:border-black-400 p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-sm text-black flex items-center font-black capitalize">
                                {{ $monstre['type'] }} {{ $monstre['subtype'] }}
                            </p>
                            <div class="text-black font-black uppercase text-xl mb-2 spells">{{ $monstre['name'] }}</div>
                            <div class="columns-6 p-5">
                                <div class="flex flex-col items-center justify-center bg-slate-400 rounded py-10">
                                    <span class="font-black">FOR</span>
                                    <p class="text-black text-3xl">{{ $monstre['strength'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center bg-slate-400 rounded py-10">
                                    <span class="font-black">DEX</span>
                                    <p class="text-black text-3xl">{{ $monstre['dexterity'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center bg-slate-400 rounded py-10">
                                    <span class="font-black">CON</span>
                                    <p class="text-black text-3xl">{{ $monstre['constitution'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center bg-slate-400 rounded py-10">
                                    <span class="font-black">INT</span>
                                    <p class="text-black text-3xl">{{ $monstre['intelligence'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center bg-slate-400 rounded py-10">
                                    <span class="font-black">SAG</span>
                                    <p class="text-black text-3xl">{{ $monstre['wisdom'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center bg-slate-400 rounded py-10">
                                    <span class="font-black">CHA</span>
                                    <p class="text-black text-3xl">{{ $monstre['charisma'] }}</p>
                                </div>
                                
                            </div>
                            <div class="flex p-5 w-full justify-around">
                                <div class="flex flex-col items-center justify-center">
                                    <i class="fa-solid fa-heart fa-5x text-red-800 relative"></i>
                                    <p class='text-2xl text-white absolute z-10'>{{ $monstre['hit_points'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <i class="fa-solid fa-shield fa-5x text-gray-800 relative"></i>
                                    <p class='text-2xl text-white absolute z-10'>{{ $monstre['armor_class'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <span class="text-lg font-bold uppercase">Déplacements :</span>
                                    <ul class='list-disc'>
                                        @if (array_key_exists('walk', $monstre['speed']))
                                            <li class='text-xl text-black'><span class="font-bold text-sm">Marche :
                                                </span>{{ floor($monstre['speed']['walk'] / 3.2808399) }} m</li>
                                        @endif
                                        @if (array_key_exists('swim', $monstre['speed']))
                                            <li class='text-xl text-black'><span class="font-bold text-sm">Nage :
                                                </span>{{ floor($monstre['speed']['swim'] / 3.2808399) }} m</li>
                                        @endif
                                        @if (array_key_exists('fly', $monstre['speed']))
                                            <li class='text-xl text-black'><span class="font-bold text-sm">Vol :
                                                </span>{{ floor($monstre['speed']['fly'] / 3.2808399) }} m</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-col items-start justify-center p-5">
                                <span class="text-lg font-bold uppercase">Actions :</span>
                                <ul class='list-disc'>
                                    {{-- @if (count($monstre['actions']) < 2) --}}
                                    @if (is_array($monstre['actions']) || is_object($monstre['actions']))
                                        @foreach ($monstre['actions'] as $action)
                                            <li>
                                                <span class="font-bold">{{ $action['name'] }}</span>
                                        <p>{{ $action['desc'] }}</p>
                                            </li>
                                        @endforeach
                                    @endif
                                    {{-- @else
                                        <span class="font-bold">{{ $monstre['actions'][0]['name'] }}</span>
                                        <p>{{ $monstre['actions'][0]['desc'] }}</p>
                                    @endif --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
