@extends('layouts.app')

@section('content')
    
    <a href="/">
        <h1>Start Your Life</h1>
    </a>
    <div class="band">
        <h2>Categorie</h2>
        <p>Hier vind je alle vragen die andere gebruikers gesteld hebben over dit onderwerp.
            <br>Geen antwoord gevonden op je vraag?
            <br>Stel dan <a href="/practice">HIER</a> je vraag.
        </p>
    </div> 

        <div class="vragen__categorie">
        @if(count($practices) > 0)
            @foreach($practices->all() as $practice)
                <div class="vraag__categorie">
                    <p>{{$practice->practice_body}}</p>  
                
                    <div class="opties__vragen">
                        <ul>
                            <li role="presentation">
                                <a href='{{ url("/view/{$practice->practices_id}")}}'> 
                                    <span>Zie antwoorden</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>              
             @endforeach
        @else
            <p>No best practices available</p>
        @endif
    </div>  
@endsection
