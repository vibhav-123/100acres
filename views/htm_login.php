<html>
<head>

<title>Sign In</title>

<link rel="stylesheet" type="text/css" href="http://www.100acres.com/css/styling.css">

</head>
<body>


<div id="fb-root">
</div>



<form name="login_form" id="login_form" method="get" action="" > 

<table border=0 width=100% align=center cellpadding=10>
<tr align=center>
<td align=left><font size=5>Sign In<br><hr>
</tr>
</table>

<center><font color=red face=arial size=2><p id="error"></p></font></center>	
<table border=0 width=100% align=center cellpadding=10>
<tr>
<td>E-mail: <td><input type="text" name="email" class="input_text"><br>
</tr>
<tr >
<td>Password: <td><input type="password" name="pass" class="input_text"><br>
</tr>

</table>
<table border=0 width=100% align=center cellpadding=10>
<tr align=center>
<td align=right><input type="button" onclick="validate_login();" id="submitbutton" value="Login"class="input_button">
<td align=left><input type="reset" value="Reset"class="input_button">
</tr>


</table>

</form>

<hr>
<center>OR:<br><br></center>

<center><button type="Button" name="Facebook_Login" onclick="validateFB();" align="center"><img src="http://www.100acres.com/images/fb_login.png" height="30px" width="120px"></img></button></center> 



<script src="http://www.100acres.com/javascripts/validation_file.js"></script>
<script src="http://www.100acres.com/javascripts/fblogin.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>

</html>
