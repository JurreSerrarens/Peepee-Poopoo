@extends('layout')

@section('css')
    <link href="{{ asset('../resources/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('../resources/css/attractieDetail.css') }}" rel="stylesheet">
        @vite(['resources/css/contact.css', 'resources/js/app.js'])
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
                <img class="image"alt="attractie image"  src="{{$attractie->image}}">
                <h2>{{ $attractie->name }}</h2>
                <div class="info"><p> {{ $attractie->description}}</p></div>
        </div>
@endsection