@extends('layout')

@section("title")
    /ban
@endsection


@section('css')
    @vite(['resources/css/home.css', '../resources/css/crud.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section('content')
    <h1 class="title">Accomodaties</h1>
    <hr>
    <!-- Introduction -->
    <div class="subContainer">
        <p>
        <a href="#">/ban</p><!-- users -->
        <a href="#">/fill</p><!-- attractions -->
        <a href="#">/setspawnpoint</p><!-- accomodations -->
        <br>

        <img alt="Christianity" src="https://media1.tenor.com/m/fvsDY-gIMYsAAAAd/minecraft-meme.gif">
        <br><br>
        <a href="{{url('logout')}}">Logout</a>
    </div>
@endsection