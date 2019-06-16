@extends('layouts.app')

@section('content')
    @if(session('response'))
        <div class="alert alert-success">{{session('response')}}</div>
    @endif
    <a href="/">
        <h1>Start Your Life</h1>
    </a>
    <div class="band">
        <h2>Bekijk vraag</h2>
        <p><br></p>
    </div> 
    <div class="views">
        @if(count($practices) > 0)
            @foreach($practices->all() as $practice)
                <div class="view">
                    <h3>{{$practice->practice_title}}</h3>
                    <p>{{$practice->practice_body}}</p>
                    <ul>
                        <li role="presentation">
                            <a href='{{ url("/like/{$practice->practices_id}")}}'>
                                <span>Like ({{$likePractice}})</span> 
                            </a>
                        </li>
                        <li role="presentation">
                            <a href='{{ url("/dislike/{$practice->practices_id}")}}'>
                                <span>Dislike ({{$dislikePractice}})</span> 
                            </a>
                        </li>    
                    </ul>
                </div>
            @endforeach
        @else
            <p>No best practices available</p>
        @endif

        <div class="comments">
            <h3>Antwoorden</h3>

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

        <div class="comment__form">
            <form method="POST" action='{{ url("/comment/{$practice->practices_id}") }}'>
            {{csrf_field()}}
                <textarea name="comment" id="comment" cols="50" rows="3" required autofocus></textarea>
                <div class="btn__form">
                    <button type="submit">Voeg antwoord toe</button>
                </div>
            </form>
        </div>
    </div>
@endsection
