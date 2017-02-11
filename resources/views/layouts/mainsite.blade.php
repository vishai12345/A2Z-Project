@extends('layouts.default')

@section('content')
<div class="top-banner">
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
    <li><button class="request-button" onclick="show_popup('request-form');changeurlTutor();">Request a tutor</button></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
   @if(Auth::user())
	<li>
	<a href="{{ url('/logout') }}" class="btn btn-primary btn-sm"
	onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Log out</a>
	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
										</li>
 
	@else
		 <li><button onClick="show_popup('login-form');changeurlLogin();">TUTOR LOGIN</button></li>
    <li class="signup-btn"><button onClick="show_popup('signup-form'); changeurlRegister();">BECOME A TUTOR </button></li>
	 @endif
  </ul>
</div><!-- /.navbar-collapse -->
</nav>
<!-- menu-->
<!-- banner-text-->
<div class="banner-text">
<h1>Find a tutor near you for free</h1>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="col-sm-5 search-field">
		<input 			   type='text'
                           placeholder="What do you need help with?"
                           class='flexdatalist'
                           data-url='search/searchSubject'
                           data-search-in='["category_name"]'
                           data-visible-properties='["category_name"]'
                           data-selection-required='true'
                           data-value-property='value'
                           data-min-length='1'
						    data-focus-first-result='true'
                           name="search_subject"
						   style="padding: 0px 15px; width: 394px;margin-bottom: 0px;height: 50px;font: 15.3333px ;font-family: inherit;color:black">
    </div>
	
    <div class="col-sm-5 search-field ">
        <input class="form-control input-lg" style="font-size:15px;" placeholder="Postcode or location">
    </div>
    <div class="col-sm-2 search-field ">
        <a class="btn btn-danger btn-lg btn-block">
        <svg class="search-icon" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Layout---Header" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Header-4" transform="translate(-486.000000, -76.000000)" fill="currentColor">
                    <g id="Header" transform="translate(0.000000, 55.000000)">
                        <g id="Search" transform="translate(226.000000, 17.000000)">
                            <path d="M276.815533,20.8726 C276.2478,21.4392667 275.3406,21.4392667 274.801133,20.8726 L270.318733,16.3611333 C267.7374,18.0352667 264.2478,17.7518 261.9782,15.4539333 C259.3406,12.8155333 259.3406,8.61633333 261.9782,5.979 C264.6166,3.34033333 268.815533,3.34033333 271.4542,5.979 C273.694733,8.21953333 274.035533,11.7374 272.3614,14.3184667 L276.8718,18.8299333 C277.3542,19.3686 277.3542,20.3051333 276.815533,20.8726 L276.815533,20.8726 Z M269.694733,7.6518 C268.020867,5.979 265.297933,5.979 263.624067,7.6518 C261.949933,9.32593333 261.949933,12.0499333 263.624067,13.7227333 C265.297933,15.3966 268.020867,15.3966 269.694733,13.7227333 C271.368867,12.0499333 271.368867,9.32593333 269.694733,7.6518 L269.694733,7.6518 Z" id="Search-Icon"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg></a>
    </div>
    </div>
</div>
<p class="help-text">Or click here to search for an online tutor</p>
</div>
<!-- banner-text-->
<!-- banner-box-->
<div class="banner-box">
<div class="">

    <div class="col-md-100">
    <a href="#">
        <div class="box-ban">
        <img src="{{ URL::asset('public/img/calculator.png') }}" style="width:40px;">
            <p>Maths</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="{{ URL::asset('public/img/abc-squares.png') }}" style="width:40px;">
            <p>English</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="{{ URL::asset('public/img/cell.png') }}" style="width:40px;">
            <p>Biology</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="{{ URL::asset('public/img/h2o.png') }}" style="width:40px;">
            <p>Chemistry</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="{{ URL::asset('public/img/atom.png') }}" style="width:40px;">
            <p>Physics</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="{{ URL::asset('public/img/open-book.png') }}" style="width:40px;">
            <p>11+</p></a>
        </div>
    </div>
    
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="{{ URL::asset('public/img/internet.png') }}" style="width:40px;">
            <p>French</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="{{ URL::asset('public/img/internet.png') }}" style="width:40px;">
            <p>Spanish</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="{{ URL::asset('public/img/history.png') }}" style="width:40px;">
            <p>History</p></a>
        </div>
    </div>
    <div class="col-md-100">
        <div class="box-ban">
        <a href="#"><img src="{{ URL::asset('public/img/internet.png') }}" style="width:40px;">
            <p>Geography</p></a>
        </div>
    </div>
            <div style="position: relative;">
                    <span class="cta-text hidden-sm hidden-xs">Or Browse By Subject</span>
            </div>

