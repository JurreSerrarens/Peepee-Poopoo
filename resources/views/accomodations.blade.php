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
    <h1 class="title">Accomodaties</h1>
    <hr>
    <!-- Introduction -->
    <div class="attractieContainer">
    @foreach( $accomodations as  $accomodation)
        <div class="subContainer">
            <img class="image" src="{{ $accomodation->image}}">
            <h2>{{  $accomodation->name }}</h2>
            <h3>{{  $accomodation->type}}</h3>
            <p> {{  $accomodation->description}}</p>
            <td><a href="accomodation/{{  $accomodation->id }}" class="btn btn-info">View</a></td>
        </div>
        @endforeach
    </div>
@endsection