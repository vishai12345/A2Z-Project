@extends('layouts.default')

@section('content')

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form name="tagForm" id="tagForm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
		<img src="{{ URL::asset('public/img/cancel.png') }}"></span></button>
        <h2 class="modal-title" id="myModalLabel">Edit your tagline</h2>
      </div>
      <div class="modal-body">
        <div class="row">
               <div class="col-md-12 tagline--padding">
                  <p><b>A short, snappy summary to promote yourself e.g. "Enthusiastic GCSE Maths & English Tutor"</b></p>
               </div>
               <div class="col-md-12 tagline--padding">
                  <input type="text" class="input" placeholder="Tagline" name="tagline" id="tagline" required>
               </div>              
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button"  data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
  <div class="modal-dialog" role="document">
  <form name="rateForm" id="rateForm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
		<img src="{{ URL::asset('public/img/cancel.png') }}"></span></button>
        <h2 class="modal-title" id="myModalLabel2">Set your Hourly Rate</h2>
      </div>
      <div class="modal-body">
        <div class="row">
               <div class="col-md-12 tagline--padding">
                  <p><b>This is the rate which will appear on your profile and the rate parents and students will pay per hour. We take a commission from this rate for our service in helping you build your tuition business.</b></p>
               </div>
               <div class="col-md-12 tagline--padding rate--form--para">
                 <input type="text" class="input rate--input--sign rateInput" value="£" readonly><input type="text" class="input rate--input--number" placeholder="Rate" name="rate" id="rate" required>
               </div>
               <div class="col-md-12 tagline--padding rate--form--para">
               <p><b>You will receive...</b></p>
               </div>
               <div class="col-md-12 tagline--padding rate--form--para">
               <p>1-99 lessons taught</p>
                 <input type="text" class="rate--input--sign" value="£" readonly><input type="text" class="input rate--input--number" placeholder="Rate" name="a_lesson" id="a_lesson" required>
               </div>
               <div class="col-md-12 tagline--padding rate--form--para">
               <p>100-299 lessons taught</p>
                 <input type="text" class="rate--input--sign" value="£" readonly><input type="text" class="input rate--input--number" placeholder="Rate" name="b_lesson" id="b_lesson" required>
               </div> 
               <div class="col-md-12 tagline--padding rate--form--para">
               <p>300+ lessons taught</p>
                 <input type="text" class="rate--input--sign" value="£" readonly><input type="text" class="input rate--input--number" placeholder="Rate" name="c_lesson" id="c_lesson" required>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
  <div class="modal-dialog" role="document">
  <form name="bioForm" id="bioForm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
		<img src="{{ URL::asset('public/img/cancel.png') }}"></span></button>
        <h2 class="modal-title" id="myModalLabel">Edit your bio</h2>
      </div>
      <div class="modal-body">
        <div class="row">
               <div class="col-md-12 tagline--padding">
                  <p><b>Write a professional personal statement, which sets out your experience and teaching style. This is your opportunity to sell yourself to potential clients.</b></p>
               </div>
               <div class="col-md-12 tagline--padding">
                  <textarea type="textarea" style="height: 150px;width: 100%;" class="input" placeholder="Bio" name="bio" id="bio" required></textarea>
               </div>              
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4">
  <div class="modal-dialog" role="document">
  <form name="subjectForm" id="subjectForm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
		<img src="{{ URL::asset('public/img/cancel.png') }}"></span></button>
        <h2 class="modal-title" id="myModalLabel">Edit your subjects</h2>
      </div>
      <div class="modal-body">
        <div class="row">
               <div class="col-md-12 tagline--padding">
                  <p><b>Add the subjects and ALL levels that your are confident to tutor at. Scroll to the right to see all subjects that we offer.</b></p>
               </div>
                <ul class="nav mynav nav-tabs mynav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#maths_tab" role="tab" aria-controls="maths_tab">Maths</a></li>
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#english_tab" role="tab" aria-controls="maths_tab">English</a></li>
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#science_tab" role="tab" aria-controls="science_tab">Science</a></li>
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#lang_tab" role="tab" aria-controls="lang_tab">Languages</a></li>
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#human_tab" role="tab" aria-controls="lang_tab">Humanities (including the arts) and Social Sciences</a></li>
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#business_tab" role="tab" aria-controls="comp_tab">Business and Professional Studies</a></li>
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#comp_tab" role="tab" aria-controls="comp_tab">Computing</a></li>
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#music_tab" role="tab" aria-controls="music_tab">Music</a></li>
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#admission_tab" role="tab" aria-controls="admission_tab">Admissions</a></li>
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#sports_tab" role="tab" aria-controls="sports_tab">Sports, Dance and Fitness</a></li>
               </ul>
               <!--Tab Contenet-->
               <div class="tab-content">
               <!--Maths-->
               <div class="tab-pane active" id="maths_tab" role="tabpanel">
               <div class="col-md-12 tagline--padding">
                  <h3>Maths</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Further Maths</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Mechanics</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Statistics</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Pure Maths</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               <!--Maths-->
               <!--English-->
               <div class="tab-pane" id="english_tab" role="tabpanel">
               <div class="col-md-12 tagline--padding">
                  <h3>English</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>English Literature</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Phonics</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Reading Comprehension</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Spelling, Punctuation and Grammar</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               <!--English-->
               <!-- Science-->
               <div class="tab-pane" id="science_tab" role="tabpanel">
               <div class="tab-content">
               <div class="col-md-12 tagline--padding">
                  <h3>Science</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Biology</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Chemistry</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Physics</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Astronomy</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Environmental Science</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Geology</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               </div>
               <!--Science-->
               <!-- Languages-->
               <div class="tab-pane" id="lang_tab" role="tabpanel">
               <div class="tab-content">
               <div class="col-md-12 tagline--padding">
                  <h3>Afrikaans</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Arabic</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Bengali</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Bulgarian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Cantonese</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Catalan</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Croatian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Czech</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Danish</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Dutch</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>English as a Foreign Language</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Estonian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Farsi</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Finnish</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>French</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Gaelic</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>German</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Greek (Classical)</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Greek (Modern)</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Gujarati</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Hebrew</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Hindi</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Hungarian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Irish</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Italian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Japanese</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Kashmiri</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Korean</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Latin</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Lithuanian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Malay</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Mandarin</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Norwegian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Persian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Polish</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Portuguese</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Punjabi</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Romanian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Russian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Serbian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Sign Language</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Slovak</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Spanish</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Swedish</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Tamil</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Telugu</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Thai</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Turkish</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Ukrainian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Urdu</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Vietnamese</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Welsh</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               </div>
               <!-- Languages-->
               <!-- Humanities (including the arts) and Social Sciences-->
               <div class="tab-pane" id="human_tab" role="tabpanel">
               <div class="tab-content">
               <div class="col-md-12 tagline--padding">
                  <h3>Art</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Anthropology</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Archaeology</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Citizenship</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Classics</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Design and Technology</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Electronics</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Food Technology</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Graphic Design</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Manufacturing</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Resistant Materials</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Systems and Control</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Textiles</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Economics</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Film Studies</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Gender and Sexuality Studies</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Geography</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>History</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>History of Art</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Home Economics</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Child Development</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Food and Nutrition</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Humanities</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Performing Arts</h3>
                    <div id="ck-button">
                        <<label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Philosophy</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Photography</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Psychology</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Religious Education</h3>
                    <div id="ck-button">
                        <<label><input type="checkbox" value="1"><span>Primary</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Sociology</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Politics</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                        <label><input type="checkbox" value="1"><span>Modern Studies</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               </div>
               <!-- Humanities (including the arts) and Social Sciences-->
               <!-- Business and Professional Studies-->
               <div class="tab-pane" id="business_tab" role="tabpanel">
               <div class="tab-content">
               <div class="col-md-12 tagline--padding">
                  <h3>Accounting</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Agriculture</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Business Studies</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Construction</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Engineering</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>General Studies</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Health and Social Care</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Hospitality</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Journalism</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Law</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Leisure Studies</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Leisure and Tourism</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Media Studies</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Medicine</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Neuroscience</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Travel and Tourism</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               </div>
               <!-- Business and Professional Studies-->
               <!-- Computing-->
               <div class="tab-pane" id="comp_tab" role="tabpanel">
               <div class="tab-content">
               <div class="col-md-12 tagline--padding">
                  <h3>Computing</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS2</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>ICT</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS2</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Programming</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>KS2</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>IB</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                        <label><input type="checkbox" value="1"><span>Adobe Acrobat</span></label>
                        <label><input type="checkbox" value="1"><span>Adobe Dreamweaver</span></label>
                        <label><input type="checkbox" value="1"><span>Adobe Fireworks</span></label>
                        <label><input type="checkbox" value="1"><span>Adobe Flash</span></label>
                        <label><input type="checkbox" value="1"><span>Adobe Illustrator</span></label>
                        <label><input type="checkbox" value="1"><span>Adobe Indesign</span></label>
                        <label><input type="checkbox" value="1"><span>Adobe Lightroom</span></label>
                        <label><input type="checkbox" value="1"><span>Adobe Photoshop</span></label>
                        <label><input type="checkbox" value="1"><span>Adobe Premiere</span></label>
                        <label><input type="checkbox" value="1"><span>Android Development</span></label>
                        <label><input type="checkbox" value="1"><span>Apple</span></label>
                        <label><input type="checkbox" value="1"><span>ASP.net</span></label>
                        <label><input type="checkbox" value="1"><span>Autocad</span></label>
                        <label><input type="checkbox" value="1"><span>Autodesk</span></label>
                        <label><input type="checkbox" value="1"><span>Basic IT Skills</span></label>
                        <label><input type="checkbox" value="1"><span>Computer Graphics</span></label>
                        <label><input type="checkbox" value="1"><span>Computer Literacy</span></label>
                        <label><input type="checkbox" value="1"><span>Computer Programming</span></label>
                        <label><input type="checkbox" value="1"><span>Databases</span></label>
                        <label><input type="checkbox" value="1"><span>HTML</span></label>
                        <label><input type="checkbox" value="1"><span>Information Security</span></label>
                        <label><input type="checkbox" value="1"><span>Information Technology</span></label>
                        <label><input type="checkbox" value="1"><span>Java</span></label>
                        <label><input type="checkbox" value="1"><span>Matlab</span></label>
                        <label><input type="checkbox" value="1"><span>Microsoft Access</span></label>
                        <label><input type="checkbox" value="1"><span>Microsoft Excel</span></label>
                        <label><input type="checkbox" value="1"><span>Microsoft Office</span></label>
                        <label><input type="checkbox" value="1"><span>Microsoft Outlook</span></label>
                        <label><input type="checkbox" value="1"><span>Microsoft Powerpoint</span></label>
                        <label><input type="checkbox" value="1"><span>Microsoft Word</span></label>
                        <label><input type="checkbox" value="1"><span>PHP</span></label>
                        <label><input type="checkbox" value="1"><span>Python</span></label>
                        <label><input type="checkbox" value="1"><span>Ruby</span></label>
                        <label><input type="checkbox" value="1"><span>Search Engine Optimisation</span></label>
                        <label><input type="checkbox" value="1"><span>SQL</span></label>
                        <label><input type="checkbox" value="1"><span>Web Design</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               </div>
               <!-- Computing-->
               <!-- Music-->
               <div class="tab-pane" id="music_tab" role="tabpanel">
               <div class="tab-content">
               <div class="col-md-12 tagline--padding">
                  <h3>Music</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Primery</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>AS/A-Level</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Music Technology</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Music Theory</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Composition</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Accordian</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Bagpipes</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Banjo</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Bass Guitar</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Bassoon</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Cello</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div><div class="col-md-12 tagline--padding">
                  <h3>Clarinet</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Conducting</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Cornet</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Double Bass</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Drums</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Euphonium</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Flugel Horn</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Flute</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>French Horn</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Guitar</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Harmonica</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Harp</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Harpsichord</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Keyboard</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Mandolin</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Oboe</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Organ</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Percussion</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Piano</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Piccolo</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Recorder</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Saxophone</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Singing</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Sitar</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Tenor Horn</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Trombone</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Trumpet</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Tuba</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Ukulele</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Viola</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-12 tagline--padding">
                  <h3>Violin</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Biginner</span></label>
                        <label><input type="checkbox" value="1"><span>Intermediate</span></label>
                        <label><input type="checkbox" value="1"><span>Advanced</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               </div>
               <!-- Music-->
               <!-- Admissions-->
               <div class="tab-pane" id="admission_tab" role="tabpanel">
               <div class="tab-content">
               <div class="col-md-12 tagline--padding">
                <h3>Admissions</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Admissions (Primary)</span></label>
                        <label><input type="checkbox" value="1"><span>Seven Plus (7+)</span></label>
                        <label><input type="checkbox" value="1"><span>Eight Plus (8+)</span></label>
                        <label><input type="checkbox" value="1"><span>Eleven Plus (11+)</span></label>
                        <label><input type="checkbox" value="1"><span>Non-verbal reasoning</span></label>
                        <label><input type="checkbox" value="1"><span>Verbal reasoning</span></label>
                        <label><input type="checkbox" value="1"><span>Common Entrance Admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Classics</span></label>
                        <label><input type="checkbox" value="1"><span>English (Common Entrance)</span></label>
                        <label><input type="checkbox" value="1"><span>Geography (Common Entrance)</span></label>
                        <label><input type="checkbox" value="1"><span>History (Common Entrance)</span></label>
                        <label><input type="checkbox" value="1"><span>Religious Studies (Common Entrance)</span></label>
                        <label><input type="checkbox" value="1"><span>Science (Common Entrance)</span></label>
                        <label><input type="checkbox" value="1"><span>Benenden School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Charterhouse School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>City of London School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Dulwich College school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Eltham College school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Emmanuel College Wimbledon school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Eton admission</span></label>
                        <label><input type="checkbox" value="1"><span>Eton College admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Francis Holland School admission</span></label>
                        <label><input type="checkbox" value="1"><span>Godolphin & Latymer School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Haberdasher's Aske's School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Harrow admission</span></label>
                        <label><input type="checkbox" value="1"><span>Harrow School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Henrietta Barnett School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Highgate School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>James Allen's Girls' School admissions (JAGS)</span></label>
                        <label><input type="checkbox" value="1"><span>King's College Wimbledon school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Lady Eleanor Holles School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Latymer School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Lycee Francais Charles de Gaulle school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Marlborough College school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Oundle School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Putney High School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Queen's Gate school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Radley College school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Sevenoaks School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>St Paul's admission</span></label>
                        <label><input type="checkbox" value="1"><span>St. Mary's Ascot school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>St. Paul's Girls' School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>St. Paul's School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>The Latymer School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Tonbridge School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Wellington College school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Westminster admission</span></label>
                        <label><input type="checkbox" value="1"><span>Westminster School admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Winchester admission</span></label>
                        <label><input type="checkbox" value="1"><span>Winchester College school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Wycombe Abbey admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Wycombe Abbey school admissions</span></label>
                        <label><input type="checkbox" value="1"><span>Oxbridge Admissions</span></label>
                        <label><input type="checkbox" value="1"><span>School Advice</span></label>
                        <label><input type="checkbox" value="1"><span>University Advice</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               </div>
               <!-- Admissions-->
               <!-- Sports, Dance and Fitness-->
               <div class="tab-pane" id="sports_tab" role="tabpanel">
               <div class="tab-content">
               <div class="col-md-12 tagline--padding">
                <h3>Sports, Dance and Fitness</h3>
                    <div id="ck-button">
                        <label><input type="checkbox" value="1"><span>Sports</span></label>
                        <label><input type="checkbox" value="1"><span>Archery</span></label>
                        <label><input type="checkbox" value="1"><span>Athletics</span></label>
                        <label><input type="checkbox" value="1"><span>Badminton</span></label>
                        <label><input type="checkbox" value="1"><span>Basketball</span></label>
                        <label><input type="checkbox" value="1"><span>Boxing</span></label>
                        <label><input type="checkbox" value="1"><span>Canoeing</span></label>
                        <label><input type="checkbox" value="1"><span>Climbing</span></label>
                        <label><input type="checkbox" value="1"><span>Cricket</span></label>
                        <label><input type="checkbox" value="1"><span>Cycling</span></label>
                        <label><input type="checkbox" value="1"><span>Fencing</span></label>
                        <label><input type="checkbox" value="1"><span>Football</span></label>
                        <label><input type="checkbox" value="1"><span>Golf</span></label>
                        <label><input type="checkbox" value="1"><span>Gymnastics</span></label>
                        <label><input type="checkbox" value="1"><span>Hockey</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                        <label><input type="checkbox" value="1"><span>Primery</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                        <label><input type="checkbox" value="1"><span>Primery</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                        <label><input type="checkbox" value="1"><span>Primery</span></label>
                        <label><input type="checkbox" value="1"><span>KS3</span></label>
                        <label><input type="checkbox" value="1"><span>GCSE</span></label>
                        <label><input type="checkbox" value="1"><span>Degree</span></label>
                    </div>
               </div>
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
               </div>
               </div>
               <!-- Sports, Dance and Fitness-->
               </div>
               <!--Tab Contenet-->
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<!-- Travel-->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6">
  <div class="modal-dialog" role="document">
  <form name="travelForm" id="travelForm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
		<img src="{{ URL::asset('public/img/cancel.png') }}"></span></button>
        <h2 class="modal-title" id="myModalLabel">Edit your travel policy</h2>
      </div>
      <div class="modal-body">
        <div class="row">
               <div class="col-md-12 tagline--padding">
                  <p><b>State how far you are willing to travel away from a given address.</b></p>
               </div>
               <div class="col-md-12 tagline--padding">
                    <p>Distance*</p>
                  <input type="text" class="input" placeholder="Radius" name="radius" id="radius" required>
               </div> 
               <div class="col-md-12 tagline--padding">
                    <p>Address*</p>
                  <input type="text" class="input" placeholder="Street" name="street" id="street" required>
                  <input type="text" class="input" placeholder="Town" name="town" id="town" required>
                  <input type="text" class="input" placeholder="Country" name="country" id="country" required>
                  <input type="text" class="input" placeholder="Postcode" name="postcode" id="postcode" required>
               </div>                                               
               <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
               </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<!-- Identification-->
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel7">
  <div class="modal-dialog" role="document">
  <form name="identiForm" id="identiForm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
		<img src="{{ URL::asset('public/img/cancel.png') }}"></span></button>
            <h2>Identification</h2>
                <div class="col-md-12 identifictaion--box">
                    <div class="col-md-12"><h3>Important information</h3></div>
                    <div class="col-md-12"><p>Please ensure this information is correct. Once your identification has been verified, these details cannot be changed.</p></div>   
                </div> 
            <div class="col-md-12 profile--para">
            <form name="identification_form" id="identification_form">
                <h4>Legal name (required)</h4>
               <div class="col-md-6 req-text-field form-padding">
                  <input type="text" class="input" placeholder="First Name *" name="i_fname" id="i_fname" required>
               </div>
               <div class="col-md-6 req-text-field form-padding">
                  <input type="text" class="input" placeholder="Last Name *" name="i_lname" id="i_lname" required>
               </div>
               <h4>Date of Birth (required)</h4>
               <div class="col-md-4 req-text-field form-padding">
                  <input type="text" class="input" placeholder="Day *" name="i_day" id="i_day" required>
               </div>
               <div class="col-md-4 req-text-field form-padding">
                  <input type="text" class="input" placeholder="Month *" name="i_month" id="i_month" required>
               </div>
               <div class="col-md-4 req-text-field form-padding">
                  <input type="text" class="input" placeholder="Year *" name="i_year" id="i_year" required>
               </div>
               <h4>Identification Document</h4>
               <p>Please ensure that your ID matches the requirements below, otherwise the ID check will fail and this will delay your application:</p>
               <ul>
               <li>Upload a picture of your passport or driving license. National ID cards or residence permits will not be accepted.</li>
               <li>Ensure that your ID is in colour, not black and white.</li>
               <li>Files must be less than 4mb in size and in photographic format (either JPG, JPEG or PNG). If you have a scanned copy such as a PDF, convert it to a JPG using this free service.</li>
               </ul>
               <div class="col-md-12 upload--button">
                   <p>Drop a file here or click to upload your ID</p>
               </div>
               <div class="col-md-12">
                  <div class="col-md-4 col-md-offset-4">
                  <button class="profile--botton submit-botton" type="submit">Upload & Save</button></div>
               </div>
            </div>
        </div>
     </div>
   </form>
  </div>
