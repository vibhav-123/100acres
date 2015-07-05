(function($,W,D)
{
    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules

            $.validator.addMethod("textOnly", 
                             function(value, element) {
                                  return (!/^[0-9]*$/.test(value));
                              }, 
                              "Contact name field can have alphabets only"
       );


            $.validator.addMethod("NumberOnly", 
                             function(value, element) {
                                  return (/^[0-9]{10}$/.test(value));
                              }, 
                              "Input field can have Numbers only"
       );

            $.validator.addMethod("NumberOnly2", 
                             function(value, element) {
                                  return (/^[0-9]+$/.test(value));
                              }, 
                              "Input field can have Numbers only"
       );


            $("#postsuccess_form").validate({
                rules: {
                    sellername: {
                        required: true,
                        textOnly:true,
                        minlength: 2
                    },

                    phone: {
                        required: true,
                        NumberOnly:true,
                    },

                    email: {
                        required: true,
                        email: true
                    },

                    description: {
                        required: true,
                        minlength:2
                    },

                    latitude: {
                        required: true,
                        NumberOnly2: true
                    },

                    longitude: {
                        required: true,
                        NumberOnly2: true
                    }
                    
                },

                messages: {

                    sellername: {
                        required: "Please Enter Your Name",
                        minlength: "Please field must be at least 2 characters long"
                    },

                    phone: {
                        required: "Please Enter Your Contact No",
                    },

                    email: "Please enter a valid email address",
                    
                    description: {
                        required: "Please provide description",
                        minlength: "Please field must be at least 2 characters long"
                    },

                    latitude: "Please enter a valid lat no",
                    longitude: "Please enter a valid longitude no",
                    
                    },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
})(jQuery, window, document);