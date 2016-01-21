@extends('layouts.app')

@section('content')
<div id="tours" style="min-height: 100vh;">
  <div class="upcoming" v-for="tour in tours" track-by="$index">
    <div class="prof" v-if="tour.cover" style="background-image:url('{!! URL::asset('assets/images') !!}/@{{tour.cover}}')"></div>
    <div class="buffer" v-else></div>
    <div class="rest">
      <h1><a href="tour/@{{tour.id}}">@{{tour.name}}</a></h1>
      <h2>
        @{{tour.location}}
      </h2>

      @if($user->passport != 0)
      <h3>
        <p><b>Prospective Major</b> @{{tour.major}}</p>
        <p><b>High School</b> @{{tour.highschool}}</p>
        <p><b>Current Year</b> Class of @{{tour.year}}</p>

      </h3>
      @else
        <span class="pending" v-if="tour.designee == null">PENDING</span>
        <span class="cancel" v-on:click="del($index,tour.id)">Cancel</span>
        <p v-if="tour.designee == null">Your request is currently pending.  We will notify you very soon of
        our available tour times for a video tour.</p>
        <p v-else>
          You've been paired with <b>@{{tour.designee.name}}</b>!  They are studying
          <b>@{{tour.designee.major}}</b> at @{{tour.name}}
        </p>
      @endif




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
      del: function (msg,id) {

        this.tours.splice(msg,1);

        var base_url = window.location.protocol + "//" + window.location.host;
  			$.ajaxSetup({
  			   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
  			});
        $.ajax({
  			    type: "GET", // or GET
  			    url: base_url + "/tour/delete/" + id,
  			    success: function(data){
              console.log(data);
  			    }
			  });
      }

    }
  })

  </script>
@endsection
