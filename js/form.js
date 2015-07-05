function validate()
{ 
    //set error variables to false initially
    var error_name=false,error_email=false,error_password=false,error_mobile=false,error_confirm_password=false;
    var name = document.register_form.Name.value;
    var i;
    var name_regex=/^[a-zA-Z ]{2,50}$/;
    if(name=='' || !name.match(name_regex))          //if name field is blank or do not contain alphabets then set error variable to true
    {
        document.getElementById("error_name").innerHTML='Please enter a valid name';
        error_name=true;
    }
    else
    {
        document.getElementById("error_name").innerHTML='';
    }
    var email = document.register_form.Email.value;;
    if(email=='')                                    //if email field is blank then set error variable to true
    {
        document.getElementById("error_email").innerHTML='Please enter a valid Email address';
        error_email=true;  
    }
    else
    {
        document.getElementById("error_email").innerHTML='';
    }
    
    var mobile=document.register_form.Mobile.value;
    var mobile_regex=/[(0-9)+.?(0-9)*]+/;
    var len=mobile.length;
    if(!mobile.match(mobile_regex) || mobile=="" || !(len==10))     //if mobile field is blank or is not numeric or if the length is not equal to 10 then set error variable to true
    {
        document.getElementById('error_mobile').innerHTML='Enter a valid mobile number';
        error_mobile=true;
    }
    else
        document.getElementById('error_mobile').innerHTML='';
    var password=document.register_form.Password.value;
    len=password.length;
    if(password=="" && len<5)                           //if password field is blank or contains characters less than 5 then set error variable to true
    {
        document.getElementById('error_password').innerHTML='Please enter your password';
        error_password=true;
    }
    else if(password!="" && len<5)
    {
        document.getElementById('error_password').innerHTML='Password length is too short';
        error_password=true;   
    }
    else
        document.getElementById('error_password').innerHTML='';
    var confirm_password=document.register_form.Confirm_Password.value;
    len=confirm_password.length;
    if(confirm_password=="" && len<5)                  //if confirm password field is blank or contains characters less than 5 then set error variable to true
    {
        document.getElementById('error_confirm_password').innerHTML='Please enter your password';
        error_confirm_password=true;
    }
    else if(confirm_password!="" && len<5)
    {
        document.getElementById('error_confirm_password').innerHTML='Password length is too short';
        error_confirm_password=true;   
    }
    else if(confirm_password!=password)                 //if confirm password field is not matching with password field then set error variable to true              
     {
        document.getElementById('error_confirm_password').innerHTML='Password is not matching';
        error_confirm_password=true;   
    }
    else
        document.getElementById('error_confirm_password').innerHTML='';
    if(error_mobile==true ||  error_email==true || error_password==true || error_name==true || error_confirm_password==true)       //if any of the error variable is set to true then return false
        return false;
    else
        return true;
}