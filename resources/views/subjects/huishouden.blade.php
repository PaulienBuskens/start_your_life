 @extends('layouts.app')

@section('content')
<a href="/">
    <h1>Start Your Life</h1>
</a>
<div class="band">
    <h2>Huishouden</h2>
    <p>In deze sectie vind je alles over wassen, koken en poetsen. Verder kan je ook naar de vragen gaan die mensen eerder gesteld hebben over huishouden.</p>
</div> 
<div class="onderwerp__onderwerp">
        <div class="blok__onderwerp">
            <a href="/huisblok1">
                <h3>Was tips</h3>
                <ul>
                    <li>Je kan je was best sorteren in wit, zwart en bont.</li>
                    <li>Zie dat al je zakken leeg zijn.</li>
                </ul>
            </a>
        </div>
        <div class="blok__onderwerp">
            <a href="/huisblok2">
                <h3>Kooktips</h3>
                <ul>
                    <li>Zie dat je start met degelijk materiaal zoals scherpe messen,...</li>
                </ul>
            </a>
        </div>  
        <div class="blok__onderwerp blok__midlarge">
            <a href="/category/6">
                <h3>Bekijk vragen van andere gebruikers</h3>
                <p></p>
            </a>
        </div>           
        <div class="blok__onderwerp">
            <a href="/huisblok3">
                <h3>Poetsen</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar</p>
            </a>
        </div>           
    </div>
@endsection
