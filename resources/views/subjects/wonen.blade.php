@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 col-md-offset-2">
            <div class="text-center">
                <h2>Kopen of huren</h2>
                <div class="blok">
                    <h3>Kopen</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                        at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                        ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
                    </p>
                </div>
                <div class="blokimg">
                    <img src="{{ asset('images/wonen/sale_pink.png')}}" alt="">
                </div>
                <div class="blokimg2">
                    <img src="{{ asset('images/wonen/rent.png')}}" alt="">
                </div>
                <div class="blok2">
                    <h3>Huren</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer pulvinar, purus in finibus volutpat, lorum mi porta quam,
                        at feugiat purus purus nec neque. Sed euismod, massa ut porta tristique,
                        ante odio viverra sapien, at lobortis ligua dolor vitea nulla.
                    </p>
                </div>
                
                
            </div>
       </div>
       <!-- <button class="cn-button" id="cn-button">+</button>
        <div class="cn-wrapper" id="cn-wrapper">
            <ul>
                <li><a href="#"><span class="icon-picture"></span></a></li>
                <li><a href="#"><span class="icon-headphones"></span></a></li>
                <li><a href="#"><span class="icon-home"></span></a></li>
                <li><a href="#"><span class="icon-facetime-video"></span></a></li>
                <li><a href="#"><span class="icon-envelope-alt"></span></a></li>
            </ul>
        </div>
        <div id="cn-overlay" class="cn-overlay"></div> -->
    </div>
</div>
@endsection
