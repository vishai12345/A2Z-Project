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
}
//Function to Hide Popup
function hide_popup(id){
document.getElementById(id).style.display = "none";
$('body').css('overflow', 'auto');
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
