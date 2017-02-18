 <div id="signup-form" class="form-index">
<form class="form-container" role="form" id="formRegisterTutor">
 {{ csrf_field() }}
<div class="regcont">
  <div class="row">
      <div class="col-md-12">
<a class="cross-popup cross" href="javascript:hide_popup('signup-form');changeurl();" onclick="clear_form_elements(formRegisterTutor)"><img src="{{ URL::asset('public/img/cancel.png') }}"></a>
      </div>
      <div class="col-md-12 text-center">
        <h2>Want to become a Tutor?</h2>
      </div>
  </div>
</div>
<div class="row">

    <div class="col-md-12 text-center">
      <img src="{{ URL::asset('public/img/signup.png') }}" alt="Login" class="avatar">
    </div>
</div>
<div class="row">
<div class="col-md-12 {{ $errors->has('name') ? ' has-error' : '' }}">
  <label><b>Username <span style="color:red">*<span></b></label>
</div>
<div class="col-md-12">
    <input type="text" class="input" id="name" value="{{ old('name') }}" placeholder="Username" name="name" required autofocus>
      <span class="help-block error-msg register-tutor-name" style="color:red">
            <strong></strong>
        </span>
</div>
<div class="col-md-12 {{ $errors->has('email') ? ' has-error' : '' }}">
   <label><b>Email <span style="color:red">*<span></b></label>
</div>
<div class="col-md-12">
    <input type="text" id="email" class="input" placeholder="Email" name="email" value="{{ old('email') }}" required>
    <span class="help-block error-msg register-tutor-email" style="color:red">
            <strong></strong>
    </span>
</div>
<div class="col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
    <label><b>Password <span style="color:red">*<span></b></label>
</div>
<div class="col-md-12">
    <input type="password" id="password" class="input" placeholder="Password" name="password" required>
    <span class="help-block error-msg register-tutor-password" style="color:red">
            <strong></strong>
    </span>
</div>

<div class="col-md-12">
    <label><b>Confirm Password <span style="color:red">*<span></b></label>

    </div>
<div class="col-md-12">
        <input id="password-confirm" class="input" placeholder="Confirm Password" type="password" name="password_confirmation" required>
</div>

<div class="col-md-12" style="display:none;">
    <input type="text" class="input" value="tutor" name="role" readonly>
</div>
<div class="col-md-12" style="display:none;">
    <input type="text" class="input" value="{{ md5( rand(0,1000))}}" name="verification_code" readonly>
</div>

<div class="col-md-12" style="display:none;">
    <input type="text" class="input" value="0" name="status" readonly>
</div>
<div class="col-md-12">
     <input class="botton" type="submit" value="Register &#10148"/>
</div>
<div class="col-md-12">
  <span class="psw"> <a href="#">Already have an account? Login</a></span>
</div>
</div>
</form>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $( "form#formRegisterTutor" ).on( "submit", function( event ) {
    event.preventDefault();
    $(this).find('.error-msg strong').html('');
    var formData = $( this ).serialize();
    $.post('register', formData, function(response) {  
                if(response.status == 'success'){
                  window.location = "{{ url('/thankyou') }}";
                }else{
                  $.each(response, function(key, val){
                      $('.register-tutor-'+key).find('strong').html(val);
                  });
                }
            });
  });
});
</script>