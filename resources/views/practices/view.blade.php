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
            @if(session('response'))
                <div class="alert alert-success">{{session('response')}}</div>
            @endif
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

                                <ul class="nav nav-pills">
                                    <li role="presentation">
                                        <a href='{{ url("/like/{$practice->id}")}}'>
                                            <span>Like ({{$likeCtr}})</span> |
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href='{{ url("/dislike/{$practice->id}")}}'>
                                            <span>Dislike ({{$dislikeCtr}})</span> |
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href='{{ url("/comment/{$practice->id}")}}'>
                                            <span>COMMENT</span>
                                        </a>
                                    </li>
                                </ul>

                            @endforeach
                        @else
                            <p>No best practices available</p>
                        @endif
                      
                        <form method="POST" action='{{ url("/comment/{$practice->id}") }}'>
                        {{csrf_field()}}
                            <div class="form-group">
                                <textarea name="comment" id="comment" rows="6" class="form-control" required autofocus></textarea>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg"> POST COMMENT</button>
                                </div>
                            </div>
                        </form>

                        <h3>Comments</h3>

                        @if(count($comments) > 0 )
                            @foreach($comments->all() as $comment)
                                <p>{{ $comment->comment }}</p>
                                <p>Posted by: {{ $comment->name }}</p>
                                <hr>
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
