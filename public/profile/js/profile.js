
        
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
        
           $().ready(function() {
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
          
         $().ready(function() {
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
   