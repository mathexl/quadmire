@extends('layout')
@section('content')
@if(!Auth::check())
<body>
  <section name="main" style="background-image:url('{!! URL::asset('assets/images/steven.png') !!}');">
    <div class="overlay">
    <h1>TOUR A COLLEGE'S CAMPUS WITH AN UNDERGRADUATE <br><span style="color:#ff6632;">LIVE</span> FROM YOUR OWN BEDROOM.</h1>
    <a class="getstarted" href="/register">SCHEDULE A VIDEO TOUR</a>
    </div>
  </section>
  <section name="features">
    <h1>INTERACTIVE, LIVE ONE-HOUR VIDEO TOURS BY FRIENDLY HOSTS</h1>
    <div class="features">
      <div class="feature">
        <i class="fa fa-users"></i>
        <h1>SCHEDULE WITH A HOST</h1>
      </div>
      <div class="feature">
        <i class="fa fa-camera-retro"></i>
        <h1>START THE VIDEO TOUR</h1>
      </div>
      <div class="feature">
        <i class="fa fa-comments-o"></i>
        <h1>ASK QUESTIONS ON THE WAY</h1>
      </div>
    </div>
  </section>
</body>
@else
Lol
@endif
@endsection
