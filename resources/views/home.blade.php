@extends('layout')

@section('css')
        @vite(['resources/css/home.css', '../resources/css/home.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("content")
    <h1 class="title">Welkom Bij Legoland™ Doetinchem</h1>
    <hr>
    <!-- Introduction -->
    <div class="subContainer">
        <h2>Wat is Legoland Doetinchem?</h2>
        <p>Legoland Doetinchem is de nederlands uitstekking van het beroemde Legoland temapark.</p>
    </div>
    
@endsection