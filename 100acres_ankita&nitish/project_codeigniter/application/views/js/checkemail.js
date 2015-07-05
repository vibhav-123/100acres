$(document).ready(function() {
    //listens for typing on the desired field
    $("#email").focusout(function() {
        //gets the value of the field
        var email = $("#email").val(),emailEr=$("#email_msg");
 
        //here would be a good place to check if it is a valid email before posting to your db
 
        //displays a loader while it is checking the database
        emailEr.html('<img alt="" src="/images/loader.gif" />');
 
        //here is where you send the desired data to the PHP file using ajax
        $.post("http://www.100acres.com/index.php/welcome/check_email_availability", {email:email},
            function(result) {
                if(result == 1) {
                    //the email is available
                    emailEr.css("color","green").html("Available");
                }
                else {
                    //the email is not available
                    emailEr.css("color","red").html("Email id already registered");
                }
            });
     });
});
