function validate()
{ 
    
    var error_name=false,error_email=false,error_password=false,error_mobile=false;
    var name = document.register_form.Name.value;
    var i;
    var name_regex=/^[a-zA-Z ]{2,50}$/;
    if(name=='' || !name.match(name_regex))
    {
        document.getElementById("error_name").innerHTML='Please enter a valid name';
        error_name=true;
    }
    else
    {
        document.getElementById("error_name").innerHTML='';
    }
    var email = document.register_form.Email.value;;
    //var email_regex='/[a-z0-9.]+@[a-z]{2,7}+\.[a-z]{2,4}/';
    if(email=='')
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
    if(!mobile.match(mobile_regex) || mobile=="" || !(len==10)){
        document.getElementById('error_mobile').innerHTML='Enter a valid mobile number';
        error_mobile=true;
    }
    else
        document.getElementById('error_mobile').innerHTML='';
    var password=document.register_form.Password.value;
    len=password.length;
    if(password=="" && len<5){
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
    if(error_mobile==true ||  error_email==true || error_password==true || error_name==true)
        return false;
    else
        return true;
}