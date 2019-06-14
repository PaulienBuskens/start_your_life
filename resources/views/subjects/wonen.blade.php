@extends('layouts.app')

@section('content')

<a href="/">
    <h1>Start Your Life</h1>
</a>
<div class="band">
    <h2>Wonen</h2>
    <p>In deze sectie vind je alles over de voor- en nadelen van kopen en huren. Je komt te weten wat hamsterwonen is en je vindt hier enkele handige immowebsites.</p>
</div> 
    <div class="onderwerp__onderwerp">
        <div class="blok__onderwerp">
            <a href="/wonen1">
                <h3>Woning kopen</h3>
                <p>Bij het kopen van een huis, kun je verbouwen zoveel je zelf wilt.</p>
            </a>
        </div>
        <div class="blok__onderwerp">
            <a href="/wonen2">
                <h3>Woning huren</h3>
                <p>Bij het huren van een woning, betaal je elke maand een huurbedrag.</p>
            </a>
        </div>
        <div class="blok__onderwerp blok__large">
            <a href="/category/1">
            <h3>Bekijk vragen van andere gebruikers</h3>
            <p><br></p>
            </a>
        </div> 
        <div class="blok__onderwerp">
            <a href="/wonen3">
                <h3>Hamster wonen</h3>
                <p>Hamster wonen is een nieuwe optie tussen kopen en huren.</p>
            </a>
        </div>           
        <div class="blok__onderwerp">
            <a href="/wonen4">
                <h3>Immo websites</h3>
                <p>Er zijn heel veel verschillende Immo websites.</p>
            </a>
        </div>           
    </div>
@endsection
