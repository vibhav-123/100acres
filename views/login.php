<!-- login page -->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<link rel=stylesheet type="text/css" href="http://localhost/codeigniter/css/logincss.css">
</head>
<body>
	<!-- fblogin.js required for facebook login -->
	<script src="http://www.100acres.com/js/fblogin.js"></script>
	<div id="nav">
			<ul>
			<li class="another_blue"><a href="http://www.100acres.com/Homenew">Home</a></li>
		    </ul>
    </div>
<div id="login">
<h1><strong>Welcome.</strong> Please login.</h1>
<!-- If error message is set then print that to screen -->
<?php 
if(isset($error))
	echo $error;
?>
<!-- Login Form start -->
<form name="loginform" action="http://www.100acres.com/Login/login_user" method="post" onsubmit="return validateform()">
<fieldset>
	<p><input type="text" name="Email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "></p>
	<p><input type="password" name="Password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p>
	<p><a href="#">Forgot Password?</a></p>
	<p><input type="submit" value="Login" name="submit"></p>
</fieldset>
</form>
<p><span class="btn-round">or</span></p>
<p>
	<fb:login-button scope="public_profile,email" data-size="large" data-show-faces="true" data-auto-logout-link="true" onlogin="checkLoginState();"></fb:login-button>
</p>
<p>
	<a class="twitter-before"></a>
	<button class="twitter">Login Using Twitter</button>
</p>
</div> <!-- end login -->
</body>
</html>
