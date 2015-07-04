<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>100 Acres</title>
	<link rel="stylesheet" href="http://localhost/codeigniter/css/style.css" type="text/css" />
	<link rel="stylesheet" href="http://localhost/codeigniter/css/loginhome.css" type="text/css" />
</head>
<body>
<div id="header">
<h1>100 ACRES</h1>
</div>
	<div id="page">
		<h2><center>Welcome <?php echo $Name; ?>!</center></h2>
		<div id="logo">

			<h2>India's no.1 property portal covering all the major cities and a large number of agents and developers..</h2>

		 </div>
		<div id="nav">
			<ul>
			<li class="another_bluebutton"><a href="http://www.100acres.com/Homenew">Home</a></li>
			<li class="bluebutton"> <a href="home/logout">Logout</a></li>
   			<li class="another_bluebutton"><a href="http://www.100acres.com/Postproperty_controller/register?<?php echo "User_id=".$User_id; ?>">Property details</a></li>
			</ul>	
		</div>		
		</div>
		</div>
</body>
</html>
