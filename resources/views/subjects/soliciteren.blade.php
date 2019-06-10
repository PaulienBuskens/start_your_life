@extends('layouts.app')

@section('content')
<div class="sidenav" id="menuToggle">
        <input type="checkbox">

        <span></span>
        <span></span>
        <span></span>
        
        
        <ul id="menu">
        <a href="/">
            <img src="{{ asset('images/rebrand/grandmother.png')}}" alt="ask grandmother">
        </a>
            <a href="/practice">
                <li>Post Vraag</li>
            </a>
            <a href="/onderwerpen">
                <li>Info per categorie</li>
            </a>
            <a href="/categorien">
                <li>Vragen per categorie</li>
            </a>
            <a href="/categorien">
                <li>Help andere</li>
            </a>
        </ul>
    </div>
    <div class="onderwerp__onderwerp">
        <h1>Solliciteren</h1>
        <div class="blok__onderwerp">
            <h3>Voorbereiding</h3>
            <p>Je kan je op verschillende manieren voorbereiden op een sollicitatie, hier vindt je enkele van de voornaamste. </p>
            <h4>Enkele standaard vragen</h4>
            <ul>
                <li>Wat zijn je sterktes en zwaktes?</li>
                <li>Waar zie je jezelf in 5 jaar?</li>
                <li>Wat motiveert jou?</li>
                <li>Wat zijn je hobby's</li>
                <li>Heb jij nog vragen voor ons?</li>
                <li>Hoe zou iemand in je dichte omgeving jou omschrijven?</li>
            </ul>
            <h4>Informatie opzoeken over het bedrijf</h4>
            <p>Het is altijd goed om vooraf informatie op te zoeken over het bedrijf zoals vorige projecten, wie is de CEO, waarom wil ik hier komen werken, ligging,...</p>
           
        </div>
        <div class="blok__onderwerp">
            <h3>Gesprek zelf</h3>
            <ul>
                <li>Zie dat je zeker op tijd komt, minstens 10 min voor je afspraak.</li>
                <li>Wees beleefd en vriendelijk tegen iedereen die je tegenkomt.</li>
                <li>Blijf jezelf.</li>
                <li>Zie dat je niet ligt te spelen met een pen of papier en zit rechtop.</li>
                <li>Stel zelf ook vragen.</li>
            </ul>
            
            
        </div>           
    </div>
@endsection
