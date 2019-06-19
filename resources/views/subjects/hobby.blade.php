@extends('layouts.app')

@section('content')

<a href="/">
    <h1>Start Your Life</h1>
</a>
<div class="band">
    <h2>Hobby's </h2>
    <p>In deze sectie vind je verschillende mogelijke hobby's.</p>
</div> 
    <div class="onderwerp__onderwerp">
        <div class="blok__onderwerp">
            <a href="/hobby1">
                <h3>Sportclubs</h3>
                <p>Sportclubs zijn altijd handig en leuk als je een vaste dag in de week kan vrijmaken.</p>
            </a>
        </div>
        <div class="blok__onderwerp">
            <a href="/hobby2">
                <h3>Fitnesses</h3>
                <p>Indien je geen vaste moment kan vrijmaken om te sporten is de fitness heel handig.</p>
            </a>
        </div>
        <div class="blok__onderwerp blok__extra">
            <a href="/category/5">
                <h3>Bekijk vragen van andere gebruikers</h3>
                <p><br></p>
            </a>
        </div> 
        <div class="blok__onderwerp blok__onderwerp__small">
            <a href="/hobby3">
                <h3>Vrijwilligers werk</h3>
                <p>Geen zin in sport maar wel om mensen te helpen?</p>
            </a>
        </div>                  
    </div>
@endsection
