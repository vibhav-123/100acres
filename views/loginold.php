<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<link rel=stylesheet type="text/css" href="http://localhost/codeigniter/css/a2.css">
</head>
<body>
	<div id="nav">
			<ul>
			<li class="orange"><a href="http://www.100acres.com/Homenew">Home</a></li>
		    </ul>
    </div>
<div id="login">
<h1><strong>Welcome.</strong> Please login.</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('VerifyLogin'); ?>
<form method="post">
<fieldset>
<p><input type="text" name="Email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "></p>
<p><input type="password" name="Password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p>
<p><a href="#">Forgot Password?</a></p>
<p><input type="submit" value="Login"></p>
</fieldset>
</form>
<p><span class="btn-round">or</span></p>
<p>
<a class="facebook-before"></a>
<button class="facebook">Login Using Facbook</button>
</p>
<p>
<a class="twitter-before"></a>
<button class="twitter">Login Using Twitter</button>
</p>
</div> <!-- end login -->
</body>
</html>
