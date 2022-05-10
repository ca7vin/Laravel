    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src={{ asset('images/logo.png') }} alt="Chain App Dev">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#newsletter">Newsletter</a></li>
                            <li>
                                @if (Route::has('login'))
                                    @auth
                                <li>
                                    <div class="gradient-button">
                                        <a href="{{ route('dashboard') }}"><i class="fa fa-sign-in-alt"></i> Dashboard</a>
                                    </div>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method='post'>
                                        @csrf
                                        @method('POST')
                                        <div class="gradient-button">
                                            <button class="p-0" type='submit' style="border: none !important; height: 40px !important;"><i class="fa fa-sign-in-alt"></i> Logout</button>
                                        </div>
                                    </form>
                                </li>
                            @else
                                <li>
                                    <div class="gradient-button">
                                        <a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In
                                            Now</a>
                                    </div>
                                </li>
                            @endauth
                            @endif
                            </li>
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
