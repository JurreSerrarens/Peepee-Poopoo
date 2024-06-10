@extends('layout')

@section("title")
    /ban
@endsection


@section('css')
    <link href="{{ asset('../resources/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('../resources/css/crud.css') }}" rel="stylesheet">
        @vite(['resources/css/home.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />/
@endsection

@section('content')
    <h1 class="title">Attracties</h1>
    <hr>
    <!-- Introduction -->
    <div class="subContainer">
        <a href="{{url('/getUsers')}}">Users</a><br><!-- users -->
        <a href="{{url('/getAttracties')}}">Attracties</a><br><!-- attractions -->
        <a href="#">Accomodaties</a><br><!-- accomodations -->
        <br>
        <h2>Attracties</h2>
        <hr>
        <a href='newAttractie'>Add</a>
        <div class="subContainer">
            @foreach($attracties as $attractie)
            <div class="CrudObject CrudCont">
                <p>{{ $attractie->name }}</p>
                <a href='getAttractie/{{ $attractie->id}}'>Edit</a>
                <a href="deleteAttractie/{{ $attractie->id}}" >Delete</a>
            </div>
            @endforeach
        </div>

        <br><br>
        <a href="{{url('logout')}}">Logout</a>
    </div>
@endsection