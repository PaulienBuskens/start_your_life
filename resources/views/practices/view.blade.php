@extends('layouts.app')

@section('content')
    @if(session('response'))
        <div class="alert alert-success">{{session('response')}}</div>
    @endif
    
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
    <div class="views">
        <h1>Bekijk vraag</h1>
        @if(count($practices) > 0)
            @foreach($practices->all() as $practice)
                <div class="view">
                    <h3>{{$practice->practice_title}}</h3>
                    <p>{{$practice->practice_body}}</p>
                </div>
            @endforeach
        @else
            <p>No best practices available</p>
        @endif

        <div class="comment__form">
            <form method="POST" action='{{ url("/comment/{$practice->practices_id}") }}'>
            {{csrf_field()}}
                <textarea name="comment" id="comment" cols="50" rows="3" required autofocus></textarea>
                <div class="btn__form">
                    <button type="submit">Add Comment</button>
                </div>
            </form>
        </div>

        <div class="comments">
            <h3>Comments</h3>

            @if(count($comments) > 0)
                @foreach($comments->all() as $comment)
                    <div class="comment">
                        <p>{{ $comment->comment }}</p>
                        <p>Posted by: {{ $comment->name }}</p>
                    </div>
                @endforeach
            @else 
                <p>Geen antwoorden gevonden</p>
            @endif
        </div>
    </div>
@endsection
