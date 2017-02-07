@extends('layouts.default')

@section('content')
<div class="top-banner-profile">
<div class="container">
<!-- menu-->
<nav class="navbar navbar-default">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="{{ URL::asset('public/img/logo.svg') }}" style="width: 170px;margin: -8px;width: 233px !important;" class="img-responsive"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <li><a><button onClick="show_popup('request-form')">Request a tutor</button></a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
  <li><a><button onClick="show_popup('login-form')">TUTOR LOG IN</button></a></li>
    <li class="signup-btn"><a><button onClick="show_popup('signup-form')">BECOME A TUTOR </button></a></li>
    
  </ul>
</div><!-- /.navbar-collapse -->
</nav>
</div>
</div>


<div class="container">
<div class="row">
    <div class="col-md-12 reset-pwd">
    <form role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}
        <h1 class="reset-form-padding reset-center"> Reset Your Password</h1>
        <p class="reset-form-padding {{ $errors->has('email') ? ' has-error' : '' }}"> To reset your password, please enter your email. We will provide you new password </p>
        <div class="col-md-12 reset-form-padding">
         <input type="email" id="email" class="input" placeholder="Enter Your Email" name="Email" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </div>
        <div class="col-md-12 reset-form-padding">
        <div class="reset-button">
        <button type="submit">
            Send Reset
        </button>
        </div>
        </div>
    </form>
    </div>
</div>
</div>
@endsection