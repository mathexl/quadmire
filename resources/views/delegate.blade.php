@extends('layouts.app')

@section('content')
<div id="delegation">
  <h1>Delegation Panel for {{$college->name}} ({{count($tours)}})</h1>
</div>
<div id="tours" style="min-height: 100vh;">
  <div class="upcoming" v-for="tour in tours" track-by="$index">
    <div class="prof" style="background-image:url('{!! URL::asset('assets/images') !!}/@{{tour.cover}}')"></div>
    <div class="rest">
      <h1>@{{tour.name}}</h1>
      <p>Skype: @{{tour.skype_username}}</p>
      <p>Google: @{{tour.google_username}}</p>
      <p>Facetime: @{{tour.facetime_username}}</p>

        <span v-if="tour.designee != 0" style="color:#52AEFB;border-color:#52AEFB">DESIGNATED</span>
        <p v-if="tour.designee != 0">Change it:</p>

      <form action="/delegate/@{{tour.id}}" method="POST">
        {!! csrf_field() !!}
        <select name="id">
          @foreach($hosts as $host)
          <option value="{{$host->id}}">
            {{$host->name}}
            @if($host->skype_username != '')S  @endif
            @if($host->google_username != '')G  @endif
            @if($host->facetime_username != '')F @endif
          </option>
          @endforeach
        </select>

        <input type="submit" value="SUBMIT">
      </form>
    </div>

  </div>
  @if($tours == [])
  <div class="none">
    <h1>YOU CURRENTLY HAVE NO UPCOMING TOURS :/</h1>
    @if($user->passport == '')
    <h2>Book a tour anywhere that we support and we will get you started!</h2>
    @endif
  </div>
  @endif
</div>


  <script>
  var tours = new Vue({
    el: '#tours',
    data: {
      tours: {!!json_encode($tours)!!}
    },
    methods: {


    }
  })

  </script>
@endsection
