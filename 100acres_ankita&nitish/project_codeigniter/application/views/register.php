<!DOCTYPE html>
<html>
	<head>
		<title> NEW USER</title>
		<link rel="stylesheet" href="http://www.100acres.com/application/views/css/login.css">
		<link rel="stylesheet" href="http://www.100acres.com/application/views/css/common.css">
		<link rel="stylesheet" href="http://www.100acres.com/application/views/css/footer.css">
	</head>
	<body>
		<div id="container">
			<div id="header">
			    <h1>100acres.com</h1>
			    <a href="http://www.100acres.com/index.php/welcome/index">Home</a>
				<a href="http://www.100acres.com/index.php/welcome/sell_property">Sell/Rent property</a>
				<a>1800 41 99099</a>
			</div>
			
			<div id="content">
				<img src="http://www.100acres.com/images/home.jpg"  width="100%" id="img1">
				<form name="frm" action="http://www.100acres.com/index.php/welcome/register_userAPI" method="POST">
				<fieldset>
				<legend>Register</legend>
				<table>
				<tr><td>Name:</td><td><input type="text" name="Name" id="name"></td><td><span id="name_msg"></span></td></tr>
				<tr><td>Email:</td><td><input type="text" name="email" id="email"></td><td><span id="email_msg"></span></td></tr>
				<tr><td>Password:</td><td><input type="password" name="Password" id="pass1"></td><td><span id="pass1_msg"></span></td></tr>
				<tr><td>Confirm password:</td><td><input type="password" name="Confirm_password" id="pass2"></td><td><span id="pass2_msg"></span></td></tr>
				<tr><td>Contact No.:</td><td><input type='tel' name="no" id="no"></td><td><span id="no_msg"></span></td></tr>
				<tr><td><input type="submit" value="submit" onclick="return validate();"></td>
				<td><input type="reset" name="reset" value="Reset"></td></tr>
				</table>
				</fieldset>
				</form>
			</div>
            <?php include_once('footer.php');?>
	    </div>
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="http://www.100acres.com/application/views/js/register.js"></script>
		<script type="text/javascript" src="http://www.100acres.com/application/views/js/checkemail.js"></script>
	</body>
</html>
