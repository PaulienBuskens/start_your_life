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
    
    <div class="searches">
    <h1>Zoek resultaten</h1>
        @if(count($practices) > 0)
            @foreach($practices->all() as $practice)
                <div class="search">
                    <h3>{{$practice->practice_title}}</h3>
                    <p>{{substr($practice->practice_body, 0, 150) }}</p>
                    <ul>
                        <li>
                            <a href='{{ url("/view/{$practice->practices_id}")}}'>
                                <span>Zie antwoorden</span>
                            </a>
                        </li>
                    </ul>
                    <cite> Posted on: {{date('M j, Y H:i', strtotime($practice->updated_at))}}</cite>
                </div>
            @endforeach
        @else
            <p>No best practices available</p>
        @endif
    </div>
@endsection
