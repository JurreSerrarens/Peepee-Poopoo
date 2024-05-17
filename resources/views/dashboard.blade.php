@extends('layout')

@section('css')
    <link href="{{ asset('../resources/css/home.css') }}" rel="stylesheet">
        @vite(['resources/css/home.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    Dashboard
@endsection

@section('content')
    <h1>Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}</p>
    <a href="{{url('logout')}}">Logout</a>
@endsection