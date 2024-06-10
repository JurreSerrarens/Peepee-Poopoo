@extends('layout')

@section('css')
<link href="{{ asset('../resources/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('../resources/css/attractie.css') }}" rel="stylesheet">
        @vite(['resources/css/attracties.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("content")
    <h1 class="title">Attracties</h1>
    <hr>
    <!-- Introduction -->
    <div class="attractieContainer">
    @foreach($attracties as $attractie)
        <div class="subContainer">
            <img class="image" src="{{$attractie->image}}">
            <h2>{{ $attractie->name }}</h2>
            <h3>{{ $attractie->type}}</h3>
            <p> {{ $attractie->description}}</p>
        </div>
        @endforeach
    </div>
@endsection