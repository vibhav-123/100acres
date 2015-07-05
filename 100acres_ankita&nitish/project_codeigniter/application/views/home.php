<!DOCTYPE html>
<html>
	<head>
		<title>www.100acres.com</title>
		<link rel="stylesheet" href="http://www.100acres.com/application/views/css/common.css">
		<link rel="stylesheet" href="http://www.100acres.com/application/views/css/footer.css">
	</head>
	<body>
		<div id="container">
			<div id="header">
			    <h1>100acres.com</h1>
				<a href="http://www.100acres.com/index.php/welcome/login">Login</a>
				<a href="http://www.100acres.com/index.php/welcome/register">Register</a>
				<a href="http://www.100acres.com/index.php/welcome/sell_property">Sell/Rent property</a>
				<a>1800 41 99099</a>
			</div>
			<div id="content">
				<img src="http://www.100acres.com/images/home.jpg"  width="100%" id="img1">
				<div id="caption"><i>Search here to discover your dream home</i></div>
				<div id="bar">
					<form  method="GET" id="search-form" name="search-form" action="http://www.100acres.com/index.php/welcome/search_property"> 
					<div id="row">
						<div id="editor-cell">
						<select name="purpose" id="column">
						<option value="buy">Buy</option>
						<option value="rent">Rent</option>
					</select>
					</div>
					<div id="editor-cell">
						<select name="type" id="res_or_comm" onChange="disable_enable_bedrooms();">
						<option value="residential">Residential</option>
						<option value="commercial">Commercial</option>
						</select>
					</div>
					<div id="editor-cell">
					    <input name='city' type='text' placeholder="city" id="city" autocomplete="off">
					</div>
					<div id="editor-cell">
					    <input name='locality' type='text' placeholder="locality" id="locality">
					</div>
					<div id="bedrooms">
						<select name="bedroom" id="column">
						<option selected disabled>BHK</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">Greater than 5</option>
						</select>
					</div>					
				</div>
				<div id="row">
					<div id="editor-cell">
					    <input name='minpice' type='number' id="minprice" placeholder="Min Price">
					</div>
					<div id="editor-cell">
					    <input name='maxpice' type='number' id="maxprice" placeholder="Max Price">
					</div>
					<div id="error_msg" style="color:red"><span id="error_msg"></span></div>
					 <input type="submit" value="Search" name="search" id="search" onclick="return validate(this);">
				</div>
				</form>
			</div>
			</div>
			<?php include_once('footer.php');?>
	     </div>
    <script type="text/javascript" src="http://www.100acres.com/application/views/js/home.js"></script>
    <script type="text/javascript" src="http://www.100acres.com/application/views/js/jquery.js"></script>
	<script type="text/javascript" src="http://www.100acres.com/application/views/js/jquery.ui.js"></script>
	<script type="text/javascript" src="http://www.100acres.com/application/views/js/get_city.js"></script>
    </body>
</html>