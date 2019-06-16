@extends('layouts.app')

@section('content')
<a href="/">
    <h1>Start Your Life</h1>
</a>
<div class="band">
    <h2>Over grootmoeder</h2>
</div> 

<div class="about">
    <div class="left__about">
        <img src="{{ asset('images/rebrand/grandmother2.png')}}" alt="grandmother">
    </div>
    <div class="right__about">
        <h3>Verhaal achter grootmoeder.</h3>
        <p> Ik heb er gekozen om grootmoeder te gebruiken voor Start Your Life omdat de meeste mensen wel een grootmoeder hebben in hun leven waar ze vragen aan kunnen stellen.
        <br> 
        <br> Grootmoeders zijn al het langste op de aardbol dus er wordt verwacht dat zijn de levenservaring hebben.</p>
    </div>
</div>
    
@endsection