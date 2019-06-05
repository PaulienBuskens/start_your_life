@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Start your life</h1>
   <div class="left__home">
      <h2>Life starts here</h2>
      <p>Vraag raad aan groodmoeder of stel je vraag aan de community.</p>
      <a href='/register'>
         <div class="rndbtn__home">
            <p>Wordt deel van de community</p> 
         </div> 
      </a>
   </div>
   <div class="right__home">
      <img src="{{ asset('images/rebrand/grandmother.png')}}" alt="ask grandmother">
      <form method="POST" action='{{ url("/search") }}'>
      {{ csrf_field() }}
         <input type="text" name="search" placeholder="Search for ...">
            <span class="input-group-btn">
               <button type="submit" class="btn__form">VRAAG</button>
            </span>
      </form>
   </div>
</div>
@endsection
