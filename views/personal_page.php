<?php
	header("Access-Control-Allow-Origin: *");
	session_start();
	$email=$_SESSION["email"];
?>

<html>
<head>
<title>Your Profile</title>
<link rel="stylesheet" type="text/css" href="http://www.100acres.com/css/styling.css">


</head>

<body background="http://www.100acres.com/images/b1.jpg">
<div style="height:60px;background-image: url(http://www.100acres.com/images/frameback.png);border:1px solid #BDBDBD">

<a href="http://www.100acres.com/application/views/htm_home.php"><img src="http://www.100acres.com/images/100acres.png" width=170px height=60px></img></a>

<table align=right border=0 cellpadding=10>
<tr>
<td><a href="http://www.100acres.com/application/views/htm_search.php" target="iframe1"><img src="http://www.100acres.com/images/Search.png" width=100px height=30px></img></a>
<td><a href="http://www.100acres.com/application/views/htm_post_property.php" target="iframe1"><img src="http://www.100acres.com/images/Post Property.png" width=100px height=30px></img></img></a> 
<td><a href="http://www.100acres.com/index.php/process/retrieve_account_details" target="iframe1"><img src="http://www.100acres.com/images/Account details.png" width=100px height=30px></img></a> 
<td><a href="http://www.100acres.com/index.php/welcome/loggingOut"><img src="http://www.100acres.com/images/Logout.png" width=100px height=30px></img></a>
</tr>
</table>
</div>

<br><div><font face=arial size=3 color=#BDBDBD><b>Welcome <?php echo $email?>
</div>
<div style="height:10px;border:0px solid black"></div>

<div>
<div style="width:20%;height:70%;border:0px solid black;float:left"></div>
<iframe src="http://www.100acres.com/application/views/htm_search.php" width="60%" height="80%" scrolling="yes" frameBorder="1" name="iframe1">Browser not compatible.</iframe>




</div>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://www.100acres.com/javascripts/validation_file.js"></script>


</body>
</html> 
