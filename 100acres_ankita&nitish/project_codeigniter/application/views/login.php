
<!DOCTYPE html>
<html>
<head>
	<title>ALREADY REGISTERED USER</title>
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/common.css">
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/login.css">
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
			<form name="login form" action="http://www.100acres.com/index.php/welcome/check_user_registered" method="POST">
				<fieldset>
				<legend>Login</legend>
				<table>
					<tr><td>Email:</td><td><input type="email" name="Email" id="email"></td> <td><span id="email_msg"></span></td></tr>
					<tr><td>Password: </td><td> <input type="password" name="Password" id="pass"></td><td><span id="pass_msg"></span></td></tr>
					<tr><td><input type="Submit" value="Submit" onclick="return validate();"></td>
					<td><input type="reset" name="reset" value="Reset"></td></tr>
				</table>
				</fieldset>
			</form>
		</div>
		<?php include_once('footer.php');?>
	</div>
<script type="text/javascript" src="http://www.100acres.com/application/views/js/login.js"></script>
</body>
</html>
