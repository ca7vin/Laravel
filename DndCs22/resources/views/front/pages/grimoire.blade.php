@extends('front/layouts/app')
@section('content')
    @include('front/partials/navbar')
<section id='Grimoire' class=' flex justify-center items-center m-10'>
    <div class="flex flex-col items-center justify-center">
        @foreach ($spells as $spell)
            
        <div class="max-w-sm w-full lg:max-w-full lg:flex">
            <div class=" border-b border-gray-400 lg:border-l-0 lg:border-gray-400 bg-white p-4 flex flex-col justify-between leading-normal">
              <div class="mb-8">
                <p class="text-sm text-gray-600 flex items-center">
                  {{ $spell['school'] }}
                </p>
                <div class="text-gray-900 font-bold text-xl mb-2">{{ $spell['name'] }}</div>
                <p class="text-gray-700 text-base">{{ $spell['desc'] }}</p>
              </div>
              <div class="flex items-center">
                <div class="text-sm">
                  <p class="text-gray-900 leading-none">{{ $spell['dnd_class'] }}</p>
                  <p class="text-gray-600">{{ $spell['level'] }}</p>
                </div>
              </div>
            </div>
          </div>

        @endforeach
    </div>
</section>
    

    
@endsection
