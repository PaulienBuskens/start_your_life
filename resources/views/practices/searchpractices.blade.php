@extends('layouts.app')
<style type="text/css">

    .avatar{
        border-radius: 100%;
        width: 100px;
        height:100px;
    }

    .img{
        max-width: 250px;
    }

</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8 col-md-offset-2">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif

            @if(session('response'))
                <div class="alert alert-success">{{session('response')}}</div>
            @endif

            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-4">Best Practices</div>
                        <div class="col-lg-8">
                            <form method="POST" action='{{ url("/search") }}'>
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search for ...">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card text-center">
                <div class="card-header">Home</div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        @if(!empty($profile))
                            <img src="{{ $profile->profile_pic }}" alt="" class="avatar">
                        @else
                            <img src="{{ url('images/avatar.png')}}" alt="" class="avatar">
                        @endif
                        @if(!empty($profile))
                            <p class="lead">{{ $profile->name}}</p>
                        @else
                            <p></p>
                        @endif
                        @if(!empty($profile))
                            <p>{{ $profile->designation}}</p>
                        @else
                            <p></p>
                        @endif
                         
                    </div>
                    <div class="col-md-8">

                        @if(count($practices) > 0)
                            @foreach($practices->all() as $practice)
                                <h4>{{$practice->practice_title}}</h4>
                                <img src="{{ $practice->practice_image}}" alt="" class="img">
                                <p>{{substr($practice->practice_body, 0, 150) }}</p>

                                <ul class="nav nav-pills">
                                    <li role="presentation">
                                        <a href='{{ url("/view/{$practice->id}")}}'> |
                                            <span>VIEW</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href='{{ url("/edit/{$practice->id}")}}'> |
                                            <span>EDIT</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href='{{ url("/delete/{$practice->id}")}}'>
                                            <span>DELETE</span>
                                        </a>
                                    </li>
                                </ul>

                                <cite> Posted on: {{date('M j, Y H:i', strtotime($practice->updated_at))}}</cite>
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
