function checkFormPost(form)
{
if(form.address.value=="")
{
alert("Error:Address cannot be blank!");
form.address.focus();
return false;
}
}
