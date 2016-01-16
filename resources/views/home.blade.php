@extends('layouts.app')

@section('content')

@if(Auth::user()->setup != true)
<section name="setup">
  <div class="overlay" style="background-image:url('{!! URL::asset('assets/images/matte.png') !!}')">
  </div>
  <div class="main">
    <h1>HOORAY!  YOU SIGNED UP!</h1>
    <h2>Let's get some details of you so you are set when you want to book a video tour with one of our
    campus trekkers.  No need to have everything ready now, but it is a big up to getting started!
    Quadmire respects your privacy and will not share these details outside your interactions with
    our tour guides.</h2>

    <form action="/setup" method="POST">
      {!! csrf_field() !!}

      <h3>What are your video chat account usernames?  While it is necessary to only have one, multiple
      are best for compatibility (some our hosts are on Android not Apple and vice versa!)</h3>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-skype"></i>
      </div>
      <input class="form" placeholder="Skype Username" name="skype">
      </div>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-google-plus"></i>
      </div>
      <input class="form" placeholder="Google Hangout Username" name="google">
      </div>
      <div class="block">
      <div class="typebloc">
        <i class="fa fa-apple"></i>
      </div>
      <input class="form" placeholder="Facetime Username" name="facetime">
      </div>

      <h3>Quickly, let's get your basic college application stage.  This way, we
      can best recommend a host who may share some things in common with you.</h3>

      <div class="block">
      <div class="typebloc">
        <i class="fa fa-calendar"></i>
      </div>
      <input class="form" placeholder="What year do you graduate? (e.g. 2017)" name="year">
      </div>

      <div class="block">
      <div class="typebloc">
        <i class="fa fa-fort-awesome"></i>
      </div>
      <input class="form" placeholder="Which High School do you attend? (e.g. Jane Smith HS, NY)" name="highschool">
      </div>

      <div class="block">
      <div class="typebloc">
        <i class="fa fa-book"></i>
      </div>
      <input class="form" placeholder="If applicable, what major are you interested in? (e.g. Chemistry)" name="major">
      </div>
      <input type="submit" value="CONTINUE">
    </form>
  </div>
</section>
@else
<section name="featurecollege" style="background-image:url('{!! URL::asset('assets/images/uchicago.png') !!}')">
    <h1>VTOUR UCHICAGO WITH US!</h1>
    <a href="book/1" class="book">BOOK A TOUR</a>
</section>
<section name="colleges">
  <div class="college" style="background-image:url('{!! URL::asset('assets/images/columbia.png') !!}')">
    <div class="overlay">
    <h1>VTOUR COLUMBIA UNIVERSITY WITH US!</h1>
    <a href="book/2" class="book">BOOK A TOUR</a>
    </div>
  </div>

</section>
@endif

@endsection
