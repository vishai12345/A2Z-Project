$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 200) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
$('#iconified').on('keyup', function() {
    var input = $(this);
    if(input.val().length === 0) {
        input.addClass('empty');
    } else {
        input.removeClass('empty');
    }
});

//Function To Display Popup
function show_popup(id) {
	
 document.getElementById(id).style.display = "block";
 $('body').css('overflow','hidden');
}

//Change Url
function changeurlRegister()
{

var new_url="/A2Z-Project/register";
 window.history.pushState("data","Title",new_url);
 document.title="A2Z Tutors-Register";
}
function changeurlLogin()
{

var new_url="/A2Z-Project/login";
 window.history.pushState("data","Title",new_url);
 document.title="A2Z Tutors-Login";
}
function changeurlTutor()
{

var new_url="/A2Z-Project/requestTutor";
 window.history.pushState("data","Title",new_url);
 document.title="A2Z Tutors-Request Tutor";
}
function changeurl()
{

var new_url="/A2Z-Project/";
 window.history.pushState("data","Title",new_url);
 document.title="A2Z Tutors";
}
//End

//Function to Hide Popup
function hide_popup(id){
document.getElementById(id).style.display = "none";
$('body').css('overflow','auto');
}

//Tab 
  $(function () {
    $('#myTab active').tab('show');
    $('#myTab active').css('background-color', '#e24241');
  })

// Upload Image
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#dp')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);

                         $('#dp2')
                        .attr('src', e.target.result)
                        .width(30)
                        .height(30);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
   
         $().ready(function() {
             // validate signup form on keyup and submit
             $("#personal_form").validate({
                 rules: {
                     p_password: {
                         required: true,
                         minlength: 5,
                     },
                     p_con_pwd: {
                         required: true,
                         minlength: 5,
                     },
                     p_fname: "required",
                     p_lname: "required",
                     p_email: {
                         required: true,
                         email: true,
                     },
                     p_mobile: "required",
                     
                 },
                 messages: {
                     p_password: {
                         required: "Please provide a password",
                         minlength: "Your password must be at least 5 characters long",
                     },
                     p_con_pwd: {
                         required: "Please provide a password",
                         minlength: "Your password must be at least 5 characters long",
                     },
                     p_fname: "Please enter your firstname",
                     p_lname: "Please enter your lastname",                
                     p_email: "Please enter a valid email address",
                     p_mobile: "Please enter your mobile",                           
                 }
             });
         });
		 

		 function clear_form_elements(ele) {
		
    $(ele).find(':input').each(function() {
        switch(this.type) {
            case 'password':
            case 'select-multiple':
            case 'select-one':
            case 'text':
            case 'textarea':
                $(this).val('');
                break;
            case 'checkbox':
            case 'radio':
                this.checked = false;
        }
    });
}

