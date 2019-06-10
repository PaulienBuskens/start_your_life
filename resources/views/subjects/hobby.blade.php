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
        <h1>Hobby's</h1>
        <div class="blok__onderwerp">
            <h3>Sportclubs</h3>
            <p>Doordat sportclubs meestal op een vaste dag in de week samenkomen is dit een makkelijke hobby om in te plannen. Ook het sociaal contact helpt om mensen te leren kennen als je in een nieuwe gemeente zou wonen.
            </p>
        </div>
        <div class="blok__onderwerp">
            <h3>Fitness</h3>
            <p>Fitness is handig voor mensen die geen tijd kunnen vrijmaken op vaste momenten. Doordat je bij de fitness op de meeste momenten binnen kan is dit een ideale oplossing.
            </p>
        </div>           
        <div class="blok__onderwerp">
            <h3>Vrijwilligerswerk</h3>
            <p>Wil je een hobby maar je hebt geen zin om te sporten dan kan je altijd vrijwilligerswerk doen. Er zullen genoeg organisaties zijn in je gemeente die altijd openstaan voor nieuwe vrijwilligers.
            </p>
        </div>           
    </div>
@endsection
