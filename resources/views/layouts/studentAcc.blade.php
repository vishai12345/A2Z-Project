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
       <li><a href="{{URL('/student/dashboard')}}">DashBoard</a></li>
       <li><a href="{{URL('/student/account')}}">Account</a></li>
	   <li><a href="{{URL('/student/messages')}}">Messages</a></li>
	   <li><a href="{{URL('/student/tutor')}}">Tutors</a></li>
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
<div class="row">
    <div class="col-md-12 dashboard">
      <h2>Dashboard</h2>
      <button type="submit" class="View--Profile--button" onclick="show_popup('request-form-1')">Request a tutor</button>
    </div>
</div>
<div class="container">
  <div class="row">
    <h4>Your dashboard provides an overview of your upcoming lessons and any messages you have received.</h4>
  </div>
</div>
<div class="container">
  <div class="row">

      <div class="col-md-12 profile--tagline profile--float">
                <h2>Personal Details</h2>
                <form name="personal_form" id="personal_form" role="form">
				{{ csrf_field() }}
                    <div class="row profile--para">                    
                        <h4>Change Password</h4>
                        <p>To change the current user password, enter the new password in both fields.</p>             
                        <div class="col-md-6 req-text-field">
                          <input type="password" class="input" placeholder="Enter your new Password *" name="password" id="p_password" required>
                       </div>
                       <div class="col-md-6 req-text-field">
                          <input type="password" class="input" placeholder="Confirm the Password *" name="password_confirmation" id="p_con_pwd" required>
                       </div>
					   
                       <h4>Name</h4>
                       <div class="col-md-6 req-text-field form-padding">
                          <input type="text" class="input" value="{{$datas->firstname}}" placeholder="First Name *" name="p_fname" id="p_fname" required>
                       </div>
                       <div class="col-md-6 req-text-field form-padding">
                          <input type="text" class="input" value="{{$datas->lastname}}" placeholder="Last Name *" name="p_lname" id="p_lname" required>
                       </div>
                       <h4>Contact</h4>
                       <div class="col-md-6 req-text-field form-padding">
                          <input type="text" class="input" value="{{$datas->email}}" placeholder="Email *" name="p_email" id="p_email" required>
                       </div>
                       <div class="col-md-6 req-text-field form-padding">
                          <input type="text" class="input" value="{{$datas->mobile}}" placeholder="Mobile Number *" name="p_mobile" id="p_mobile" required>
                       </div>
                       <h4>Address</h4>
                       <div class="col-md-12 req-text-field form-padding">
                          <input type="text" class="input" placeholder="Street" name="street" id="street">
                       </div>
                       <div class="col-md-12 req-text-field form-padding">
                          <input type="text" class="input" placeholder="Town" name="town" id="town">
                       </div>
                       <div class="col-md-12 req-text-field form-padding">
                          <input type="text" class="input" placeholder="Country" name="country" id="country">
                       </div>
                       <div class="col-md-12 req-text-field form-padding">
                          <input type="text" class="input" placeholder="Postcode" name="postcode" id="postcode">
                       </div>
                       <div class="row">
                          <div class="col-md-4 col-md-offset-4 save--button">
                            <button class="profile--botton submit-botton" type="submit">Save</button>
                          </div>
                       </div>                    
                    </div>
                </form>
            </div>

  </div>
</div>   
</div>

		<div id="request-form-1" class="form-index">
         <form class="form-container" id="requestTutor" >
		  {{ csrf_field() }}
            <div class="regcont">
               <div class="row">
                  <div class="col-md-12 cross-index">
   <a class="cross-popup cross" href="javascript:hide_popup('request-form-1');" onclick="clear_form_elements(requestTutor)"><img src="{{ URL::asset('public/img/cancel.png') }}"></a>
                  </div>
                  <div class="col-md-12 text-center form--heading--margin">
                     <h2 class="reg-up">Request a Tutor</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-center">
                  <img class="form--request" src="{{ URL::asset('public/img/request.png') }}" alt="Login">
               </div>
               <div class="row">
                  <div class="col-md-6 req-text-field subject-padding">
                     <input type="text" class="input" placeholder="Subject (Level) *" name="subject" id="r_subject" required>
                  </div>
                  <div class="col-md-6 req-text-field postcode-padding">
                     <input type="text" class="input" placeholder="Postcode *" name="postalcode" id="r_postcode" required>
                  </div>
               </div>
               <div class="col-md-12 form-padding">
                  <textarea class="input" placeholder="Tell us more about what are you looking for" name="message"></textarea>
               </div>
               <div class="col-md-4 col-md-offset-4">
                  <button class="botton submit-botton" type="submit">Submit Request</button>
               </div>
               <div class="col-md-12">
                  <p style="float: left;">By clicking this button you're agreeing to our <a href="#"><span style="text-shadow: 0px 0px 2px red;">Terms & Conditions<span></a></p>
               </div>
            </div>
         </form>
      </div>

<script type="text/javascript">
$(document).ready(function(){
  $( "form#personal_form" ).on( "submit", function( event ) {
    event.preventDefault();
    $('.error-msg-login strong').html('');
    var formData = $( this ).serialize();
		 $.post('student_acc_data', formData, function(response) {
        if(response.status == 'success'){
				toastr.success('Student Data has been Stored Successfully.', 'Success', {timeOut: 3000})
        }else if(response.status == 'error'){
            $('.error-msg-login strong').html(response.message);
        }else{
          alert('unknown error.');
        }
    });
  });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $( "#requestTutor" ).on( "submit", function( event ) {
    event.preventDefault();
    $(this).find('.error-msg strong').html('');
    var formData = $( this ).serialize();
    $.post('tutor_request', formData, function(response) {  
                if(response.status == 'success'){
				toastr.success('Message has been sent Successfully.', 'Success', {timeOut: 2000});
				$("#requestTutor")[0].reset();
				$("#request-form-1").toggle(500);
                }else if(response.status == 'error'){
				toastr.error(response.message, 'Success', {timeOut: 2000});
                }else {
                  $.each(response, function(key, val){
                      $('.register-student-'+key).find('strong').html(val);
                  });
                }
            });
  });
});
</script>
@endsection