@extends('layouts.app')

@section('content')
<!-- resources/views/auth/register.blade.php -->


<section name="main" style="background-image:url('{!! URL::asset('assets/images/steven.png') !!}');">
  <div class="overlay">
    <form method="POST" action="">
        {!! csrf_field() !!}
        <fieldset>
            <h1>EMAIL</h1>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
        </fieldset>

        <fieldset>
            <h1>PASSWORD</h1>
            <input type="password" name="password" placeholder="Password">
        </fieldset>

        <fieldset>
            <input type="submit" value="LOGIN">
        </fieldset>
    </form>

  </div>
</section>
@endsection
