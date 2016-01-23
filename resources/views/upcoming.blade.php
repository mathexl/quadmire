@extends('layouts.app')

@section('content')
<div id="tours" style="min-height: 100vh;">
  @if($user->passport != 0)
    <div class="info">
      <h1>Prospies You Have Been Matched to give a VTour too</h1>
      <h2>Send them available times that you can give a vtour at.  Keep in mind
          the prospies preferences of available times when deciding.  The prospie may
          choose whichever time they prefer.  If none of the times work, you may have to
          provide more times on a rolling basis.</h2>
    </div>
  @endif
  <div class="upcoming" v-for="tour in tours" track-by="$index">
    <div class="prof" v-if="tour.cover" style="background-image:url('{!! URL::asset('assets/images') !!}/@{{tour.cover}}')"></div>
    <div class="buffer" v-else></div>
    <div class="rest" @if($user->passport != 0) style="width:90%;" @endif>

      <h1>


        <a href="tour/@{{tour.id}}">
          @if($user->passport != 0)
            <img src="@{{tour.prof}}">
          @endif
          @{{tour.name}}</a>

      </h1>
      <h2>
        @{{tour.location}}
      </h2>

      @if($user->passport != 0)
      <div class="prospie">
        <p><b>Prospective Major</b> @{{tour.major}}</p>
        <p><b>High School</b> @{{tour.highschool}}</p>
        <p><b>Current Year</b> Class of @{{tour.year}}</p>

      </div>
      <div class="propose">
        <form>
          <fieldset v-for="num in nums">
            <h1>Proposed Time @{{num}}</h1>
            <select name="month@{{num}}">
              <option v-for="month in months" >@{{month}}</option>
            </select>
            <select name="day@{{num}}">
              <option v-for="day in days" >@{{day}}</option>
            </select>
            <select name="time@{{num}}">
              <option v-for="time in times" >@{{time}}</option>
            </select>
          </fieldset>
          <input type="submit" value="Send Requested Times">
        </form>
      </div>
      @else
        <span class="pending" v-if="tour.designee == null">PENDING</span>
        <p v-if="tour.designee == null">Your request is currently pending.  We will notify you very soon of
        our available tour times for a video tour.</p>
        <div class="tag" v-else>
          <p>
          <img src="@{{tour.designee.prof}}">
          You've been paired with <b>@{{tour.designee.name}}</b>!  They are studying
          <b>@{{tour.designee.major}}</b> at @{{tour.name}}
          </p>
        </div>

        <span class="cancel" v-on:click="del($index,tour.id)">Cancel</span>

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
      tours: {!!json_encode($tours)!!},
      months: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec"],
      days: ["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16",
      "17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],
      times: ["10:00am","11:00am","12:00pm","1:00pm","2:00pm","3:00pm","4:00pm","5:00pm","6:00pm","7:00pm"],
      nums: ["1","2","3","4"]
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
