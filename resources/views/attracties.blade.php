@extends('layout')

@section('css')
        @vite(['resources/css/attracties.css', '../resources/css/home.css', '../resources/css/attractie.css', 'resources/js/app.js'])
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
            <td><a href="attractie/{{ $attractie->id }}" class="btn btn-info">View</a></td>
        </div>
        @endforeach
    </div>
@endsection