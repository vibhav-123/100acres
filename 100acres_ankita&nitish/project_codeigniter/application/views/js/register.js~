function validate()
{
    var  email = document.getElementById("email"),pass1 = document.getElementById("pass1"),
    pass2 = document.getElementById("pass2"),no = document.getElementById("no"),name = document.getElementById("name"),
    pass1_msg = document.getElementById("pass1_msg"),pass2_msg = document.getElementById("pass2_msg"),
    goodColor = "#66cc66",badColor = "#ff6666",email_msg = document.getElementById("email_msg"),
    no_msg = document.getElementById("no_msg"),name_msg = document.getElementById("name_msg"),flag=true;
    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    no_regex=/^[0-9]/;
    email.style.backgroundColor = goodColor;
    email_msg.innerHTML = "";
    pass1.style.backgroundColor = goodColor;
    pass1_msg.innerHTML = "";
    name.style.backgroundColor = goodColor;
    name_msg.innerHTML = "";
    pass2.style.backgroundColor = goodColor;
    pass2_msg.innerHTML = "";
    no.style.backgroundColor = goodColor;
    no_msg.innerHTML = "";
    if(name.value=='')
    {
        name.style.backgroundColor = badColor;
        name_msg.innerHTML = "Please enter name!"
        flag=false;
    }
    if(email.value==''||!filter.test(email.value))
    {
        email.style.backgroundColor = badColor;
        email_msg.innerHTML = "Please enter a valid email id!";
        flag=false;
    }
    if(pass1.value=='')
    {
        pass1.style.backgroundColor = badColor;
        pass1_msg.innerHTML = "Please enter password!"
        flag=false;
    }
    if((pass1.value!=pass2.value)||pass2.value==''){
        pass2.style.backgroundColor = badColor;
        pass2_msg.innerHTML = "Please enter correct password to confirm!"
	    flag=false;
    }
    if(no.value==''||!no_regex.test(no.value)||no.value.length!=10)
    {
        no.style.backgroundColor = badColor;
        no_msg.innerHTML = "Please enter a valid mobile no.!"
        flag=false;
    }
    return flag;
}