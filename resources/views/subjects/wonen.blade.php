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
        <h1>Wonen</h1>
        <div class="blok__onderwerp">
            <h3>Kopen VS Huren</h3>
            <h4>Voordelen huren</h4>
            <p>Bij het huren van een woning, betaal je elke maand een bepaald huur bedrag. De kosten van grote onderhoudswerken worden gedragen door de eigenaar.
                <br>Als huurder heb je enkel een brandverzekering en eventueel een familialeverzekering nodig. De resterende verzerkeringen voor de eigendom worden geregeld door de eigenaar.
                <br>Door te huren kan je makkelijk verhuizen moest je dat willen zodat al te veel gedoe. De meeste huurcontracten kunnen kostenloos afgezegd worden na 3 jaar. 
            </p>
            <h4>Nadelen huren</h4>
            <p>Het geld dat je betaald aan huur gaat 'verloren' aan een eigendom dat niet van jou is.
                <br>Grote aanpassingen uitvoeren is quasi onmogelijk doordat je afhankelijk bent van de eigenaar.
                <br>Als de eigenaar plots beslist om de woning te verkopen dan moet je terug opzoek naar een woning.
            </p>
            <h4>Voordelen kopen</h4>
            <p>
                Als je een huis koopt ka je terugvallen op een woonkrediet dat extra financiele zekerheid met zich meebrengt.
                Bij het kopen van een huis, kun je verbouwen en vernieuwen zoveel je zelf wilt.
                Wanneer je de lening hebt afbetaald is de eigendom volledig van jou.
            </p>
            <h4>Nadelen kopen</h4>
            <p>Je kan best vergelijken wat het verschil is met de maandelijkse terugbetaling van je woonkrediet en de maandelijkse huur dat je zou betalen.
                <br>Wanneer je koopt moet je registratierechten betalen en een jaarlijkse onroerende voorheffing.

            </p>
        </div>
        <div class="blok__onderwerp">
            <h3>Hamster wonen</h3>
            <p>Hamster wonen is een tussen kopen en huren, dit is enkel nog heel nieuw dus deze regeling is nog op niet veel plaatsen mogelijk.
                <br> Bij hamster wonen huur je een woning met een optie om het daarna te kopen. De betaalde huur kan na enkele jaren omgezet worden in kapitaal om het eerste deel van de aankoop te financieren.
            </p>
        </div>           
        <div class="blok__onderwerp">
            <h3>Immo websites</h3>
            <p>Er zijn heel veel verschillende Immo websites, hier zijn er enkele.</p>
            <ul>
                <a href="https://immo.vlan.be/nl"><li>Immo vlan</li></a>
                <a href="https://www.immoweb.be/nl/"><li>Immo web</li></a>
                <a href="https://www.zimmo.be/nl/"><li>Zimmo</li></a>
                <a href="https://www.immoscoop.be/"><li>Immo scoop</li></a>
            </ul>
        </div>           
    </div>
@endsection
