<html>
<head>
	<title>Insert</title>
	<link rel="stylesheet" type="text/css" href="/css/postadditionaldetails.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="jquery-2.1.4"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/js/additionaldetails.js"></script>
</head>
<body>
	<div id="header">
	<div id="headerbackground"></div>
	
	<?php 
	if($this->session->has_userdata('useremail')){
		echo '<a href="/user/logout"><div class="loginbtn">Logout</div></a>';
		echo '<a href="/home"><div class="loginbtn">Home</div></a>';
	}
	?>
	<div id="logo">
		<figure>
		<img src="/images/newlogo.png" alt="99acres logo">
		<figcaption>India's No:1 Property Portal</figcaption>
		</figure>
	</div>
	<div class="clear"></div>
	</div>
	<div id="content">
		
		<form method="post" action='/additionaldetails/index'>
			<h1>Tell us more about your property</h1>
			<h2>The more you describe, the more hits it gets</h2>
			<ul>
				<?php echo "<li><input type='hidden' value={$propertyid} name='id'></li>"; ?>

				<li><label for="sellername">Contact Name</label></li>
				<li><input type="text" name="sellername"></li>

				<li><label for="phone">Contact Number</label></li>
				<li><input type="tel" name="phone"></li>

				<li><label for="email">Contact Email</label></li>
				<li><input type="email" name="email"></li>

				<li><label for="noofrooms">Number of rooms</label></li>
				<li>
					<select name="noofrooms">
						<option value="1">one</option>
						<option value="2">two</option>
						<option value="3">three</option>
						<option value="4">four</option>
					</select>
				</li>

				<li><label for="description">About and Other Amenities</label></li>
				<li><textarea name="description" rows="10" placeholder="Landmarks,Metro Connectivity,Transport,Near By markets,Shopping malls...."></textarea></li>
				
				<li><label for="latitude">Enter latitude</label></li>
				<li><input type="number" name="latitude" placeholder="without any letters"></li>

				<li><label for="longitude">Enter longitude</label></li>
				<li><input type="number" name="longitude" placeholder="without any letters"></li>

				<li><input type="submit" value="Submit"></li>
			</ul>
		
	</form>
	</div>
</body>
</html>