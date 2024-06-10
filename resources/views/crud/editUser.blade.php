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
    <h1 class="title">Edit User}</h1>
    <hr>
    <!-- Introduction -->
    <form class="ticketForm" action="{{url('/putUser')}}/{{ $user->id}}" method="post">
        @csrf
        <div class="formCont">
            <label for="name">Name</label>
            <input name="name" type="text" placeholder="{{$user->name}}" value="{{$user->name}}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="formCont">
            <label for="email">Email</label>
            <input name="email" type="email" placeholder="{{$user->email}}" value="{{$user->email}}">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="formCont">
            <input name="submit" type="submit" value="bestellen">
        </div> 
    </form>
@endsection