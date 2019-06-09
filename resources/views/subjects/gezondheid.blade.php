@extends('layouts.app')

@section('content')
<div class="sidenav">
        <a href="/">
            <img src="{{ asset('images/rebrand/grandmother.png')}}" alt="ask grandmother">
        </a>
        <ul>
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
        <h1>Gezondheid</h1>
        <div class="blok__onderwerp">
            <h3>Huisdokter</h3>
            <p>Je huisdokter is je vaste dokter als je ziek bent ga je hier langs. In het weekend kan je gebruik maken van de arsten wachtpost voor dingen die niet tot na het weekend kunnen wachten.
            </p>
        </div>
        <div class="blok__onderwerp">
            <h3>Tandarts</h3>
            <p>Voor je terugbetaling moet je minstens 1 keer per jaar naar de tandarts gaan. In het weekend kan je gebruik maken van de tandartsen wachtpost voor dringende gevallen.
            </p>
        </div>           
    </div>
@endsection
