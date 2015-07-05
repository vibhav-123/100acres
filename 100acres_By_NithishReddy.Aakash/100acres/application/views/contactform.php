<html>
<head>
    <script type="text/javascript" src="/public/js/login.js"></script>
    </head>
<form name="contactform" method="post" action="<?php echo base_url()?>contact/postMessage">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="name">Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="name" maxlength="50" size="30" required='true'>
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80"  id="txtEmail" size="30" required='true' onblur="checkEmail()">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="mobileno">Mobile Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="mobileno" maxlength="10" size="10" required='true'>
 
 </td>
 
</tr> 
<tr>
 
 <td valign="top">
 
  <label for="message">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="message" maxlength="1000" cols="25" rows="6" required='true'></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit" id="submit">   
 
 </td>
 
</tr>
 

</form>

</html>
<script language="javascript">
function checkEmail() {
    
    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;;
    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}</script>
