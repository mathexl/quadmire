@extends('layouts.app')

@section('content')
<div id="tours" style="min-height: 100vh;">
  <div class="upcoming" v-for="tour in tours" track-by="$index">
    <div class="prof" style="background-image:url('{!! URL::asset('assets/images') !!}/@{{tour.cover}}')"></div>
    <div class="rest">
      <h1>@{{tour.name}}</h1>
      <h2>
        @{{tour.location}}
      </h2>


      <span class="pending">PENDING</span>
      <span class="cancel" v-on:click="del($index,tour.id)">Cancel</span>
      <p>Your request is currently pending.  We will notify you very soon of
      our available tour times for a video tour.</p>
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
