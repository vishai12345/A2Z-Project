      <div id="student_request_form" class="form-index" style="display:none">
         <form class="form-container" id="student_request" >
		 {{ csrf_field() }}
            <div class="regcont">
               <div class="row">
                  <div class="col-md-12 cross-index">
                     <a class="cross-popup cross" href="javascript:hide_popup('student_request_form')"><img src="public/img/cancel.png"></a>
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
                     <input type="text" class="input" placeholder="Subject (Level) *" name="subject" id="r_subject" >
                  </div>
                  <div class="col-md-6 req-text-field postcode-padding">
                     <input type="text" class="input" placeholder="Postcode *" name="postal_code" id="r_postcode" >
                  </div>
               </div>
               <div class="col-md-12 form-padding">
                  <textarea class="input" placeholder="Tell us more about what are you looking for" name="message" ></textarea>
               </div>
			   <div class="col-md-6 req-text-field form-padding f-error">
                  <input type="hidden" class="div_hide" name="role" id="role" value="student">
               </div>
			    <div class="col-md-6 req-text-field form-padding f-error">
                  <input type="hidden" class="div_hide" name="status" id="role" value="1">
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
  $( "form#student_request" ).on( "submit", function( event ) {
    event.preventDefault();
    $(this).find('.error-msg strong').html('');
    var formData = $( this ).serialize();
    $.post('register', formData, function(response) {  
                if(response.status == 'success'){
				toastr.success('Message has been sent Successfully.', 'Success', {timeOut: 2000});
                }else {
                  $.each(response, function(key, val){
                      $('.register-student-'+key).find('strong').html(val);
                  });
                }
            });
  });
});
</script>