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
        <h1>Belastingen</h1>
        <div class="blok__onderwerp">
            <h3>Zelf invullen</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
            </p>
        </div>
        <div class="blok__onderwerp">
            <h3>Accountent inhuren</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
            </p>
        </div>           
    </div>
@endsection
