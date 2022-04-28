<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="{{ asset('/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/templatemo-eduwell-style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/owl.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lightbox.css') }}">    

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
    {{-- <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body> --}}
    <body>
        @yield('content')
        <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
        <script src="{{ asset('/js/isotope.min.js') }}"></script>
        <script src="{{ asset('/js/owl-carousel.js') }}"></script>
        <script src="{{ asset('/js/lightbox.js') }}"></script>
        <script src="{{ asset('/js/tabs.js') }}"></script>
        <script src="{{ asset('/js/video.js') }}"></script>
        <script src="{{ asset('/js/slick-slider.js') }}"></script>
        <script src="{{ asset('/js/custom.js') }}"></script>
        <script>
            //according to loftblog tut
            $('.nav li:first').addClass('active');
    
            var showSection = function showSection(section, isAnimate) {
              var
              direction = section.replace(/#/, ''),
              reqSection = $('.section').filter('[data-section="' + direction + '"]'),
              reqSectionPos = reqSection.offset().top - 0;
    
              if (isAnimate) {
                $('body, html').animate({
                  scrollTop: reqSectionPos },
                800);
              } else {
                $('body, html').scrollTop(reqSectionPos);
              }
    
            };
    
            var checkSection = function checkSection() {
              $('.section').each(function () {
                var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                  var
                  currentId = $this.data('section'),
                  reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                  reqLink.closest('li').addClass('active').
                  siblings().removeClass('active');
                }
              });
            };
    
            $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
              e.preventDefault();
              showSection($(this).attr('href'), true);
            });
    
            $(window).scroll(function () {
              checkSection();
            });
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
