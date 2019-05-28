@extends('layouts.app')
<style type="text/css">

    .img{
        max-width: 250px;
    }

</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8 col-md-offset-2">
            <div class="card text-center">
                <div class="card-header">Best Practices</div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                      <ul class="list-group">
                            @if(count($categories) > 0)
                                @foreach($categories->all() as $category)
                                    <li class="list-group-item">
                                        <a href='{{ url("category/{$category->id}") }}'>{{$category->categoty}}</a>
                                    </li>
                                @endforeach
                            @else
                                <p>No Category Found</p>
                            @endif

                            <a href=''></a>
                      </ul>
                    
                    </div>
                    <div class="col-md-8">
                        @if(count($practices) > 0)
                            @foreach($practices->all() as $practice)
                                <h4>{{$practice->practice_title}}</h4>
                                <img src="{{ $practice->practice_image}}" alt="" class="img">
                                <p>{{$practice->practice_body}}</p>

                                
                            @endforeach
                        @else
                            <p>No best practices available</p>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection
