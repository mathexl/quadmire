<header @if(Auth::check())style="background-color:#444;"@endif>
  <a href="/"><img src="{!! URL::asset('assets/images/quadmire.png') !!}" class="logo"></a>
  <div class="underlogo">A UProspie Service</div>
  <div class="rightlinks">
    @if(!Auth::check())
    <a href="/register" class="embezzle">Sign Up</a>
    <a href="/login" >Login</a>
    @else
    <a href="/logout" class="embezzle">Log Out</a>
    <a>{{Auth::user()->name}}</a>
      @if(Auth::user()->setup == true)
        <a>Settings</a>
        <a>Past Tours</a>
        <a>Upcoming Video Tours</a>
      @endif
    @endif
  </div>
</header>
