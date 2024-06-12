@extends('layout')

@section('css')
        @vite(['resources/css/test.css', '../resources/css/test.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("footer")
    <audio autoplay display="none">
        <source src="https://cdn.discordapp.com/attachments/1121421825595940897/1210560118123397150/HappyHappy.mp3?ex=65eb00f7&is=65d88bf7&hm=a6edf52771f9eb5cce4b215bd551bf2e81d8ebb900a7771bc2ae1e5f1d4402f8&" type="audio/ogg" autoplay>
    </audio>
@endsection

@section("content")
    <h1>Hello, my name is ghost johnson</h1>
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F64.media.tumblr.com%2F4f41d96967694aae9f7585e7efd1e8ca%2Ff40442872ae8b83c-37%2Fs400x600%2F78b368813035750a0ac48840aec0a9aafbd00581.gifv&f=1&nofb=1&ipt=a155bc76a66686e6fec1646bb2465d4d6634585c34f3a9b42ccf013123ef5960&ipo=images">
@endsection