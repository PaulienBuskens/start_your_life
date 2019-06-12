@extends('layouts.app')

@section('content')
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