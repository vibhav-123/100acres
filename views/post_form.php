<!-- Post property form -->
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="http://www.100acres.com/css/postform.css">
	<title>Register your property</title>	
	</head>
	<body>
		<div id="button">
			<ul>
			<li class="homebutton"><a href="http://www.100acres.com/home">Back</a></li>
		    </ul>
        </div>
		<div>
			<div id="success">
				<!-- print message in success variable on the screen -->
				<?php if(isset($success))
				{
					if($success=="First Login")
						{	echo $success; 
							header('Location: http://www.100acres.com/Login');
							die();}
				else{echo $success;} 
				}?>
			</div>
			<!-- Form start -->
			<form action="http://www.100acres.com/Postproperty_controller/register?<?php echo "User_id=".$_GET['User_id']; ?>" method="POST" enctype="multipart/form-data" name="posting_form" id="postform" onsubmit="return validate()">
			<h1>Property posting form</h1>
			<p><b>I am</b> &nbsp;<input type="radio" name="owner_type" value="Owner">Owner&nbsp;
				<input type="radio" name="owner_type" value="Broker">Broker&nbsp;
				<input type="radio" name="owner_type" value="Builder">Builder&nbsp;
			<br>
			<span id="error_owner_type"></span>
			</p>
			<p>
			<b>I want to</b>&nbsp;<input type="radio" name="sellorrent" value="Sell">Sell&nbsp;
				<input type="radio" name="sellorrent" value="Rent">Rent&nbsp;
			<br>
			<span id="error_sellorrent"></span>
			</p>
			<p>	
			<b>City</b>&nbsp;<select name="select_city">
		  			<option value="Noida">Noida</option>
		  			<option value="New Delhi">New Delhi</option>
					<option value="Ghaziabad">Ghaziabad</option>
					<option value="Gurgaon">Gurgaon</option>
				</select> 
			</p>
			<b>Address</b>&nbsp;<input type="text" name="address">
			<br>
			<span id="error_address"></span>
			<p>	
			Bedroom&nbsp;
			<select name="select_value">
		  			<option value="2 BHK">2 BHK</option>
		  			<option value="3 BHK">3 BHK</option>
					<option value="4 BHK">4 BHK</option>
			</select> 
			</p>
			<p>
			<b>Expected Price</b>&nbsp;<input type="text" name="price">
			<br>
			<span id="error_price"></span>
			</p>
			<p>
				<b>Choose a image file to upload:</b>
				<input type='file' name='propertyimage' size='20' />
				<div id="image"><?php echo $error; ?></div>
			</p>
			<p>
				<input type="submit" name="submit" value="Register">
			</p>
			</form>
			<!-- end of form -->
		</div>
		<script type = "text/javascript" src="http://www.100acres.com/js/posting_form_validation.js"></script>	
	<body>
</html>