</div>
<!-- Tuition Fees-->
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8">
  <div class="modal-dialog" role="document">
  <form name="tuitionFeesForm" id="tuitionFeesForm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
		<img src="{{ URL::asset('public/img/cancel.png') }}"></span></button>
            <h2>View and Edit Your Tuition Fees</h2>
                <div class="col-md-12 tuitionFees--Table">
                    <div class="col-md-3"><h3>Subject</h3></div>
                    <div class="col-md-3"><h3>Category</h3></div>
                    <div class="col-md-3"><h3>Levels</h3></div>
                    <div class="col-md-3"><h3>Tuition Fees</h3></div>   
                </div> 
                <div class="col-md-12 tuitionFees--Table">
                    <div class="col-md-3"><p>Maths</p></div>
                    <div class="col-md-3"><p>Statistics</p></div>
                    <div class="col-md-3"><p>Degree</p></div>
                    <div class="col-md-3"><p><b>£ </b><input type="text" value="500"></p></div>  
                </div>
                <div class="col-md-12 tuitionFees--Table">
                    <div class="col-md-3"><p>English</p></div>
                    <div class="col-md-3"><p>English Literature</p></div>
                    <div class="col-md-3"><p>A-Level</p></div>
                    <div class="col-md-3"><p><b>£ </b><input type="text" value="400"></p></div>    
                </div>
                <div class="col-md-12 tuitionFees--Table">
                    <div class="col-md-3"><p>Science</p></div>
                    <div class="col-md-3"><p>Chemistry</p></div>
                    <div class="col-md-3"><p>IB</p></div>
                    <div class="col-md-3"><p><b>£ </b><input type="text" value="200"></p></div>  
                </div>
                <div class="col-md-12 tuitionFees--Table">
                    <div class="col-md-3"><p>Languages</p></div>
                    <div class="col-md-3"><p>French</p></div>
                    <div class="col-md-3"><p>KS3</p></div>
                    <div class="col-md-3"><p><b>£ </b><input type="text" value="300"></p></div>   
                </div>
                <div class="col-md-12 tuitionFees--Table">
                    <div class="col-md-3"><p>Computing</p></div>
                    <div class="col-md-3"><p>ICT</p></div>
                    <div class="col-md-3"><p>KS3</p></div>
                    <div class="col-md-3"><p><b>£ </b><input type="text" value="200"></p></div> 
                </div>
                <div class="col-md-12 tuitionFees--Table">
                    <div class="col-md-3"><p>Computing</p></div>
                    <div class="col-md-3"><p>Programming</p></div>
                    <div class="col-md-3"><p>Web Design</p></div>
                    <div class="col-md-3"><p><b>£ </b><input type="text" value="300"></p></div>  
                </div>
                <div class="col-md-6 login--form--button">
                  <input class="profile--botton" type="submit" value="Save"/>
               </div>
               <div class="col-md-6 login--form--button">
                  <button class="profile--botton" type="button" data-dismiss="modal" class="cancelbtn">Close</button>
               </div>
        </div>
     </div>
   </form>
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
      <a class="navbar-brand" href="#"><img src="{{ URL::asset('public/img/logo.svg') }}" style="margin: -8px;width: 100%;" class="img-responsive"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav nav--header">
       <li><a href="profile.html">Profile</a></li>
       <li><a href="Profile-Account.html">Account</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right nav--header">
      <li class="round--image2"><img id="dp2" src="{{ URL::asset('public/img/user.svg') }}" width="30px" height="30px" alt="User"></li>
      <li class="dropdown header--dropdown__color">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Name <span class="caret"></span></a>
          <ul class="dropdown-menu profile-dropdown">
            <li><a href="#">Referrals</a></li>
            <li><a href="#">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</div>
