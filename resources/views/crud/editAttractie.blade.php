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
    <h1 class="title">Edit Attractie</h1>
    <hr>
    <div class="subContainer">
        <!-- Introduction -->
        <form class="ticketForm" action="{{url('/putAttractie')}}/{{ $attractie->id}}" method="post">
            @csrf
            <div class="formCont">
                <label for="name">Name</label>
                <input name="name" type="text" placeholder="{{$attractie->name}}" value="{{$attractie->name}}">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="description">Description</label>
                <input name="description" type="text" placeholder="{{$attractie->description}}" value="{{$attractie->description}}">
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="type">Type</label>
                <input name="type" type="text" placeholder="{{$attractie->type}}" value="{{$attractie->type}}">
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="image">Image-Link</label>
                <input name="image" type="text" placeholder="{{$attractie->image}}" value="{{$attractie->image}}">
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <input name="submit" type="submit" value="bestellen">
            </div> 
        </form>
    </div>  
@endsection