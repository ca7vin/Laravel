@extends('layouts/app')
@section('content')
    @include('partials/nav')
    @include('partials/header')
    <div class="container p-0">
        <div class="row d-flex p-0 m-0">
            <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center p-0 m-0 pe-md-2 mb-md-0 mb-3">
                <div class="img1 d-flex align-items-center justify-content-center p-0">
                    <span class="fs-1 text-secondary">750 x 450</span>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column align-items-start justify-content-center p-0 m-0 ps-2">
                <h2 class='fw-bold'>About modern school</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores quasi illum tenetur reprehenderit eos aperiam dolor dignissimos neque dolorem quos, ut exercitationem labore quam minus!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolorum aut, mollitia repellat, quo similique sint doloribus sunt facilis architecto autem? Beatae sint veritatis iusto harum magni laudantium officia neque!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea voluptatibus incidunt aliquid pariatur deleniti vel nemo ut fugit eveniet excepturi!</p>
            </div>
        </div>
    </div>
    @include('partials/footer')
@endsection