@extends('layout')

@section('css')
        @vite(['resources/css/test.css', '../resources/css/home.css', 'resources/js/app.js'])
    <link
      rel="icon"
      href="https://media.tenor.com/j6HNDMU_fF4AAAAM/cow-dancing.gif"
    />
@endsection

@section("title")
    U did it gamer
@endsection

@section("content")
    <h1 class="title">Openings tijden voor Legoland™ Doetinchem</h1>
    <hr>
    <!-- Introduction -->
    <div class="subContainer">
        <h2>De openingstijden voor</h2>
        <p>Legoland Doetinchem is de nederlands uitstekking van het beroemde Legoland temapark.</p>
    </div>
    <div class="subContainer">
        <table>
            <tr>
                <th>Maandag</td>
                <td>8:30 - 20:00</td>
            </tr>
            <tr>
                <th>Dinsdag</td>
                <td>8:30 - 20:00</td>
            </tr>
            <tr>
                <th>Woensdag</td>
                <td>8:30 - 20:00</td>
            </tr>
            <tr>
                <th>Donderdag</td>
                <td>8:30 - 20:00</td>
            </tr>
            <tr>
                <th>Vrijdag</td>
                <td>8:30 - 20:00</td>
            </tr>
            <tr>
                <th>Zaterdag</td>
                <td>8:30 - 20:00</td>
            </tr>
            <tr>
                <th>Zondag</td>
                <td>8:30 - 20:00</td>
            </tr>
        </table> 
    </div>
    
@endsection