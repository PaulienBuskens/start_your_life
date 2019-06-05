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
    <div class="onderwerpen">
        <h1>Onderwerpen</h1>
        <div class="onderwerp">
            <a href="/finacien">
                <p>Financiën</p>
            </a>
        </div>
        <div class="onderwerp">
            <a href="/wonen">
                <p>Wonen</p>
            </a>
        </div>
        <div class="onderwerp">
            <a href="/soliciteren">
                <p>Soliciteren</p>
            </a>
        </div>
        <div class="onderwerp">
            <a href="/vervoer">
                <p>Vervoer</p>
            </a>
        </div>
        <div class="onderwerp">
            <a href="/hobby">
                <p>Hobby's</p>
            </a>
        </div>
        <div class="onderwerp">
            <a href="/huishouden">
                <p>Huishouden</p>
            </a>
        </div>
        <div class="onderwerp">
            <a href="/nutsvoorzieningen">
                <p>Nutsvoorzieningen</p>
            </a>
        </div>
        <div class="onderwerp">
            <a href="/gezondheid">
                <p>Gezondheid</p>
            </a>
        </div>
    </div>
           
@endsection
