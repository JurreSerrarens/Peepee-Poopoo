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
    Login
@endsection

@section('content')
    <h1>Login</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required autofocus>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
@endsection
