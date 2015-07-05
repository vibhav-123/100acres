
 (function($,W,D)
{
    var formvalidation = {};
    formvalidation.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $.validator.addMethod("textOnly", 
                             function(value, element) {
                                  return (!/^[0-9]*$/.test(value));
                              }, 
                              "Alphabets Only."
       );

            $("#register-form").validate({
                rules: {
                    Name: {required:true,
                    textOnly:true
                    },
                 
                   Email: {
                        required: true,
                        email: true
                     
                           },
                    Mobile:{required:true,
                      number:true
                      },

                    Password: {
                        required: true,
                        minlength: 5
                    },
                    
                },
                messages: {
                    Name: {required: "Please enter your name"},
                    Mobile: {required:" Please enter your Mobile no.",
                    number:"Please enter a valid number"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    Email: "Please enter a valid email address",
                   },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        formvalidation.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
