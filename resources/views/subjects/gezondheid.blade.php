@extends('layouts.app')

@section('content')
<a href="/">
    <h1>Start Your Life</h1>
</a>
<div class="band">
    <h2>Gezondheid</h2>
</div> 
<div class="onderwerp__onderwerp">
        <div class="blok__onderwerp">
            <a href="/gezond1">
                <h3>Huisdokter</h3>
                <p>Wat is nu eigenlijk een huisarts?</p>
            </a>
        </div>
        <div class="blok__onderwerp">
            <a href="/gezond2">
                <h3>Tandarts</h3>
                <p>Wat moet ik weten over een tandarts?</p>
            </a>
        </div>  
        <div class="blok__onderwerp blok__mid">
            <a href="/category/7">
                <h3>Bekijk vragen van andere gebruikers</h3>
                <p></p>
            </a>
        </div>           
        <div class="blok__onderwerp">
            <a href="/gezond3">
                <h3>Huidarts</h3>
                <p>Wat moet ik weten over een huidarts?</p>
            </a>
        </div>  
    </div>
@endsection

