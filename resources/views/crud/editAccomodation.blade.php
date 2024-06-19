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
    <h1 class="title">Edit Accomodation</h1>
    <hr>
    <div class="subContainer">
        <!-- Introduction -->
        <form class="ticketForm" action="{{url('/putAccomodation')}}/{{ $accomodation->id}}" method="post">
            @csrf
            <div class="formCont">
                <label for="name">Name</label>
                <input name="name" type="text" placeholder="{{$accomodation->name}}" value="{{$accomodation->name}}">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="description">Description</label>
                <input name="description" type="text" placeholder="{{$accomodation->description}}" value="{{$accomodation->description}}">
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="people">People</label>
                <input name="people" type="number" placeholder="{{$accomodation->people}}" value="{{$accomodation->people}}">
            </div>
            @error('people')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="price">Price</label>
                <input name="price" type="number" placeholder="{{$accomodation->price}}" value="{{$accomodation->price}}">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="formCont">
                <label for="image">Image-Link</label>
                <input name="image" type="text" placeholder="{{$accomodation->image}}" value="{{$accomodation->image}}">
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