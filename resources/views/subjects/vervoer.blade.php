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
        <h1>Vervoer</h1>
        <div class="blok__onderwerp">
            <h3>Auto</h3>
            <p>Een auto is een zeer handig vervoersmiddel doordat je kunt vertrekken wanneer je wilt, je kan mensen meenemen en je kan gemakkelijk bagage meepakken.
                <br>Wanneer je beslist om een auto te kopen moet je rekening houden met het feit dat je een autoverzekering moet afsluiten, de auto moet inschrijven, brandstof betalen en plaats moet hebben om de auto weg te zetten.
            </p>
        </div>
        <div class="blok__onderwerp">
            <h3>Fiets</h3>
            <h4>Eigen fiets</h4>
            <p>Een fiets is handig voor kortere of middellange afstanden en vindt je al voor kleinere bedragen. Hou er wel rekening mee dat je zichtbaar blijft voor andere bestuurders als het donker wordt. 
                Er worden altijd veel fietsen tweedehands verkocht of je kan altijd eens horen bij een fietsenmaker of ze nog tweedehands fietsen verkopen.
            </p>
            <h4>Deelfiets</h4> 
            <p>Woon je in stad dan heb je misschien de mogelijkheid om een abbonement op een deelfiets te nemen.
                <br>Bij deze abbonementen betaal je vooraf een jaarbedrag of betaal je per rit, je kan dus best kijken wat voor jou het voordeligste is.
            </p>
           
            
        </div>           
        <div class="blok__onderwerp">
            <h3>Openbaar vervoer</h3>
            <p>Wanneer het openbaar vervoer optijd rijd of niet staakt is dit zeker een goed alternatief voor je te verplaatsen.</p>
            <h4>Bus en tram</h4>
            <p>Bij de bus of tram kan je betalen per rit, per 10 ritten, voor 1 maand, 3 maanden of voor een heel jaar
                <br>Tot en met je 24 jaar krijg je korting op je abbonement. Een abbonement is geldig voor zowel de bus als de tram in Vlaanderen.
            </p>
            <h4>Trein</h4>
            <p>Voor de trein kan je betalen per rit maar heb je ook veel andere mogelijkheden zoals, een traject abbonement voor als je een vast traject moet afleggen, een 10 beurten kaart, een halftijds abbonement of een netabbonement</p>
        </div>           
        <div class="blok__onderwerp">
            <h3>Elektrice steps</h3>
            <p>Tegenwoordig vindt je in de grotere steden electrice steps die je kan lenen via een app en waar je betaald per minuur.</p>
        </div>           
    </div>
@endsection
