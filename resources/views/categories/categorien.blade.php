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
    <div class="categorien">
        
    <h1>Vragen per categorie</h1>  
        
        <ul>
            @if(count($categories) > 0)
                @foreach($categories->all() as $category)
                    <a href='{{ url("category/{$category->id}") }}'>
                        <li><p> {{$category->categoty}}</p></li>
                    </a>
                @endforeach
            @else
                <p>No Category Found</p>
            @endif
        </ul>
    </div>
@endsection