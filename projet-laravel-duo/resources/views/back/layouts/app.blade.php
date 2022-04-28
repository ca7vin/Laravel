<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">M & C </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list p-0">
            <li>
                <a href="{{ route('services.index') }}">
                    <i class='bx bxs-hourglass-top'></i>
                    <span class="links_name">Services</span>
                </a>
                <span class="tooltip">Services</span>
            </li>
            <li>
                <a href="{{ route('courses.index') }}">
                    <i class='bx bx-spreadsheet'></i>
                    <span class="links_name">Courses</span>
                </a>
                <span class="tooltip">Courses</span>
            </li>
            <li>
                <a href="{{ route('testimonials.index') }}">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Testimonials</span>
                </a>
                <span class="tooltip">Testimonials</span>
            </li>
            <li>
                <a href="{{ route('banners.index') }}">
                    <i class='bx bxs-image'></i>
                    <span class="links_name">Banner</span>
                </a>
                <span class="tooltip">Banner</span>
            </li>
            <li>
                <a href="{{ route('contacts.index') }}">
                    <i class='bx bxs-contact' ></i>
                    <span class="links_name">Contacts</span>
                </a>
                <span class="tooltip">Contacts</span>
            </li>
            <li>
                <a href="{{ route('titles.index') }}">
                    <i class='bx bx-text'></i>
                    <span class="links_name">Titres</span>
                </a>
                <span class="tooltip">Titres</span>
            </li>
            <li>
                <a href="{{ route('users.index') }}">
                    <i class='bx bxs-user'></i>
                    <span class="links_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <div class="name_job">
                        <div class="name">M & C</div>
                        <div class="job">Coding School 22</div>
                    </div>
                </div>
                @auth
                    <form method='post' action="{{ route('logout') }}">
                        @csrf
                            <button><i class='bx bx-log-out' id="log_out"></i></button>
                    </form>
                @endauth
            </li>
        </ul>
    </div>
    <section class="home-section pt-5 position-relative overflow-hidden" style='height:100vh'>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="textGradient text-uppercase"><strong><u>Dashboard - @if(Auth::user()){{ Auth::user()->name . ' - #' . Auth::user()->id }}@endif</u></strong></h1>
            @yield('content')
        </div>
        <img class='imgAbsolute1' src="{{ asset("images/banner-left-dec.png") }}" alt="">
        <img class='imgAbsolute2' src="{{ asset("images/testimonials-right-dec.png") }}" alt="">
    </section>





    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>
