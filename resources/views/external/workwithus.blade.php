@extends('layouts.app')

@section('content')

<section name="external">
  <div class="overlay" style="background-image:url('{!! URL::asset('assets/images/steven.png') !!}');">
  </div>
  <div class="main">
    <h1>WORK WITH US</h1>
    <h2>
      Working with Quadmire as a host is a great gig - you get to chat with prospective students,
      meddle with our unique video tour oriented experience, and get paid for your time - up to
      $20.00/hour.
      To work with us, simply sign up using your .edu email address. You will automatically
    be paired with one of our supported colleges.  We currently support the following colleges:
    <br><br>
    <li>The University of Chicago</li>
    <li>Columbia University</li>
    <br>
    However, even if we aren't at your college yet, feel free to sign up and we will do our
    best to get their pronto.  Early signups also will get a bonus rate moving into the future.

   </h2>


  </div>
</section>

@endsection
