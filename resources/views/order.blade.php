@extends('layout')

@section('css')
    <link href="{{ asset('../resources/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('../resources/css/order.css') }}" rel="stylesheet">
        @vite(['resources/css/order.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("content")
    <h1 class="title">Tickets bestellen</h1>
    <hr>
    <!-- Introduction -->
    <form class="ticketForm" action="{{url('/postOrder')}}" method="post">
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
            <label for="ticket_id">Ticket</label>
            <select name="ticket_id" id="ticket">
                @foreach($tickets as $ticket)
                    <option value="{{$ticket->id}}">{{$ticket->name}}</option>
                @endforeach
            </select>
        </div>
        @error('ticket_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="formCont">
            <label for="amount">Hoeveelheid</label>
            <input name="amount" type="number">
        </div> 
        @error('amount')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="formCont">
            <input name="submit" type="submit" value="bestellen">
        </div> 
    </form>
@endsection