</div>


<!-- menu-->
<!-- banner-text-->
<div class="container">
<div class="row">
    <div class="col-sm-12 profile--tagline text-center">
        <h3> Click here to set your tagline <button type="button" style="color: black;" data-toggle="modal" data-target="#myModal"><a href="#" class="profile--edit"><img src="{{ URL::asset('public/img/logo.svg') }}" width="20px">Edit</a></button>
        </h3> 
    </div>
    <div class="col-md-12 profile--borderLine"></div>
    <div class="col-md-4">
        <div class="round--image"><div>
        <img style="width:100px;height:100px" id="imgTag" src=" " />
        <img id="dp" src="{{ URL::asset('public/img/user.svg') }}" width="150px" height="150px" alt="Profile Image"/>
        </div></div>
        <div class="col-md-12">
            <button class="profile--button">Go Live</button>
        </div>
        <div class="col-md-12">
            <p class="profile--subHeading">Progress</p>
            <div class="profile--progressBar"></div>
        </div>
        <div class="col-md-12">
            <ul class="profile--list">
            <li><button type="button" style="color: black;" data-toggle="modal" data-target="#myModal">Set a tagline</button></li>
            <li><button type="button" style="color: black;" data-toggle="modal" data-target="#myModal2">Set your rate.</button></li>
            <li><button type="button" style="color: black;" data-toggle="modal" data-target="#myModal3">Write a bio.</button></li>
            <li><div class="inputWrapper">
			<form id="upload_form">
            <input type='file' class="fileInput"  id = "inTag" name="image"/>Upload a profile picture. 
			</form>
			</div></li>
            <li><button type="button" style="color: black;" data-toggle="modal" data-target="#myModal4">Add your subject.</button></li>
            <li><button type="button" style="color: black;" data-toggle="modal" data-target="#myModal6">Set your travel policy.</button></li>
            <li><button type="button" style="color: black;" data-toggle="modal" data-target="#myModal7">Upload some identification.</button></li>
            <li><button type="button" style="color: black;" data-toggle="modal" data-target="#myModal8">Edit Tuition Fees</button></li>
        </div>
    </div>
    <div class="col-md-4 profile--tagline">
            <h3>User Name<button type="button" style="color: black;" data-toggle="modal" data-target="#myModal3"><a href="#" class="profile--edit"><img src="{{ URL::asset('public/img/logo.svg') }}" width="20px">Edit</a></button>
             </h3>
            <div class="col-md-12">
                    <button class="profile--button">Record a Video</button>
            </div>
            <div class="col-md-12 profile--para">
                    <p>You haven't written a bio yet.</p>
            </div>
    </div>
    <div class="col-md-4 profile--tagline">
            <div class="col-md-4 profile--borderLineVerti">
                <h3>£_</h3>
                <input type="text" name="pound" id="pou">
                <p>per hour</p>
                <button type="button" data-toggle="modal" data-target="#myModal2"><a href="#" class="profile--edit"><img src="{{ URL::asset('public/img/logo.svg') }}" width="20px">Edit</a></button>
                
            </div>
            <div class="col-md-4 profile--milesPadding">
                <h3>0</h3>
                <button type="button" style="color: black;" data-toggle="modal" data-target="#myModal6"><a href="#" class="profile--edit"><img src="{{ URL::asset('public/img/logo.svg') }}" width="20px">Edit</a></button>
                <p>miles away</p>
            </div>
            <div class="col-md-12 profile--subject">
                <div class="col-md-6"><h3>Subjects</h3></div>
                <div class="col-md-6 profile--edit--margin"><button type="button" style="color: black;" data-toggle="modal" data-target="#myModal4"><a href="#" class="profile--edit profile--box--edit"><img src="{{ URL::asset('public/img/logo.svg') }}" width="20px">Edit</a></div></button>

                <div class="col-md-12"><p>You haven't added any subjects yet. Add some now?</p></div>   
            </div>  
            <div class="col-md-12 profile--subject">
                <div class="col-md-6"><h3>Travel Policy</h3></div>
                <div class="col-md-6 profile--edit--margin"><button type="button" style="color: black;" data-toggle="modal" data-target="#myModal6"><a href="#" class="profile--edit profile--box--edit"><img src=" {{ URL::asset('public/img/logo.svg') }}" width="20px">Edit</a></div></button>
                
                <div class="col-md-12"><p>You haven't set a travel policy yet. Do it now?</p></div>   
            </div>  
    </div>
  </div>
</div>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<script>
$(function() {
    $('#inTag').on('change', function(){
        
      // get file and pull attributes
	   var input = $(this)[0];
      var file = input.files[0];
	  console.log(input.files[0].mozFullPath);
	   var x = document.getElementById("inTag").value.replace(/C:\\fakepath\\/i, '');
		
	  	$.ajax({
        url: 'http://localhost/tutor_project/imageupload',
         dataType: 'json',
        data: { name : file.name ,x:x},
        type: 'GET',
        cache: false,
        success: function (result) {
        return result;
        }
    });
        
     
     // load file into preview pane
     var reader = new FileReader();
     reader.onload = function(e){
       $('#imgTag').attr('src', e.target.result);
     }
     reader.readAsDataURL(file);
        
    });
});
</script>
@endsection