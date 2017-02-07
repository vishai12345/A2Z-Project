<div id="request-form">
<form class="form-container"  role="form" id="formRegisterStudent">
 {{ csrf_field() }}
<div class="regcont">
      <div class="row">
      <div class="col-md-12">
        <a class="cross-popup cross" href="javascript:hide_popup('request-form');"><img src="{{ URL::asset('public/img/cancel.png') }}"></a>
      </div>
      <div class="col-md-12 text-center">
      <h2>Request a Tutor</h2>
      </div>
      </div>
</div>
<div class="row">
<div class="col-md-12 text-center">
    <img class="imgy" src="{{ URL::asset('public/img/request.png') }}" style="width: 21%;" alt="Login">
</div>

<div class="col-md-6 text-center">
    <input type="text" id="subject-level" name="subject-level" class="input" placeholder="Subject (Level)">
</div>
<div class="col-md-6">
     <input type="text" id="postcode" name="postcode" class="input" placeholder="Postcode">
</div>
<div class="col-md-12 text-center">
    <textarea class="input" id="tellus" name="tellus" placeholder="Tell us more about what are you looking for"></textarea>
</div>
<div class="col-md-6 text-center">
    <input type="text" class="input" id="firstname" name="firstname" placeholder="First Name" required>
    <span class="help-block error-msg register-student-firstname" style="color:red">
            <strong></strong>
    </span>
</div>
<div class="col-md-6">
     <input type="text" class="input" id="lastname" name="lastname" placeholder="Last Name" required>
     <span class="help-block error-msg register-student-lastname" style="color:red">
            <strong></strong>
    </span>
</div>
<div class="col-md-6 text-center">
    <input type="text" class="input" id="email" name="email" placeholder="Email" required>
    <span class="help-block error-msg register-student-email" style="color:red">
            <strong></strong>
    </span>
</div>
<div class="col-md-6">
     <input type="text" class="input" id="mobile" name="mobile" placeholder="Mobile Number" required>
</div>
<div class="col-md-6">
     <input type="password" class="input" id="password" name="password" placeholder="Password" required>
     <span class="help-block error-msg register-student-password" style="color:red">
            <strong></strong>
    </span>
</div>
<div class="col-md-6" style="display:none">
     <input type="text" class="input" id="role" name="role" value="student" readonly>
</div>
<div class="col-md-6">
    <input class="botton submit-botton" type="submit" value="Submit Request"/>
</div>
<div class="col-md-12">
  <p style="float: left;">By clicking this button you're agreeing to our <span style="text-shadow: 0px 0px 2px red;">Terms & Conditions<span></p>
</div>
</div>
</form>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $( "form#formRegisterStudent" ).on( "submit", function( event ) {
    event.preventDefault();
    $(this).find('.error-msg strong').html('');
    var formData = $( this ).serialize();
    $.post('register', formData, function(response) {  
                if(response == 'success'){
                  window.location = "{{ url('/home') }}";
                }else{
                  $.each(response, function(key, val){
                      $('.register-student-'+key).find('strong').html(val);
                  });
                }
            });
  });
});
</script>