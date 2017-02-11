      
         $(document).ready(function() {
             // validate signup form on keyup and submit
             $("#personal_form").validate({
                 rules: {
                     p_password: {
                         minlength: 5,
                     },
                     p_con_pwd: {
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
                         minlength: "Your password must be at least 5 characters long",
                     },
                     p_con_pwd: {
                         minlength: "Your password must be at least 5 characters long",
                     },
                     p_fname: "Please enter your firstname",
                     p_lname: "Please enter your lastname",                
                     p_email: "Please enter a valid email address",
                     p_mobile: "Please enter your mobile",                           
                 }
             });
         });
		 
         $(document).ready(function() {
             // validate signup form on keyup and submit
             $("#rateForm").validate({
                 rules: {
                     rate: "required",
                     a_lesson: "required",
                     b_lesson: "required",
                     c_lesson: "required",
                     }, 
                 messages: {
                     rate: "Please provide hourly rate", 
                     a_lesson: "Please provide lessons rate", 
                     b_lesson: "Please provide lessons rate",
                     c_lesson: "Please provide lessons rate",           
                 },
            });
        });
          
           $(document).ready(function() {
             // validate signup form on keyup and submit
             $("#bioForm").validate({
                 rules: {
                     bio: "required",
                     }, 
                 messages: {
                     bio: "Please provide Statement",               
                 },
            });
        });
          
         $(document).ready(function() {
             // validate signup form on keyup and submit
             $("#travelForm").validate({
                 rules: {
                     radius: "required",
                     street: "required",
                     town: "required",
                     country: "required",
                     postcode: "required",
                     }, 
                 messages: {
                     radius: "Please provide distance you willing to travel", 
                     street: "Please provide your street name", 
                     town: "Please provide your town name",
                     country: "Please provide your country name", 
                     postcode: "Please provide your Postcode",         
                 },
            });
        });
