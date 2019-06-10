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
        <h1>Nutsvoorzieningen</h1>
        <div class="blok__onderwerp">
            <h3>Water</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
            </p>
        </div>
        <div class="blok__onderwerp">
            <h3>Elektriciteit</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
            </p>
        </div>           
        <div class="blok__onderwerp">
            <h3>Internet en Telefonie</h3>
            <p>Voor je internet en telefonie kan je best enkele providers vergelijken zodat je het pakket kan vinden dat het voordeligste is voor jou.
            </p>
        </div>           
        <div class="blok__onderwerp">
            <h3>Gas</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
            </p>
        </div>           
    </div>
@endsection
