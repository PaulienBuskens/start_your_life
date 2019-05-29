@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 col-md-offset-2">
            <div class="text-center">
                <h2>Hobby's</h2>
                <div class="blok">
                    <h3>Sportclubs</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                        at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                        ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
                    </p>
                </div>
                <div class="blokimg">
                    <img src="{{ asset('images/hobby/sport.png')}}" alt="">
                </div>
                <div class="blokimg2">
                    <img src="{{ asset('images/hobby/fitness.png')}}" alt="">
                </div>
                <div class="blok2">
                    <h3>Fitness</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                        at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                        ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
                    </p>
                </div>
                <div class="blok">
                    <h3>Vrijwilligers werk</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                        at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                        ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
                    </p>
                </div>
                <div class="blokimg">
                    <img src="{{ asset('images/hobby/volunteer.png')}}" alt="">
                </div>
                
            </div>
       </div>
    </div>
</div>
@endsection
