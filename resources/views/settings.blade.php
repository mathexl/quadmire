@extends('layouts.app')

@section('content')
<section name="external">
  <div class="overlay">
  </div>
  <div class="main">
    <h1>YOUR SETTINGS</h1>
    <h2>Edit your profile settings below.</h2>

    <form action="/setup" method="POST">
      {!! csrf_field() !!}
      <h3>Your profile picture.</h3>
      <input type="file" value="Change Profile Picture">

      <h3>Your general account settings regarding your video chat capacities.</h3>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-skype"></i>
      </div>
      <input class="form" placeholder="Skype Username" name="skype" value="{{$user->skype_username}}">
      </div>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-google-plus"></i>
      </div>
      <input class="form" placeholder="Google Hangout Username" name="google" value="{{$user->google_username}}">
      </div>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-apple"></i>
      </div>
      <input class="form" placeholder="Facetime Username" name="facetime" value="{{$user->facetime_username}}">
      </div>

      <h3>Year you graduate in.</h3>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-calendar"></i>
      </div>
      <input class="form" placeholder="What year do you graduate? (e.g. 2017)" name="year">
      </div>

      <h3>What high school did you attend.</h3>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-fort-awesome"></i>
      </div>
      <input class="form" placeholder="Which High School do you attend? (e.g. Jane Smith HS, NY)" name="highschool">
      </div>

      <h3>What major are you interested in.</h3>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-book"></i>
      </div>
      <input class="form" placeholder="If applicable, what major are you interested in? (e.g. Chemistry)" name="major">
      </div>
      <input type="submit" value="SAVE">
    </form>
  </div>
</section>

@endsection
