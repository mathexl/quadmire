@extends('layouts.app')

@section('content')
<div class="tour">
  <div class="prof" style="background-image:url('{!! URL::asset('assets/images') !!}/{{$college->cover}}')"></div>
  <div class="rest">
    <h1>{{$college->name}}</h1>
    <h2>
      {{$college->location}}
    </h2>


    <span class="pending">PENDING</span>
    <span class="cancel">Cancel</span>
    <p>Your request is currently pending.  We will notify you very soon of
    our available tour times for a video tour.</p>
  </div>

</div>




@endsection
