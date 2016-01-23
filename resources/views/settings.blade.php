@extends('layouts.app')

@section('content')
<section name="external" style="height:auto;min-height:100vh;">
  <div class="overlay">
  </div>
  <div class="main">
    <h1>YOUR SETTINGS</h1>
    <h2>Edit your profile settings below.</h2>

    {!! Form::open(array('url' => '/settings','novalidate','files' => true)) !!}
      {!! csrf_field() !!}
      <h3>Your profile picture.</h3>

      <img src="{{$user->prof}}" style="float:left;height:40px;width:40px;float:left;border-radius:100%;margin-top:-10px;margin-right:10px;">{!! Form::file('image') !!}
      <br><br>
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
      <input class="form" placeholder="What year do you graduate? (e.g. 2017)" name="year" value="{{$user->year}}">
      </div>

      <h3>What high school did you attend.</h3>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-fort-awesome"></i>
      </div>
      <input class="form" placeholder="Which High School do you attend? (e.g. Jane Smith HS, NY)" name="highschool" value="{{$user->highschool}}">
      </div>

      <h3>What major are you interested in.</h3>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-book"></i>
      </div>
      <input class="form" placeholder="If applicable, what major are you interested in? (e.g. Chemistry)" name="major" value="{{$user->major}}">
      </div>
      <input type="submit" value="SAVE">
    {!! Form::close() !!}
  </div>
</section>

@endsection
