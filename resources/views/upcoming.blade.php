@extends('layouts.app')

@section('content')

@foreach($tours as $tour)
  <div class="upcoming">
    <div class="prof" style="background-image:url('{!! URL::asset('assets/images/' . $tour->cover) !!}')"></div>
    <div class="rest">
      <h1>{{$tour->name}}</h1>
      <h2>
        {{$tour->location}}
      </h2>

      <span class="pending">PENDING</span>
      <p>Your request is currently pending.  We will notify you very soon of
      our available tour times for a video tour.</p>
    </div>

  </div>
@endforeach
@endsection
