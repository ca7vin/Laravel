<section id='groupe' class='flex flex-col items-center justify-center px-5 mb-0 p-10 relative overflow-hidden'>
    <h2 class="text-3xl text-center text-red-900 font-bold uppercase mb-10 dividerTitle p-2 w-1/4">Groupe</h2>
    <div class="flex justify-around items-center">
        <img class='absolute groupBg' src="{{ asset('img/groupBg.jpg') }}" alt="">
        @foreach ($fiches as $fiche)
        <div class="flex flex-col justify-center items-center mx-3 z-10">
            <img class="mb-2" src="{{ asset('img/' . $fiche->avatar) }}" alt="">
            <span class='text-xl font-bold'>{{ $fiche->namePerso }}</span>
            <span class='text-lg'>{{ $fiche->class }} {{ $fiche->level }}</span>
        </div>
        @endforeach
    </div>
</section>
