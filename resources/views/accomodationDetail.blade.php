@extends('layout')

@section('css')
        @vite(['resources/css/contact.css', '../resources/css/home.css', '../resources/css/attractieDetail.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("content")
        <div class="attractieDetail">
                <img class="image"alt="attractie image"  src="{{$accomodation->image}}">
                <h2>{{ $accomodation->name }}</h2>
                <div class="info"><p> {{ $accomodation->description}}</p></div>
        </div>
@endsection