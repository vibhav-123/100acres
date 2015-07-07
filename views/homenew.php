<!-- Home page of 100acres.com-->
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>100 Acres</title>
	<link rel="stylesheet" href="http://localhost/codeigniter/css/style.css" type="text/css" />
	<link rel="stylesheet" href="http://localhost/codeigniter/css/search.css" type="text/css" />
</head>
<body>
<div id="header">
<h1>100 ACRES</h1>
</div>
	<div id="page">
		<div id="logo">
			<h2>India's no.1 property portal covering all the major cities and a large number of agents and developers..</h2>
		 </div>
		<div id="nav">
			<ul>
        <li class="another_blue"><a href="http://www.100acres.com/Homenew">Home</a></li>
				<li class="blue"><a href="http://www.100acres.com/About_us">About Us</a></li>
				<li class="another_blue"><a href="http://www.100acres.com/Contact_us">Contact Us</a></li>
				<li class="blue"><a href="http://www.100acres.com/Form">Register</a></li>
		<!--If name is set then it implies that session is created and accordingly show the LOGIN and LOGOUT button-->
        <?php
				if($Name!='') 
          { ?>
				<li class="another_blue"><a href="home/logout">Logout</a></li><?php } ?>
			<?php	 if(($Name)=='') {?>
				<li class="another_blue"><a href="http://www.100acres.com/Login">Login</a></li><?php } ?>
			 </ul>	
		</div>
		<!-- <div id="flip"><h4>Find a property !!!!</h4></div> -->
    <div id="panel">
    <form action="property" method="get" id="search" name="searchform" onsubmit="return validate()">
    <h4>Find a property !!!!</h4>
    City:<br>
    <select name='select_city'>
        <option value="NULL">Please select an option</option>
  			<option value="Noida">Noida</option>
  			<option value="New Delhi">New Delhi</option>
  			<option value="Gurgaon">Gurgaon</option>
  			<option value="Ghaziabad">Ghaziabad</option>
		</select><br>
		<br>
		Min price:<br>
		<input type= "text" name="minprice" value="" id="min">
		<br>
		<span id='error_min'></span>
		<br>
		Max price:<br>
		<input type= "text" name="maxprice" value="" id="max">
		<br>
		<span id='error_max'></span>
		<br>
		Bedrooms:<br>
		<select name='select_value'>
			<option value="NULL">Please select an option</option>
  			<option value="2 BHK">2 BHK</option>
  			<option value="3 BHK">3 BHK</option>
  			<option value="4 BHK">4 BHK</option>
  		</select>
  		<br><br>
  		Intention:<br>
		<select name='sellorrent'>
			<option value="NULL">Please select an option</option>
  			<option value="Rent">Rent</option>
  			<option value="Sell">Sell</option>
  		</select>
  		<br><br>
  		Sort by:<br>
      	<select name='sort'>
        	<option value="NULL">Select an option</option>
        	<option value="expected_price">Price</option>
        </select>
      	<br><br>
  		<input type="submit" name="submit" value="SEARCH">
  		</form>
        </div>
		</div>
		<div id="footer">
			<ul>
				<div id="buy" onclick="toggle('Sell')"><li class="black" ><a href="#buy">BUY</a></li></div>
				<div id="rent" onclick="toggle('Rent')"><li class="black" ><a href="#rent">RENT</a></li></div>
			</ul>	
		</div>
		<script type = "text/javascript" src="http://www.100acres.com/js/searchvalidation.js"></script>
		<script type = "text/javascript" src="http://www.100acres.com/js/togglefunction.js"></script>
</body>
</html>
