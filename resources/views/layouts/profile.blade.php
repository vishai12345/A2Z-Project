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
      <a class="navbar-brand" href="#"><img src="{{ URL::asset('public/img/logo.svg') }}" style="margin: -8px;width: 100%;" class="img-responsive"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li><a href="#">Profile</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	   <li><span class="user-heading">{{ Auth::user()->role }}</span></li>
      <li><span class="user-heading">{{ Auth::user()->name }}</span></li>
        <li class="signup-btn"><a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a><form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</div>
</div>
<!-- menu-->
<!-- banner-text-->
<div class="container">
<div class="row">
    <div class="col-sm-6 profile-page">
        <h1>Welcome <span style="color:#0f84a0"><b>{{ Auth::user()->name }}!</b></span></h1>
    </div>
</div>
</div>

@endsection('content')