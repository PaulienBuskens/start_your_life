@extends('layouts.app')

@section('content')
    <div class="sidenav">
        <a href="/">
            <img src="{{ asset('images/rebrand/grandmother.png')}}" alt="ask grandmother">
        </a>
        <ul>
            <a href="/practice">
                <li>Post Vraag</li>
            </a>
            <a href="/onderwerpen">
                <li>Info per categorie</li>
            </a>
            <a href="/categorien">
                <li>Vragen per categorie</li>
            </a>
            <a href="/categorien">
                <li>Help andere</li>
            </a>
        </ul>
    </div>
    <h1>Profiel</h1>
    <div class="form">
        <form method="POST" action="{{ url('/addProfile') }}" enctype="multipart/form-data">
        @csrf
            <div class="email__form">
                <label for="name">Naam</label>
                <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            </div>     
            <div class="email__form">
                <label for="designation" class="col-md-4 col-form-label text-md-right">Gebruikersnaam</label>
                <input id="designation" type="input" name="designation" required>
            </div>   
            <div class="foto__form">
                <label for="profile_pic" >Profiel foto</label>
                <input id="profile_pic" type="file" name="profile_pic" required>
            </div>
            <div class="btn__form">
                <button type="submit">Edit Profile</button>
            </div>
        </form>
    </div>       
@endsection
