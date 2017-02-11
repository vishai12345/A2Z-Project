      <div id="request-form" class="form-index">
         <form class="form-container" id="requestForm">
		 {{ csrf_field() }}
            <div class="regcont">
               <div class="row">
                  <div class="col-md-12 cross-index">
                     <a class="cross-popup cross" href="javascript:hide_popup('request-form');changeurl();"><img src="public/img/cancel.png"></a>
                  </div>
                  <div class="col-md-12 text-center form--heading--margin">
                     <h2 class="reg-up">Request a Tutor</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-center">
                  <img class="form--request" src="public/img/request.png" alt="Login">
               </div>
               <div class="row">
                  <div class="col-md-6 req-text-field subject-padding">
                     <input type="text" class="input" placeholder="Subject (Level) *" name="r_subject" id="r_subject" required>
                  </div>
                  <div class="col-md-6 req-text-field postcode-padding">
                     <input type="text" class="input" placeholder="Postcode *" name="r_postcode" id="r_postcode" required>
                  </div>
               </div>
               <div class="col-md-12 form-padding">
                  <textarea class="input" placeholder="Tell us more about what are you looking for"></textarea>
               </div>
               <div class="col-md-6 req-text-field form-padding f-error">
                  <input type="text" class="input" placeholder="First Name *" name="r_fname" id="r_fname" required>
               </div>
               <div class="col-md-6 req-text-field form-padding">
                  <input type="text" class="input" placeholder="Last Name *" name="r_lname" id="r_lname" required>
               </div>
               <div class="col-md-6 form-padding">
                  <input type="text" class="input" placeholder="Email *" name="r_email" id="r_email" required>
               </div>
               <div class="col-md-6 form-padding">
                  <input type="text" class="input" placeholder="Mobile Number *" name="r_mobile" id="r_mobile" required>
               </div>
               <div class="col-md-6 col-md-offset-3 form-padding">
                  <input type="text" class="input" placeholder="Password *" name="r_password" id="r_password">
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