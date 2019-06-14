@extends('layouts.app')

@section('content')

<a href="/">
    <h1>Start Your Life</h1>
</a>
<div class="band">
    <h2>Vervoer</h2>
    <p>In deze sectie vind je verschillende manieren om je te verplaatsen.</p>
</div> 
    <div class="onderwerp__onderwerp">
        <div class="blok__onderwerp">
            <a href="/vervoer1">
                <h3>Auto</h3>
                <p>Een auto is een zeer handig vervoersmiddel doordat je altijd kan vertrekken.</p>
            </a>
        </div>
        <div class="blok__onderwerp">
            <a href="/vervoer2">
                <h3>Fietsen</h3>
                <p>Een fiets is handig voor kortere of middellange afstanden.</p>
            </a>
        </div>
        <div class="blok__onderwerp">
            <a href="/category/4">
            <h3>Bekijk vragen van andere gebruikers</h3>
            <p><br></p>
            </a>
        </div> 
        <div class="blok__onderwerp blok__onderwerp__small">
            <a href="/vervoer3">
                <h3>Openbaar vervoer</h3>
                <p>Hier vind je informatie over de bus, de tram en de trein.</p>
            </a>
        </div>                  
    </div>
@endsection
