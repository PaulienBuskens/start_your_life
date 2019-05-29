@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 col-md-offset-2">
            <div class="text-center">
                <h2>Verzekeringen</h2>
                <div class="blok">
                    <h3>brand verzekering</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                        at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                        ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
                    </p>
                </div>
                <div class="blokimg">
                    <img src="{{ asset('images/verzekeringen/fire.png')}}" alt="">
                </div>
                <div class="blokimg2">
                    <img src="{{ asset('images/verzekeringen/car.png')}}" alt="">
                </div>
                <div class="blok2">
                    <h3>auto verzekering</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                        at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                        ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
                    </p>
                </div>
                <div class="blok">
                    <h3>hospitalisatie verzekering</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                        at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                        ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
                    </p>
                </div>
                <div class="blokimg">
                    <img src="{{ asset('images/verzekeringen/health.png')}}" alt="">
                </div>
                <div class="blokimg2">
                    <img src="{{ asset('images/verzekeringen/family.png')}}" alt="">
                </div>
                <div class="blok2">
                    <h3>familiale verzekering</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                        at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                        ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
                    </p>
                </div>
                
                
            </div>
       </div>
    </div>
</div>
@endsection
