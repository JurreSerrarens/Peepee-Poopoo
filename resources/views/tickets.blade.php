@extends('layout')

@section('css')
        @vite(['resources/css/test.css', '../resources/css/home.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("content")
    <h1 class="title">Tickets</h1>
    <hr>
    <!-- Introduction -->
    @foreach($tickets as $ticket)
        <div class="subContainer">
            <h2>{{ $ticket->name }}</h2>
            <p>{{ $ticket->price }}</p>
            <a href="{{url('order')}}">Koop nu!</a>
        </div>
    @endforeach
    
    
@endsection