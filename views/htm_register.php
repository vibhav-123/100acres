<html>
<head>

<title>Register Yourself</title>

<link rel="stylesheet" type="text/css" href="http://www.100acres.com/css/styling.css">


</head>
<body>





<form name="register_form"  id="register_form" method="post" action="" >		

<table border=0 width=100%  align=center cellpadding=10>
<tr align=center>
<td align=left><font size=5>Enter the Details<br><hr>
</tr>
</table>

<center><font color=red face=arial size=2><p id="error"></p></font></center>	

<table border=0 width=100% align=center cellpadding=10>
<tr  >
<td>Name: <td><input type="text" name="user_name" class="input_text"><br>  
</tr>
<tr  >
<td>E-mail: <td><input type="text" name="email" class="input_text"><br>
</tr>
<tr >
<td>Password: <td><input type="password" name="pass"class="input_text"><br>
</tr>
<tr>
<td>Confirm Password: <td><input type="password" name="cpass"class="input_text"><br>
</tr>
<tr>
<td>Phone No.: <td><input type="text" name="phone"class="input_text"><br>
</tr>
<tr>
<td>Security Question: <td><select name="ques" class="input_text">
		   <option value="Mothers_Name">What is your mother's name?			
		   <option value="Favourite_Cousin">Your favourite cousin?
		   <option value="Nickname">Your nickname?
		   <option value="Pets_Name">Your first pet's name?
		   <option value="Favourite_Actress">Your favourite actress?
		   <option value="Holiday_Spot">Your dream holiday spot?
		   
		   </select><br>
</tr>
<tr>
<td>Answer: <td><input type="text" name="ans"class="input_text"><br>
</tr>


</table>
<table border=0 width=100% align=center cellpadding=10>
<tr align=center>
<td align=right><input type="button" onClick="validate_register();" value="Register"class="input_button" > 	
<td align=left><input type="reset"value="Reset"class="input_button">
</tr>
</table>
</form>

<center><font color=red face=arial size=2><p id="error1"></p></font></center>	
<form name="validate_data" id="validate_data" method="post" action="" > 
<center><label class=element_visibility id="vv1"><font size=2 color=green>Verification code has been sent to your e-mail id.</font></center></label>
<table border=0 width=100% align=center cellpadding=10 class=element_visibility id="vv2">
<tr>
<td>Enter Verification Code:<td><input type="text" class="input_text" name="verify_code"><br>
<td align=left><input type="button" value="Verify" class="input_button" onclick="validate_verify();">
</tr>
</table>
</form>


</div>





<script src="http://www.100acres.com/javascripts/validation_file.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>
</html>
