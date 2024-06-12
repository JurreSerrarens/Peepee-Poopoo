@extends('layout')

@section('css')
        @vite(['resources/css/contact.css', '../resources/css/home.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("content")
    <h1 class="title">Contact opgenomen u hoort van ons terug!</h1>
    <div class="homeLinkCont">
        <a class="homeLink" href="http://localhost/LegoLandDoetinchem/public/home">Terug naar start pagina</a>
    </div>
@endsection