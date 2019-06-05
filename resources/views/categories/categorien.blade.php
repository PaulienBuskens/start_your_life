@extends('layouts.app')

@section('content')

<h1>Vragen per categorie</h1>   
    <div class="sidenav">
        <a href="/">
            <img src="{{ asset('images/rebrand/grandmother.png')}}" alt="ask grandmother">
        </a>
        <ul>
            <a href="#">
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