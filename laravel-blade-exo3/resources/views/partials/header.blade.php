<div class="container mt-3 p-0">
    <?php
    if ( url()->current() === "http://127.0.0.1:8000")
        $subHeading = "Welcome";
    if ( url()->current() === "http://127.0.0.1:8000/pages/about")
         $subHeading = "About";
    if ( url()->current() === "http://127.0.0.1:8000/pages/services")
         $subHeading = "Services";
    ?>

    <h2 class='ms-3 ms-md-0'>{{ $subHeading }} Subheading</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb rounded p-2">
            @if (url()->current() === 'http://127.0.0.1:8000')
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Welcome</li>
            @endif
            @if (url()->current() === 'http://127.0.0.1:8000/pages/about')
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            @endif
            @if (url()->current() === 'http://127.0.0.1:8000/pages/services')
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            @endif
        </ol>
    </nav>
</div>
