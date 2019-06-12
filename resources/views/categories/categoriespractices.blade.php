@extends('layouts.app')

@section('content')
    <div class="vragen__categorie">
        
        <h1>Categorie</h1>
        @if(count($practices) > 0)
            @foreach($practices->all() as $practice)
                <div class="vraag__categorie">
                    <h3>{{$practice->practice_title}}</h3>
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

                    <cite> Posted on: {{date('M j, Y H:i', strtotime($practice->updated_at))}}</cite>
                </div>              
             @endforeach
        @else
            <p>No best practices available</p>
        @endif
    </div>  
@endsection
