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
       <div class="col-md-12 col-md-offset-2">
            <div class="text-center">
                <h1>Start your life</h1>
                <div class="row">
                    <div class="col-md-3">
                    <a href="/wonen">
                        <div class="box">
                            <img src="{{ asset('images/wonen/Rent-Sale.png')}}" alt="house icon">
                            <p class="subtext">kopen of huren</p>
                        </div>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/verzekeringen">
                            <div class="box2">
                                <img src="{{ asset('images/verzekeringen/insurance.png')}}" alt="insurance icon">
                                <p class="subtext">verzekeringen</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/belastingen">
                            <div class="box">
                                <img src="{{ asset('images/icons/taxes.png')}}" alt="taxes icon">   
                                <p class="subtext">belastingen</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/vervoer">
                            <div class="box2">
                                <img src="{{ asset('images/icons/vervoer.png')}}" alt="vervoer icon">
                                <p class="subtext">vervoer</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="/hobby">
                            <div class="box2">
                                <img src="{{ asset('images/icons/hobby.png')}}" alt="hobby icon">
                                <p class="subtext">Hobby's</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/huishouden">
                            <div class="box">
                                <img src="{{ asset('images/icons/chores.png')}}" alt="chores icon">
                                <p class="subtext">huishouden</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/gezondheid">
                            <div class="box2">
                                <img src="{{ asset('images/icons/health.png')}}" alt="healt icon">
                                <p class="subtext">gezondheid</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="/nutsvoorzieningen">
                            <div class="box">
                                <img src="{{ asset('images/icons/maintenance.png')}}" alt="maintenance icon">
                                <p class="subtext">nutsvoorzieningen</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
@endsection
