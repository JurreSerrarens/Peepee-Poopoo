<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/layout.css', '../resources/css/layout.css', 'resources/js/app.js'])
    @yield('css')
    @vite(['../resources/images/LEGOLAND_PARKS_LOGO.svg'])

    <title>App Name - @yield('title')</title>
</head>

<body>
    <!-- Header Menu -->
    <div class="menuBar">
        <div class="menuContainer">
            <a class="menuImage" href="{{url('home')}}">
                <img class="menuImage" src="{{ asset('../resources/images/LEGOLAND_PARKS_LOGO.svg') }}" >
            </a>
            <a class="menuItem" href="{{url('attracties')}}">Attracties</a>
            <a class="menuItem" href="{{url('tijden')}}">Openings Tijden</a>
            <a class="menuItem" href="{{url('tickets')}}">Tickets</a>
            <a class="menuItem" href="{{url('accomodations')}}">Accomodaties</a>
            <a class="menuItem" href="{{url('contact')}}">Contact</a>
        </div>
        @if (!Auth::guest())
            <a class="loginButt" href="{{url('dashboard')}}">HELLO MY NAME IS GHOST JOHNSON</a>
        @else
            <a class="loginButt" href="{{url('login')}}">Login you fat fuck</a>
        @endif
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
