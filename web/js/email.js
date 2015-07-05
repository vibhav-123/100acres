function checkPassword(str) { var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/; return re.test(str); } 

function checkEmail(form) 
{
 if(form.to.value == "")
 { 
alert("Error: Recipient id cannot be blank!"); 
form.username.focus();
 return false;
 } 

re=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(!re.test(form.to.value)) 
{ 
alert("Error: Invalid email"); 
form.to.focus(); 
return false;
}

 if(form.from.value == "")
 { 
alert("Error: Sender id cannot be blank!"); 
form.from.focus();
 return false;
 } 

re=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(!re.test(form.from.value)) 
{ 
alert("Error: Invalid email"); 
form.from.focus(); 
return false;
}
return true; 

}
