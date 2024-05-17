@extends('layout')

@section('css')
    <link href="{{ asset('../resources/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('../resources/css/attractieDetail.css') }}" rel="stylesheet">
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
<div class="attractieDetail">
    <img src="" alt="attractie image" class="image">
    <div class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eum adipisci qui officiis deserunt nemo expedita, sunt doloremque aliquid laborum, quas inventore consequatur illo quis reiciendis optio voluptate exercitationem pariatur!</div>
</div>
@endsection