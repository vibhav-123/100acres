<?php
	if(isset($this->session->userdata["name"]))
	{
		echo "Hey";	
	}
	else
		echo "no";
?>
<!DOCTYPE html>
<html>
<head>
<script src="http://www.100acres.com/js/fblogin.js"></script>
<script src="http://www.100acres.com/js/jquery-1.3.2.min.js"></script>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>
<div id="status">	
</div>
<input type="button" value="login" onclick="validateFB()">
</body>
</html>