</div>
</div>

<!-- banner-box-->

</div>
</div>

<!-- how it work-->
<div class="work paddy">
<div class="container">
<h1>How It Works</h1>
    <div class="row">
        <div class="col-sm-4 teacher">
            <a href="#"><img src="{{ URL::asset('public/img/search.png') }}"></a>
            <h3>Select A Private Tutor</h3>
            <p class="space">Use our search engine to find a private tutor near you for any subject from Maths to English to the Piano. You can browse through tutors offering private, one-to-one tuition as well as online tutors.  We ensure that current students can review their tutors so this should ensure peace of mind for you when making a decision!</p>
        </div>
        <div class="col-sm-4 teacher">
            <a href="#"><img src="{{ URL::asset('public/img/discuss.png') }}"></a>
            <h3>Discuss Your Needs And Arrange A First Lesson</h3>
            <p class="space2">Our website is a safe means by which you can discuss what you  need from your tutor. Message the tutor stating what you need help with ‘e.g. Hi I need support for my daughter who is in year 11 with her English’.
            The tutor will then respond and once you have arranged a first lesson you are ready to go!</p>
        </div>
        <div class="col-sm-4 teacher">
            <a href="#"><img src="{{ URL::asset('public/img/learn.png') }}"></a>
            <h3>Start Learning</h3>
            <p class="space">Once you are ready to hire your tutor, click ‘book now’. Once the tutor accepts you are set to go!
            If you need any support from us after this, please get in touch.</p>
        </div>
    </div>
</div>
</div>
<!-- how it work-->
<!-- City-->
<div class="city paddy">
<div class="container">
    <h1>Browse By Major City</h1>
    
    <div class="row">
        <div class="col-sm-3">
                <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/manchester.jpg') }}">
                    <div class="img-abslt">
                        <h2>MANCHESTER</h2>
                        <h3>Tutors available</h3>
                    </div></a>
                </div>
                
               
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/london.jpg') }}">
                <div class="img-abslt">
                    <h2>LONDON</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/birmingham.jpg') }}">
                <div class="img-abslt">
                    <h2>BIRMINGHAM</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/bristol.jpg') }}">
                <div class="img-abslt">
                    <h2>BRISTOL</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/edinburgh.jpg') }}">
                <div class="img-abslt">
                    <h2>EDINBURGH</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/glasgow.jpg') }}">
                <div class="img-abslt">
                    <h2>GLASGOW</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/leeds.jpg') }}">
                <div class="img-abslt">
                    <h2>LEEDS</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/sheffield.jpg') }}">
                <div class="img-abslt">
                    <h2>SHEFFIELD</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
        

        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/liverpool.jpg') }}">
                <div class="img-abslt">
                    <h2>LIVERPOOL</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="img-box">
                <div class="image">
                <a href="#">
                <img src="{{ URL::asset('public/img/bradford.jpg') }}">
                <div class="img-abslt">
                    <h2>BRADFORD</h2>
                    <h3>Tutors available</h3>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- City-->

<!-- 100per-->
<div class="p100per paddy">
<div class="container">
    <img src="{{ URL::asset('public/img/100per.png') }}">
    <h1>100% Satisfaction Guarantee</h1>
    <p>We have done everything we can to ensure a smooth experience for parents and students. If for any reason you are not satisfied with your tutor simply use our easy search form to get another set of details for free. Your happiness is essential to us. </p>
