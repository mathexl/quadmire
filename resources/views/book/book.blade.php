@extends('layouts.app')

@section('content')
<section name="bookcollege" style="background-image:url('{!! URL::asset('assets/images/' . $college->cover) !!}')">
  <div class="overlay"><h1>BOOK AN {{strtoupper($college->name)}} VTOUR</h1></div>
</section>

<form id="app" class="bookingform">
  <a v-on:click="step = step - 1" v-if="step > 1" class="back"><i class="fa fa-undo"></i> Go Back</a>

  <div class="fields">
  <div v-if="step != 1" class="field"><h1>What Are You Looking For?</h1> @{{lookingfor}}</div>
  <div v-if="step == 1" class="editfield">
    <h1>WHAT ARE YOU LOOKING FOR?</h1>
    <h2>In one sentence, what do you want to learn most about during this tour?</h2>
    <input type="text" name="lookingfor" v-model="lookingfor" placeholder="e.g. School culture, admission tips, campus logistics...">
    <a v-on:click="step = step + 1" class="next">Continue</a>
  </div>

  <div v-if="step != 2 && when != ''" class="field"><h1>Have You Visited {{$college->name}} Before, And If So, When?</h1> @{{when}}</div>
  <div v-if="step == 2" class="editfield">
    <h1>HAVE YOU VISITED UCHICAGO BEFORE?</h1>
    <h2>And if so, when?</h2>
    <input type="text" name="when" v-model="when" placeholder="e.g. No or Yes, Last December...">
    <a v-on:click="step = step + 1" class="next">Continue</a>
  </div>

  <div v-if="step != 3 && programs != '' && when != ''" class="field"><h1>Any Programs of {{$college->name}} That You Are Interested In?</h1> @{{programs}}</div>
  <div v-if="step == 3" class="editfield">
    <h1>ANY SPECIFIC CLUBS OR PROGRAMS OF {{strtoupper($college->name)}} THAT YOU ARE INTERESTED IN?</h1>
    <h2>Maybe club sports, greek life, or a special major track?</h2>
    <input type="text" name="programs" v-model="programs" placeholder="e.g. Greek Life, academic clubs, pre-med track...">
    <a v-on:click="step = step + 1" class="next">Continue</a>
  </div>

  <div v-if="step != 4 && programs != '' && when != '' && matters != ''" class="field"><h1>Any Other General Matters?</h1> @{{matters}}</div>
  <div v-if="step == 4" class="editfield">
    <h1>ANY OTHER GENERAL MATTERS?</h1>
    <h2>Anything else that may come to mind?</h2>
    <input type="text" name="matters" v-model="matters" placeholder="e.g. I want to learn also about X...">
    <a v-on:click="step = step + 1" class="next">Continue</a>
  </div>
  <br>
  <br>
  <span v-if="step == 5">By submitting before, you are not obligated or charged to conduct the tour.
  We will notify you over email as soon as possible with a bunch of dates and times that our host
  is available.  If you cannot make any of those dates, we can reschedule.  The cost after confirming
  one of those dates will be $35.00 for an one hour video tour.</span>
  <input type="submit" v-if="step == 5" value="SEND VTOUR REQUEST FOR HOST">

  </div>
</form>
<script>
new Vue({
  el: '#app',
  data: {
    lookingfor: '',
    step: 1,
    when: '',
    programs: '',
    matters:''
  }
})
</script>
@endsection
