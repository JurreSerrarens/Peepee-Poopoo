@extends('layout')

@section("title")
    Gamemode 1
@endsection


@section('css')
    @vite(['resources/css/home.css', '../resources/css/crud.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section('content')
    <h1 class="title">Welkom {{ Auth::user()->name }}</h1>
    <hr>
    <!-- Introduction -->
    <div class="subContainer">
        <a href="{{url('/getUsers')}}">Users</a><br><br><!-- users -->
        <a href="{{url('/getAttracties')}}">Attracties</a><br><br><!-- attractions -->
        <a href="#">Accomodaties</a><br><!-- accomodations -->
        <br><br>
        <a href="{{url('logout')}}">Logout</a>
    </div>
@endsection