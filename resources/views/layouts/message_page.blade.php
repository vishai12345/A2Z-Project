@extends('layouts.default')

@section('content')
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
     <span class="close" data-dismiss="modal" aria-hidden="true">&times;</span>
        <img src="" class="imagepreview" style="width: 100%;height:50%" >  
    </div>
  </div>
</div>

<div class="form--header--bgcolor">
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
      <a class="navbar-brand" href="{{URL('/')}}"><img src="{{ URL::asset('public/img/logo.svg') }}" style="margin: -8px;width: 100%;" class="img-responsive"></a>
    </div>
	
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav nav--header">
       <li><a href="{{URL('/userprofile')}}">Profile</a></li>
       <li><a href="{{URL('/accprofile')}}">Account</a></li>
	   <li><a href="{{URL('/student/messages')}}">Messages</a></li>
       <li><a href="#" onclick="show_popup('request-form')">Request a tutor</a></li>
      </ul>
	  
     <ul class="nav navbar-nav navbar-right nav--header">
					<li class="round--image2 pop">
				<a href="#"><img id="dp2" src="{{URL::asset('public/img/user.svg')}}" width="30px" height="30px" alt="User"></a>
			
				</li>
				
<li class="dropdown header--dropdown__color">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >{{ Auth::user()->name }}<span class="caret"></span></a>
          <ul class="dropdown-menu profile-dropdown" >
            <li><a href="#">Referrals</a></li>
			
			<li><a href="{{ url('/logout') }}"
			onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Log out</a>
			<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
            </form>
            </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</div>
</div>

<div class="container">
<?php $flag = false; ?>
@foreach($message as $messages)
   <?php
	if($flag == false){
	 ?>
<h2 style="cursor:pointer" class="col-md-offset-1 link" id="{{$messages->id}}">{{$messages->from_name}}</h2>
   <?php 
   $flag = true; 
   }
   ?>
@endforeach
<div class="saw" style="display:none">
<div class="col-md-offset-2" id="add_class" style="height:50px">
<div id="msg_content" style="display:none">
@foreach($mssg as $msg)
<p class="alert alert-success">{{$msg->message_body}}</p>
@endforeach
</div>
</div>
<form class="col-md-8 col-md-offset-2">
<input type="text" class="input">
<span><button type="submit" class="btn btn-info">Reply</button></span>
</form>
</div>
</div>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<script>
$(document).ready(function(){
     $(".link").click(function(e) {
        e.preventDefault();
		$(".saw").show()
		$("#add_class").css({"height": "300px", "overflow": "auto","display":"block"});
		$('#msg_content').show();
		
        $('div.panel:visible').hide();
        $(this).next('div.panel').show();
		
		
		var result = $(this).find('div.span').text();
		console.log(result);
		$.ajax({
	url: "{{URL('/student/messageRead')}}",
	type: "get", //send it through get method
	data: { 
    ajaxid: 32, 
	},
	success: function(response) {
    //Do Something
  }
});
    });
});
</script>

<script>
$(document).ready(function(){
    $("#menu_drop").click(function(){
		$("#drop_menu").animate({padding: '10px'});
		 $("#drop_menu").toggle(300);	
			
    });
	
});
</script>
<script>
$(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
});
</script>

@endsection