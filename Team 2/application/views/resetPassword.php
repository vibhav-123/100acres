<html>
	<head>
		
		<title>
			Reset Password
		</title>
		<script src="http://www.100acres.com/js/jquery-1.3.2.min.js"></script>
		<script src="http://www.100acres.com/js/validationReset.js"></script>
		<link type="text/css" href="http://www.100acres.com/styles/styleSheetResetPassword.css" rel="stylesheet"></link>
	</head>
	<body background="http://www.100acres.com/images/background.jpg"> 
	<div  class="container">
		<form action="http://www.100acres.com/welcome/resetPassword" method="POST" id="formPostReset" name="formPostReset">
			<table style="text-align: center;margin: 0 auto;padding:10px;"cellspacing=10px >
				<tr>
					<td colspan=2>
						<h2>Reset Password</h2>
					</td>
				</tr>
				<tr>
					<td>
						<div id="message">
							All Most There!<br><br>
							Enter Your New Password
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" placeholder="Enter a new password" name="password" class="inputText" id="password">
					</td>
				</tr><tr></tr>
				<tr>
					<td>
						<input type="password" placeholder="Re-Enter the password" class="inputText" id="repassword">
					</td>
				</tr>
				<tr>
					<td>
						<div id="error" class="errorBox">
						</div>
					</td>
				</tr>
				<tr>
					<td style="text-align:center">
						<input type="button" value="Reset Password" class="button" onclick="validateForgot()" id="reset">
						<input type="button" value="Go To Website" class="button" onclick="window.location.href='http://www.100acres.com'" style ="display:none" id="mainPage">
					</td>
				</tr>
				<?php if(isset($userID))
					echo "<input name='info' id='info' style='display:none' value=$userID>"					
				?>
			</table>
		</form>
	</div>
	</body>
</html>
