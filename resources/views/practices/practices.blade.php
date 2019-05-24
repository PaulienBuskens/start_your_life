@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if( count($errors) > 0 )
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif

            @if(session('response'))
                <div class="alert alert-success">{{session('response')}}</div>
            @endif
            <div class="card">
                <div class="card-header">ADD BEST PRACTICE</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/addPractice') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="practice_title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="practice_title" type="input" class="form-control" name="practice_title" value="{{ old('practice_title') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="practice_body" class="col-md-4 col-form-label text-md-right">Body</label>

                            <div class="col-md-6">
                                <textarea id="practice_body" rows="7" class="form-control " name="practice_body" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                <select id="category_id" type="input" class="form-control" name="category_id" value="{{ old('category_id') }}" required autofocus>
                                <option value="">Select</option>
                                @if(count($categories) > 0)
                                    @foreach($categories->all() as $category)
                                        <option value="{{ $category->id }}">{{ $category->categoty}}</option>
                                    @endforeach
                                @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="practice_image" class="col-md-4 col-form-label text-md-right">Featured picture</label>

                            <div class="col-md-6">
                                <input id="practice_image" type="file" class="form-control" name="practice_image" required>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Publish Best Practice
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
