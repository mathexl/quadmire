@extends('layouts.app')

@section('content')
<!-- resources/views/auth/register.blade.php -->


<section name="main" style="background-image:url('{!! URL::asset('assets/images/steven.png') !!}');">
  <div class="overlay">
    <form method="POST" action="">
        {!! csrf_field() !!}
        <fieldset>
            <h1>NAME</h1>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name">
        </fieldset>

        <fieldset>
            <h1>EMAIL</h1>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
        </fieldset>

        <fieldset class="half">
            <h1>PASSWORD</h1>
            <input type="password" name="password" placeholder="Password">
        </fieldset>

        <fieldset class="half">
            <h1>CONFIRM PASSWORD</h1>
            <input type="password" name="password_confirmation" placeholder="Confirm Password">
        </fieldset>

        <fieldset>
            <input type="submit" value="REGISTER">
        </fieldset>
    </form>

  </div>
</section>
@endsection
