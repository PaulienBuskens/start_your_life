@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 col-md-offset-2">
            <div class="text-center">
                <h1>Start your life</h1>
                <div class="intro">
                    <p>Bij start your life vind je alles over het zelfstandig gaan wonen. 
                    <br> Je kan per onderwerp informatie verkrijgen of ervaringen delen met andere.
                    <br> Verder kan je locatie gebasseerde informatie verkrijgen over bv de winkels in je buurt.
                    <br>Ten slotte heb je een handige checklist zodat je niets kan vergeten.</p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="/onderwerpen">
                            <div class="option">
                                <img src="{{ asset('images/home/onderdelen.png')}}" alt="">
                                <p class="">Informatie per onderwerp</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/practicesoverview">
                            <div class="option2">
                                <img src="{{ asset('images/home/ervaringen.png')}}" alt="">
                                <p class="">Deel ervaringen</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/practicesoverview">
                            <div class="option">
                                <img src="{{ asset('images/home/location.png')}}" alt="">
                                <p class="">Locatie gebasseerde informatie</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/practicesoverview">
                            <div class="option2">
                                <img src="{{ asset('images/home/checklist.png')}}" alt="">
                                <p class="">Checklist</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection
