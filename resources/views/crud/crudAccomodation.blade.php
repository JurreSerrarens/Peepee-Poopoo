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
    <h1 class="title">Accomodations</h1>
    <hr>
    <!-- Introduction -->
    <div class="subContainer">
        <a href="{{url('/getUsers')}}">Users</a><br><!-- users -->
        <a href="{{url('/getAttracties')}}">Attracties</a><br><!-- attractions -->
        <a href="{{url('/getAccomodations')}}">Accomodaties</a><br><!-- accomodations -->
        <br>
        <h2>Accomodations</h2>
        <hr>
        <a href='newAccomodation'>Add</a>
        <div class="subContainer">
            @foreach($accomodations as $accomodation)
            <div class="CrudObject CrudCont">
                <p>{{ $accomodation->name }}</p>
                <a href='getAccomodation/{{ $accomodation->id}}'>Edit</a>
                <a href="deleteAccomodation/{{ $accomodation->id}}" >Delete</a>
            </div>
            @endforeach
        </div>

        <br><br>
        <a href="{{url('logout')}}">Logout</a>
    </div>
@endsection