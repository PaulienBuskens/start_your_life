@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 col-md-offset-2">
           <div class="text-center">
                <h1>Ervaringen</h1>
           </div>
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
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
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

            <div class="text-center">
                <div class="row">
                    <div class="col-md-2">
                        <div class="profile__ervaringen">
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
                         
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="ervaringen">

                        @if(count($practices) > 0)
                            @foreach($practices->all() as $practice)
                            <div class="ervaring">
                                <h4>{{$practice->practice_title}}</h4>
                                <img src="{{ $practice->practice_image}}" alt="" class="img">
                                <p>{{substr($practice->practice_body, 0, 150) }}</p>

                                <div class="opties__ervaringen">
                                    <ul>
                                        <li role="presentation">
                                            <a href='{{ url("/view/{$practice->id}")}}'> 
                                                <span>VIEW</span> |
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href='{{ url("/edit/{$practice->id}")}}'> 
                                                <span>EDIT</span> |
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href='{{ url("/delete/{$practice->id}")}}'>
                                                <span>DELETE</span>
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

                        {{$practices->links()}}
                        </div>
                    </div>
                    </div>
                </div>
       </div>
    </div>
</div>
@endsection
