<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('../resources/css/layout.css') }}" rel="stylesheet">
    @vite(['resources/css/layout.css', 'resources/js/app.js'])
    @yield('css')

    <title>App Name - @yield('title')</title>
</head>

<body>
    <!-- Header Menu -->
    <div class="menuBar">
        <div class="menuContainer">
            <a class="menuItem" href="http://localhost/LegoLandDoetinchem/public/attracties">Attracties</a>
            <a class="menuItem" href="http://localhost/LegoLandDoetinchem/public/tijden">Openings Tijden</a>
            <a class="menuImage" href="http://localhost/LegoLandDoetinchem/public/home">
                <img class="menuImage" src="{{ asset('../resources/images/LEGOLAND_PARKS_LOGO.svg') }}" >
            </a>
            <a class="menuItem" href="http://localhost/LegoLandDoetinchem/public/tickets">Tickets</a>
            <a class="menuItem" href="http://localhost/LegoLandDoetinchem/public/contact">Contact</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="mainContainer">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        @yield('footer')
    </div>
</body>

</html>
