@extends('layouts.app')

@section('content')
    <a href="/">
        <h1>Start Your Life</h1>
    </a>
    <div class="band">
        <h2>Stel een vraag</h2>
        <p><br></p>
    </div> 
    @if( count($errors) > 0 )
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    @if(session('response'))
        <div class="alert alert-success">{{session('response')}}</div>
    @endif

    <div class="form practice">
        <form method="POST" action="{{ url('/addPractice') }}" enctype="multipart/form-data">
        @csrf

            <div class="email__form">
                <label for="practice_title">Title</label>
                <input id="practice_title" type="input" name="practice_title" value="{{ old('practice_title') }}" required autofocus>
            </div>
            <div class="email__form">
                <label for="practice_body">Body</label>
                <textarea id="practice_body" rows="7" name="practice_body" required></textarea>
            </div>
            <div class="email__form">
                <label for="category_id">Category</label>
                <select id="category_id" type="input" name="category_id" value="{{ old('category_id') }}" required autofocus>
                    <option value="">Select</option>
                    @if(count($categories) > 0)
                        @foreach($categories->all() as $category)
                            <option value="{{ $category->id }}">{{ $category->categoty}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="btn__form btn-lg">
                <button type="submit">
                    Stel je vraag
                </button>
            </div>
        </form>
    </div>
@endsection
