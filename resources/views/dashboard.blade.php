@extends('layout')

@section("title")
    Gamemode 1
@endsection


@section('css')
    <link href="{{ asset('../resources/css/home.css') }}" rel="stylesheet">
        @vite(['resources/css/home.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section('content')
    <h1 class="title">{{ Auth::user()->name }}'s gamemode was set to creative</h1>
    <hr>
    <!-- Introduction -->
    <div class="subContainer">
        <h2>I am the mod son.</h2>
        <br>
        <a href="{{url('/getUsers')}}">/ban</p><!-- users -->
        <a href="{{url('/getAttracties')}}">/fill</p><!-- attractions -->
        <a href="#">/setspawnpoint</p><!-- accomodations -->
        <br>
        <a href="{{url('logout')}}">Logout</a>
        <br><br>
        <img alt="Christianity" src="https://media1.tenor.com/m/fvsDY-gIMYsAAAAd/minecraft-meme.gif">
    </div>
@endsection