</div>
</div>
<!-- 100per-->
<div class="container">
<div class="row">
    <div class="col-md-6">  
    <div class="mybox">
        <h2 style="color:black;text-align: center;">Become A Tutor:</h2>
        <ul>
            <li>Sign up, create a profile and be advertised for free.</li>
            <li>Students get your details for free which makes them a lot more likely to hire you.</li>
            <li>No interference from us. We want you to focus on teaching.</li>
            
        </ul>
    </div>
    </div>
    <div class="col-md-6">
    <div class="mybox ">
        <h2 style="color:black;text-align: center;">Become A Student:</h2>
        <ul>
            <li>Find, contact and hire tutors for FREE.</li>
            <li>Full support. Contact us anytime for help.</li>
            <li>100% satisfaction guarantee.</li>
    
        </ul>
    </div>
    </div>
</div>
</div>
<!--Popular-->
<div class="paddy">
<div class="container">
    <h1 style="font-size: 36px; font-weight: 800;text-align: center;">Popular Searches</h1>
    <div class="row">
        <div class="col-md-4">
        <div class="black">
           <ul>
                    <li><a href="">Maths Tutor London</a></li>
                    <li><a href="">Maths Tutor Manchester</a></li>
                    <li><a href="">Maths Tutor Birmingham</a></li>
                    <li><a href="">Maths Tutor Leeds</a></li>
                    <li><a href="">Maths Tutor Bristol</a></li>
                    <li><a href="">Maths Tutor Sheffield</a></li>
                    <li><a href="">Maths Tutor Edinburgh</a></li>
                    <li><a href="">Maths Tutor Glasgow</a></li>
               </ul>
        </div>
        </div>
        <div class="col-md-4">
        <div class="black">
           <ul>
                    <li><a href="">English Tutor London</a></li>
                    <li><a href="">English Tutor Manchester</a></li>
                    <li><a href="">English Tutor Birmingham</a></li>
                    <li><a href="">English Tutor Leeds</a></li>
                    <li><a href="">English Tutor Bristol</a></li>
                    <li><a href="">English Tutor Sheffield</a></li>
                    <li><a href="">English Tutor Edinburgh</a></li>
                    <li><a href="">English Tutor Glasgow</a></li>
                </ul>
        </div>
        </div>
        <div class="col-md-4">
        <div class="black">
           <ul>
                    <li><a href="">Chemistry Tutor London</a></li>
                    <li><a href="">Chemistry Tutor Manchester</a></li>
                    <li><a href="">Chemistry Tutor Birmingham</a></li>
                    <li><a href="">Chemistry Tutor Leeds</a></li>
                    <li><a href="">Chemistry Tutor Bristol</a></li>
                    <li><a href="">Chemistry Tutor Sheffield</a></li>
                    <li><a href="">Chemistry Tutor Edinburgh</a></li>
                    <li><a href="">Chemistry Tutor Glasgow</a></li>
                </ul>
        </div>
        </div>
    </div>
</div>
</div>
<!--Popular-->
<!--testimonial-->
<div class="testimonial paddy">
<div class="container">
    <h1>Here Are Some Amazing Reviews of Our Tutors</h1>
    
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
              <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
              </ol>
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                    <blockquote>
                        <p>“Sophie changed my life! That’s no exaggeration. I was struggling and had no confidence but week after week my confidence grew as it all started to make sense. I am now studying Dentistry in London and I wouldn’t be here without her!”</p>
                            <strong>-   Tom, Dentistry Undergraduate student, Kings College London</strong>
                        </blockquote>   
                </div>
                <div class="item">
                    <blockquote>
                        <p>“I really enjoyed working with Adam and got my A* in Maths! He was professional and really knowledgeable and it was so easy to get in touch with him”</p>
                            <strong>-   Alisha, Medicine Undergraduate student, Leeds University</strong>
                        </blockquote>
                </div>
                <div class=" item">
                    <blockquote>
                            <p>“We found a really good tutor for Hassan and he managed to get into our chosen Grammar School by passing his 11+. I can’t thank you enough for taking the stress and hassle out of this process for us!”</p>
                            <strong>-   Salman, Parent</strong>
                        </blockquote>
                </div>
              </div>
            </div>
        </div>                          
    </div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.flexdatalist').flexdatalist();
    });
</script>

@endsection