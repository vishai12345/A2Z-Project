   @extends('layouts.default')

@section('content')
   		<div id="request-form-1" class="form-index">
         <form class="form-container" id="requestTutor">
            <div class="regcont">
               <div class="row">
                  <div class="col-md-12 cross-index">
                     <a class="cross-popup cross" href="javascript:hide_popup('request-form-1');"><img src="{{ URL::asset('public/img/cancel.png') }}"></a>
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
                     <input type="text" class="input" placeholder="Subject (Level) *" name="r_subject" id="r_subject" required>
                  </div>
                  <div class="col-md-6 req-text-field postcode-padding">
                     <input type="text" class="input" placeholder="Postcode *" name="r_postcode" id="r_postcode" required>
                  </div>
               </div>
               <div class="col-md-12 form-padding">
                  <textarea class="input" placeholder="Tell us more about what are you looking for"></textarea>
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

@endsection