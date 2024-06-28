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
    <hr>
    <div class="formContainer">
        <form class="bookingForm" action="{{url('/postBooking')}}" method="post">
            @csrf
            <div class="formCont">
                <label for="name">Name</label>
                <input name="name" type="text">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="email">Email</label>
                <input name="email" type="email">
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="accomodation_id">Accomodation</label>
                <select name="accomodation_id" id="accomodation">
                    @foreach($accomodations as $accomodation)
                        <option value="{{$accomodation->id}}">{{$accomodation->name}}</option>
                    @endforeach
                </select>
            </div>
            @error('accomodation_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="people">Aantal Personen</label>
                <input name="people" type="number">
            </div> 
            @error('people')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <input name="submit" type="submit" value="reserveren">
            </div> 
        </form>
    </div>
@endsection