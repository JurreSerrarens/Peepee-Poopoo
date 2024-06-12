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
    <h1 class="title">Attracties</h1>
    <hr>
    <!-- Introduction -->
    <div class="subContainer">
        <a href="{{url('/getUsers')}}">Users</a><br><!-- users -->
        <a href="{{url('/getAttracties')}}">Attracties</a><br><!-- attractions -->
        <a href="#">Accomodaties</a><br><!-- accomodations -->
        <br>
    </div>
    <div class="subContainer CrudCont">
        <h2>Attracties</h2>
        <a href='newAttractie'>Add</a>
        <hr class="fullHr">
        @foreach($attracties as $attractie)
        <div class="CrudObject">
            <p>{{ $attractie->name }}</p>
            <div class="CrudOptions">
                <a href='getAttractie/{{ $attractie->id}}'>Edit</a>
                <a href="deleteAttractie/{{ $attractie->id}}" >Delete</a>
            </div>  
        </div>
        @endforeach
        <hr class="fullHr">

        <br>
        <a href="{{url('logout')}}">Logout</a>
    </div>
@endsection