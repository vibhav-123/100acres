<!DOCTYPE html>
<!--About us page-->
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>100 Acres</title>
	<link rel="stylesheet" href="http://localhost/codeigniter/css/about_us.css" type="text/css" />
</head>
<body>
<div id="header">
<h1>100 ACRES</h1>
</div>
	<div id="page">
		<div id="logo">
			<h2>100acres.com- a naukri.com Group Company:</h2><br>
			<h3>100acres.com is part of the naukri.com group-Indias No.1 job portal. Our parent company Info Edge, funded by ICICI Ventures, 
				started in 1989 and became Info Edge(India) Ltd. on May 1, 1995. Since inception, Info Edge has provided project,
				marketing and management consulting services to a number of clients in India and abroad.
				With the real estate industry in India witnessing a boom, the online property market holds considerable opportunities. 
				This is the potential that Info Edge is now targeting with the 100acres.com.Info Edge aims to develop this portal into 
				one of the leading sites for buying, selling or leasing any type of property, anywhere in the country.</h3>
		</div>
		<div id="nav">
			<ul>
				<li class="another_blue"><a href="http://www.100acres.com/Homenew">Home</a></li>
				<li class="blue"><a href="http://www.100acres.com/About_us">About Us</a></li>
				<li class="another_blue"><a href="http://www.100acres.com/Contact_us">Contact Us</a></li>
				<li class="blue"><a href="http://www.100acres.com/Form">Register</a></li>
			<!--If name is set then it implies that session is created.Accordingly show the LOGIN and LOGOUT button-->
        	<?php
			if($Name!='NULL') 
          	{?>
				<li class="another_blue"><a href="home/logout">Logout</a></li><?php } ?>
			<?php	 if(($Name)=='NULL') {?>
				<li class="another_blue"><a href="http://www.100acres.com/Login">Login</a></li><?php } ?>
			 </ul>	
		</div>
</body>
</html>
