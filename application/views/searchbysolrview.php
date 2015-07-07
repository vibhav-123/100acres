<html>
<head>
	<title>100acres-Search</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/searchbysolr.css">
</head>
<body>
	<div id="header">
		<div id="headerbackground"></div>
		<?php 
		if($this->session->has_userdata('useremail')){
		echo '<a href="/user/logout"><div class="loginbtn">Logout</div></a>';
		}
		else
			echo '<a href="/user"><div class="loginbtn">Login/Register</div></a>';
		?>
		<a href="/home"><div class="loginbtn">Home</div></a>
		<div id="logo">
			<figure>
			<img src="/images/newlogo.png" alt="99acres logo">
			<figcaption>India's No:1 Property Portal</figcaption>
			</figure>
		</div>
		
		<div class="clear"></div>
	</div>
	<div id="content">
		<div id="formdiv">
			<form method="get" action="/searchbysolr/solrsearch">
				<h1>Search properties to rent or buy</h1>
				<input type="text" required="required" name="searchstring" placeholder="Enter custom search string...">
				<input type="submit" value="Search">
			</form>
			<div>
				Some example query strings <br>
				2BHK flat for rent Mumbai <br>
				3BHK independent to buy in bangalore <br>
				2bhk by builder for rent
			</div>
		</div>
	</div>
	

</body>
</html>