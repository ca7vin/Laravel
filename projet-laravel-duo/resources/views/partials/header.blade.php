<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{ asset('/images/templatemo-eduwell.png') }}" alt="EduWell Template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#services">Services</a></li>
                        <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                        <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li>
                        <li class="scroll-to-section"><a href="#contact-section">Contact Us</a></li>
                        @if (Route::has('login'))
                            <li class="has-sub">
                                <a href="javascript:void(0)">My Account</a>
                                <ul class="sub-menu">
                                    @auth
                                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                        <li><a href=""><form method='post' action="{{ route('logout') }}">
                                            @csrf
                                            <button class="bg-transparent border-0">Log out</button>
                                        </form></a></li>
                                    @else
                                        <li><a href="{{ route('login') }}">Log in</a></li>
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                                </ul>
                            </li>
                        @endif
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
