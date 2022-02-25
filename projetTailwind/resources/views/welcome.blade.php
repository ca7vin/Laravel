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
    <header>
        <nav class='py-5 bg-black'>
            <ul class="flex flex-row items-center justify-around px-64 transition-opacity duration-300">
                <li class="text-yellow-600 uppercase hover:font-bold">link 1</li>
                <li class="text-yellow-600 uppercase hover:font-bold">link 2</li>
                <li class="text-yellow-600 uppercase hover:font-bold">link 3</li>
                <li class="text-yellow-600 uppercase hover:font-bold">link 4</li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="columns-xl flex flex-col justify-center items-center bg-yellow-600 p-64">
            <h1 class="text-black uppercase text-9xl animate-bounce">CS22</h1>
            <h6 class="text-black uppercase text-2xl tracking-widerst">Menu maxi best-off</h6>
        </div>
        <div class="container p-10 bg-black">

          <h2 class="uppercase text-yellow-600 font-bold text-4xl text-center pb-10">PROJETS</h2>

            <div class="columns-4">

                <div class="card container flex flex-col items-center justify-center bg-yellow-600 rounded-lg hover:animate-pulse">

                    <h5 class="text-black font-bold uppercase py-5">Titre objet</h5>
                    <img class="rounded-3xl px-3" src="{{ asset('img/img1.png') }}" alt="">
                    <p class="text-black text-sm lightP p-3 tracking-wider">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id aut aspernatur pariatur, aperiam odit amet culpa expedita obcaecati nam
                        asperiores eum odio quam quo beatae.</p>

                </div>
                <div class="card container flex flex-col items-center justify-center bg-yellow-600 rounded-lg hover:animate-pulse">

                    <h5 class="text-black font-bold uppercase py-5">Titre objet</h5>
                    <img class="rounded-3xl px-3" src="{{ asset('img/img1.png') }}" alt="">
                    <p class="text-black text-sm lightP p-3 tracking-wider">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id aut aspernatur pariatur, aperiam odit amet culpa expedita obcaecati nam
                        asperiores eum odio quam quo beatae.</p>

                </div>
                <div class="card container flex flex-col items-center justify-center bg-yellow-600 rounded-lg hover:animate-pulse">

                    <h5 class="text-black font-bold uppercase py-5">Titre objet</h5>
                    <img class="rounded-3xl px-3" src="{{ asset('img/img1.png') }}" alt="">
                    <p class="text-black text-sm lightP p-3 tracking-wider">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id aut aspernatur pariatur, aperiam odit amet culpa expedita obcaecati nam
                        asperiores eum odio quam quo beatae.</p>

                </div>
                <div class="card container flex flex-col items-center justify-center bg-yellow-600 rounded-lg hover:animate-pulse">

                    <h5 class="text-black font-bold uppercase py-5">Titre objet</h5>
                    <img class="rounded-3xl px-3" src="{{ asset('img/img1.png') }}" alt="">
                    <p class="text-black text-sm lightP p-3 tracking-wider">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id aut aspernatur pariatur, aperiam odit amet culpa expedita obcaecati nam
                        asperiores eum odio quam quo beatae.</p>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
