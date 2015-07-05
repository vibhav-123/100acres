function checkPassword(str) { var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/; return re.test(str); } 

function checkForm(form) 
{
 if(form.username.value == "")
 { 
alert("Error: Username cannot be blank!"); 
form.username.focus();
 return false;
 } 
re = /^\w+$/; 
if(!re.test(form.username.value)) 
{ 
alert("Error: Username must contain only letters, numbers and underscores!"); 
form.username.focus(); 
return false;
 } 
if(form.p.value != "" && form.p.value == form.pwd2.value) 
{ 
if(!checkPassword(form.p.value)) 
{ alert("The password you have entered is not valid!"); 
form.p.focus(); return false; 
}
}

 else { alert("Error: Please check that you've entered and confirmed your password!"); 
form.p.focus(); return false; } 
re=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(!re.test(form.email.value)) 
{ 
alert("Error: Invalid email"); 
form.email.focus(); 
return false;
}
re= /^(\([0-9]{3}\) |[0-9]{3})[0-9]{3}[0-9]{4}/;
if(!re.test(form.contact.value)) 
{ 
alert("Error: Invalid Contact No"); 
form.contact.focus(); 
return false;
}
return true; 

}
