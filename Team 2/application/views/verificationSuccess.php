<html>
	<head>
		
		<title>
			Verification Success
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
						<h2>Successful Verification</h2>
					</td>
				</tr>
				<tr>
					<td>
						<div id="message">
							You have successfully verified your email<br><br><br><br>	
							You are now eligible to enjoy full rights on this website.
						</div>
					</td>
				</tr><tr></tr><tr></tr><tr></tr>
				<tr>
					<td style="text-align:center">
						<input type="button" value="Go To Website" class="button" onclick="window.location.href='http://www.100acres.com'" id="mainPage">
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
