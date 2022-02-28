<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container">
      <header class=''>
        <nav class='py-5 bg-yellow-600'>
            <ul class="flex flex-row items-center justify-around px-0 xl:px-64 transition-opacity duration-300">
                <li class="uppercase hover:font-bold"><a href="#projetId" class="text-black">Projets</a></li>
                <li class="uppercase hover:font-bold"><a href="#classe" class="text-black">Classe</a></li>
                <li class="uppercase hover:font-bold"><a href="" class="text-black">Contact</a></li>
            </ul>
        </nav>
    </header>
    </div>
    <div class="container">
        <div id='banner' class="columns-xl flex flex-col justify-center items-center">
            <h1 class="text-yellow-600 uppercase text-9xl animate-bounce">CS22</h1>
            <h6 class="text-yellow-600 uppercase text-2xl tracking-widerst">Menu maxi best-off</h6>
            <button class="rounded-full bg-yellow-600 mt-10 px-5 py-2 animate-ping-slow"><a href=""
                    class="text-black uppercase">Discover us</a></button>
        </div>
        {{-- PROJETS --}}
        <div id='projetId' class="container p-10 bg-black">

            <h2 class="uppercase text-yellow-600 font-bold text-4xl text-center pb-10">PROJETS</h2>

            <div class="columns lg:columns-4">

                <div class="card container flex flex-col items-center justify-center bg-yellow-600 rounded-lg mb-3 lg:mb-0">

                    <h5 class="text-black font-bold uppercase py-5">Titre objet</h5>
                    <img class="px-3" src="{{ asset('img/img1.png') }}" alt="">
                    <p class="text-black text-sm lightP p-3 tracking-wider">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id aut aspernatur pariatur, aperiam odit amet culpa expedita obcaecati nam
                        asperiores eum odio quam quo beatae.</p>
                    <button class="rounded-full bg-black px-5 py-2 mb-3"><a href=""
                            class="text-yellow-600 uppercase hover:animate-pulse">about</a></button>

                </div>
                <div class="card container flex flex-col items-center justify-center bg-yellow-600 rounded-lg mb-3 lg:mb-0">

                    <h5 class="text-black font-bold uppercase py-5">Titre objet</h5>
                    <img class="px-3" src="{{ asset('img/img1.png') }}" alt="">
                    <p class="text-black text-sm lightP p-3 tracking-wider">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id aut aspernatur pariatur, aperiam odit amet culpa expedita obcaecati nam
                        asperiores eum odio quam quo beatae.</p>
                    <button class="rounded-full bg-black px-5 py-2 mb-3"><a href=""
                            class="text-yellow-600 uppercase hover:animate-pulse">about</a></button>

                </div>
                <div class="card container flex flex-col items-center justify-center bg-yellow-600 rounded-lg mb-3 lg:mb-0">

                    <h5 class="text-black font-bold uppercase py-5">Titre objet</h5>
                    <img class="px-3" src="{{ asset('img/img1.png') }}" alt="">
                    <p class="text-black text-sm lightP p-3 tracking-wider">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id aut aspernatur pariatur, aperiam odit amet culpa expedita obcaecati nam
                        asperiores eum odio quam quo beatae.</p>
                    <button class="rounded-full bg-black px-5 py-2 mb-3"><a href=""
                            class="text-yellow-600 uppercase hover:animate-pulse">about</a></button>

                </div>
                <div class="card container flex flex-col items-center justify-center bg-yellow-600 rounded-lg mb-3 lg:mb-0">

                    <h5 class="text-black font-bold uppercase py-5">Titre objet</h5>
                    <img class="px-3" src="{{ asset('img/img1.png') }}" alt="">
                    <p class="text-black text-sm lightP p-3 tracking-wider">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id aut aspernatur pariatur, aperiam odit amet culpa expedita obcaecati nam
                        asperiores eum odio quam quo beatae.</p>
                    <button class="rounded-full bg-black px-5 py-2 mb-3"><a href=""
                            class="text-yellow-600 uppercase hover:animate-pulse">about</a></button>

                </div>
            </div>
        </div>
        {{-- FIN PROJET --}}
        {{-- CLASSE --}}
        <div id="classe" class="container p-10">
          <h2 class="uppercase text-yellow-600 font-bold text-4xl text-center pb-10">CLASSE</h2>
            <div class="columns lg:columns-5 gap-x-20">
                <div class="container flex flex-col items-center justify-center mb-5 lg:mb-0">
                  <img src="{{ asset('img/profile.png') }}" class='rounded-full border-orange-700 border-8 mb-2' alt="">
                  <h5 class="text-yellow-600 uppercase">Eleve 1</h5>
                </div>
                <div class="container flex flex-col items-center justify-center mb-5 lg:mb-0">
                  <img src="{{ asset('img/profile.png') }}" class='rounded-full border-orange-700 border-8 mb-2' alt="">
                  <h5 class="text-yellow-600 uppercase">Eleve 1</h5>
                </div>
                <div class="container flex flex-col items-center justify-center mb-5 lg:mb-0">
                  <img src="{{ asset('img/profile.png') }}" class='rounded-full border-orange-700 border-8 mb-2' alt="">
                  <h5 class="text-yellow-600 uppercase">Eleve 1</h5>
                </div>
                <div class="container flex flex-col items-center justify-center mb-5 lg:mb-0">
                  <img src="{{ asset('img/profile.png') }}" class='rounded-full border-orange-700 border-8 mb-2' alt="">
                  <h5 class="text-yellow-600 uppercase">Eleve 1</h5>
                </div>
                <div class="container flex flex-col items-center justify-center mb-5 lg:mb-0">
                  <img src="{{ asset('img/profile.png') }}" class='rounded-full border-orange-700 border-8 mb-2' alt="">
                  <h5 class="text-yellow-600 uppercase">Eleve 1</h5>
                </div>
            </div>
            <div class="bg-red-500 columns-5 flex items-center justify-around">
                <i class="fa-brands fa-laravel fa-5x"></i>
            </div>
        </div>
        {{-- FIN CLASSE --}}
    </div>
</body>

</html>
