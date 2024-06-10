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
    <h1 class="title">{{ Auth::user()->name }} used /ban</h1>
    <hr>
    <!-- Introduction -->
    <div class="subContainer">
        <h2>I am the mod son.</h2>
        <a href="{{url('/getUsers')}}">/ban</a><br><!-- users -->
        <a href="{{url('/getAttracties')}}">/fill</a><br><!-- attractions -->
        <a href="#">/setspawnpoint</a><br><!-- accomodations -->
        <br>
        <h2>Users</h2>
        <hr>
        <a href='newUser'>Add</a>
        <div class="subContainer">
            @foreach($users as $user)
            <div class="CrudObject CrudCont">
                <p>{{ $user->name }}</p>
                <a href='getUser/{{ $user->id}}'>Edit</a>
                <a href="deleteUser/{{ $user->id}}" >Delete</a>
            </div>
            @endforeach
        </div>

        <br><br>
        <a href="{{url('logout')}}">Logout</a>
    </div>
@endsection