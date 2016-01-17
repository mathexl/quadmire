@extends('layouts.app')

@section('content')

@if(Auth::user()->setup != true)
<section name="setup">
  <div class="overlay" style="background-image:url('{!! URL::asset('assets/images/matte.png') !!}')">
  </div>
  <div class="main">
    <h1>WOOT!  LET'S GET YOU STARTED!</h1>
    <h2>We are more than happy for you to apply to join the video host team at {{$college->name}}.
    We need to get a few particulars from you, like how to connect to prospies as well as some
    logistics.  Once we have these, we will let you know when you have an upcoming video order.
    We cannot wait to work with you. </h2>

    <form action="/setup" method="POST">
      {!! csrf_field() !!}

      <h3>What are your video chat account usernames?  While it is necessary to only have one, multiple
      are best for compatibility (some our prospies are on Android not Apple and vice versa!)</h3>
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

      <h3>Quickly, let's get your basic college experience biometrics.  This way, we
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
      <input class="form" placeholder="List your main clubs and commitments in college (seperate by comma)" name="clubs">
      </div>

      <div class="block">
      <div class="typebloc">
        <i class="fa fa-book"></i>
      </div>
      <input class="form" placeholder="What are you majoring in/plan on majoring in?" name="major">
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
