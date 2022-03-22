<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/sidenav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @yield('content-back')
    <script src="{{ asset('js/sidenav.js') }}"></script>
    <!-- Javascript files-->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- sidebar -->

</body>

</html>
