@extends('layout')

@section('css')
    <link href="{{ asset('../resources/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('../resources/css/contact.css') }}" rel="stylesheet">
        @vite(['resources/css/contact.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("content")
    <h1 class="title">Contact opnemen</h1>
    <hr>
    <div class="subContainer">
        <h2>Vragen</h2>
        <p>+31 0669696969</p>
        <a href="#">support.doetinchem@legoland.company</a>
    </div>
    <div class="subContainer">
        <h2>Buisiness</h2>
        <p>+31 0669696420</p>
        <a href="#">buisiness.doetinchem@legoland.company</a>
    </div>
    
    <div class="subContainer">
        <h2>Direct vragen?</h2>
        <form class="ticketForm" action="{{url('/postContact')}}" method="post">
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
                <label for="question">What's your question?</label>
                <input name="question" type="text">
            </div>
            @error('question')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <input name="submit" type="submit" value="versturen">
            </div> 
        </form>
    </div>
    
    
@endsection