@extends('layouts.app')

@section('content')
<h1>Categorie</h1>
    <div class="sidenav">
        <a href="/">
            <img src="{{ asset('images/rebrand/grandmother.png')}}" alt="ask grandmother">
        </a>
        <ul>
            <a href="#">
                <li>Post Vraag</li>
            </a>
            <a href="#">
                <li>Info per categorie</li>
            </a>
            <a href="#">
                <li>Vragen per categorie</li>
            </a>
            <a href="#">
                <li>Help andere</li>
            </a>
        </ul>
    </div>
    <div class="categorie">
        @if(count($practices) > 0)
            @foreach($practices->all() as $practice)
                <h3>{{$practice->practice_title}}</h3>
                <p>{{$practice->practice_body}}</p>  
                
                <div class="opties__vragen">
                    <ul>
                        <li role="presentation">
                            <a href='{{ url("/view/{$practice->id}")}}'> 
                                <span>Zie antwoorden</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <cite> Posted on: {{date('M j, Y H:i', strtotime($practice->updated_at))}}</cite>
                                    
             @endforeach
        @else
            <p>No best practices available</p>
        @endif
    </div>  
@endsection
