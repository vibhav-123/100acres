function validate()
{
    var email = document.getElementById("email"),pass = document.getElementById("pass"),
    email_msg = document.getElementById("email_msg"),pass_msg = document.getElementById("pass_msg"),
    goodColor = "#66cc66",badColor = "#ff6666",flag=true,
    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    email.style.backgroundColor = goodColor;
    email_msg.innerHTML = "";
    pass.style.backgroundColor = goodColor;
    pass_msg.innerHTML = "";
    if(email.value==''||!filter.test(email.value))
    {
        email.style.backgroundColor = badColor;
        email_msg.innerHTML = "Please enter a valid email id!";
	    flag=false;
    }
    if(pass.value=='')
    {
        pass.style.backgroundColor = badColor;
        pass_msg.innerHTML = "Please enter password!"
        flag=false;
    }
    return flag;
}
