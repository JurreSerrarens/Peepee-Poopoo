@extends('layout')

@section('css')
    <link href="{{ asset('../resources/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('../resources/css/confirmation.css') }}" rel="stylesheet">
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("content")
    <h1 class="title">Uw tickets zijn besteld!</h1>
    <div class="homeLinkCont">
        <a class="homeLink" href="http://localhost/LegoLandDoetinchem/public/home">Terug naar start pagina</a>
    </div>
@endsection