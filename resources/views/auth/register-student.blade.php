      <div id="request-form" class="form-index">
         <form class="form-container" id="requestForm" >
		 {{ csrf_field() }}
            <div class="regcont">
               <div class="row">
                  <div class="col-md-12 cross-index">
      <a class="cross-popup cross" href="javascript:hide_popup('request-form')" onclick="clear_form_elements(requestForm)">
					 <img src="{{URL('/public/img/cancel.png')}}"></a>
                  </div>
                  <div class="col-md-12 text-center form--heading--margin">
                     <h2 class="reg-up">Request a Tutor</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-center">
                  <img class="form--request" src="{{URL('/public/img/request.png')}}" alt="Login">
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
			   @if(Auth::user())
				 
			   @else
				    <div class="col-md-6 req-text-field form-padding f-error">
                  <input type="text" class="input div_hide" placeholder="First Name *" name="firstname" required>
               </div>
               <div class="col-md-6 req-text-field form-padding">
                  <input type="text" class="input div_hide" placeholder="Last Name *" name="lastname"  required>
               </div>
               <div class="col-md-6 form-padding">
                  <input type="text" class="input div_hide" placeholder="Email *" name="email"  required>
               </div>
               <div class="col-md-6 form-padding">
                  <input type="text" class="input div_hide" placeholder="Mobile Number *" name="mobile"  required>
               </div>
               <div class="col-md-6 col-md-offset-3 form-padding">
                  <input type="password" class="input div_hide" placeholder="Password *" name="password" >
               </div>
			   <div class="col-md-6 req-text-field form-padding f-error">
                  <input type="hidden" class="div_hide" name="role" id="role" value="student">
               </div>
			    <div class="col-md-6 req-text-field form-padding f-error">
                  <input type="hidden" class="div_hide" name="status" id="role" value="1">
               </div>
				   @endif
               <div class="col-md-4 col-md-offset-4">
                  <button class="botton submit-botton" id="myButton" data-loading-text="Submitting..." type="submit">Submit Request</button>
               </div>
               <div class="col-md-12">
                  <p style="float: left;">By clicking this button you're agreeing to our <a href="#"><span style="text-shadow: 0px 0px 2px red;">Terms & Conditions<span></a></p>
               </div>
            </div>
         </form>
      </div>

<script type="text/javascript">
$(document).ready(function(){
		 $('button[data-loading-text]')
		.on('click', function () {
        var btn = $(this)
        btn.button('loading')
		btn.css({"background-color":"#5ea85e","opacity":"1"});
        setTimeout(function () {
            btn.button('disable')
			btn.css("background-color", "#e24241");
        }, 3000)
    });
  $( "form#requestForm" ).on( "submit", function( event ) {
    event.preventDefault();
    $(this).find('.error-msg strong').html('');
    var formData = $( this ).serialize();
    $.post('register', formData, function(response) {  
                if(response.status == 'success'){

				toastr.success('You Are Registered Successfully.', 'Success', {timeOut: 1000});
				toastr.success('Message has been sent Successfully.', 'Success', {timeOut: 2000});
				window.setTimeout(function(){
					window.location.href = "{{ url('/student/dashboard') }}";
					}, 3000);
                }else {
                  $.each(response, function(key, val){
                      $('.register-student-'+key).find('strong').html(val);
                  });
                }
            });
  });
});
</script>