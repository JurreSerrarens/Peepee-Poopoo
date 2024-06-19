@extends('layout')

@section("title")
    /ban
@endsection


@section('css')
    @vite(['resources/css/home.css', 'resources/js/app.js', 'resources/js/crud.css'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />/
@endsection

@section('content')
    <h1 class="title">Add Accomodation</h1>
    <hr>
    <div class="subContainer">
        <!-- Introduction -->
        <form class="ticketForm" action="{{url('/addAccomodation')}}" method="post">
            @csrf
            <div class="formCont">
                <label for="name">Name</label>
                <input name="name" type="text">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="description">Description</label>
                <input name="description" type="text">
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="people">People</label>
                <input name="people" type="number">
            </div>
            @error('people')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="price">Price</label>
                <input name="price" type="number">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="image">Image-Link</label>
                <input name="image" type="text">
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