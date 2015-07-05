<!DOCTYPE html>
<html>
	<head>
		<title>Property Details</title>
		<link rel="stylesheet" href="http://www.100acres.com/application/views/css/property_details.css">
		<link rel="stylesheet" href="http://www.100acres.com/application/views/css/footer.css">
		<link rel="stylesheet" href="http://www.100acres.com/application/views/css/common.css">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	</head>
	<body>
		<div id="container">
			<div id="header">
			<h1>100acres.com</h1>
			<a href="http://www.100acres.com/index.php/welcome/check_session">Home</a>
			<a href="http://www.100acres.com/index.php/welcome/sell_property">Sell/Rent property</a>
			<a>1800 41 99099</a>
		</div>
		<div class="container_of_search">
			<div class="addressBox">
				<div class="address">
					<h2><?php echo $locality.",".$city.",".$address; ?></h2>
				</div>
				<div class="specifications">
					<div class="specsTbale">
						<ul>
							<li>For<?php echo " ".$purpose;?></li>
						</ul>
						<ul>
							<li>Price <?php echo $price ?></li>
						</ul>
						<ul>
							<li>Bedroom: <?php echo $bedroom ?></li>
							<li>Bathroom: <?php echo $bathroom ?></li>
						</ul>
						<ul>
							<li>Balcony: <?php echo $balcony ?></li>
							<li><?php echo $furnish."-Furnished" ?></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="descBox">
				<div class="desc">
					<div class="propImage">
						<?php echo "<img src='http://www.100acres.com/upload/".$imagepath."' class='propImageTag' >"  ?>
					</div>
					<div class="propDesc">
						<div class="headingDescription">
							<h2>Description</h2>
						</div>
						<div class="propAbout"><p><?php echo $description ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="mapBox">
				<h2>Map</h2>
				<div class="displayMap" id="map">
					<script type="text/javascript" > 
						var myLatLon=new google.maps.LatLng(<?php echo $lat ?>,<?php echo $lon ?>);
	      				var myOptions = {
	         					zoom: 15,
						        center: myLatLon,
	        					mapTypeId: google.maps.MapTypeId.ROADMAP
	      					};

	      				var map = new google.maps.Map(document.getElementById("map"), myOptions);
	      				var marker = new google.maps.Marker({position: myLatLon,map: map});
	      			</script>
				</div>
			</div>
			<div class="drivingDirections">
				<h2> Get Driving Directions </h2><h3>******(To be implemented soon)</h3>
				<input type="text" style="width:600px;height:40px;border:none;box-shadow:0px 0px 3px grey;" placeholder="Enter starting point" >
			 	<button class="styled-button-submit" onclick="window.open('http://www.domain.com')" type="submit" >Get Directions</button>
			</div>
			<div class="contactForm">
				<h2>Let the seller contact you with more details </h2><h3>*****(To be implemented soon)</h3>
					<div class=contactDetails>
						<form name="contactUS" action="" method="POST">
						<div class="form1">
							<ul>
								<li><input type="text" style="width:300px;height:40px;border:none;box-shadow:0px 0px 3px grey;" placeholder="Name*" required></li>
								<li><input type="email" style="width:300px;height:40px;border:none;box-shadow:0px 0px 3px grey;" placeholder="Email id*" required ></li>
								<li><input type="text" style="width:300px;height:40px;border:none;box-shadow:0px 0px 3px grey;" placeholder="Mobile Number (Optional)" ></li>
							</ul>
						</div>
						<div class="form2">
							<ul>
								<li><textarea name="msg"/>Please contact me regarding this property </textarea></li>
								<li><input class="styled-button-submit" type="submit" name="submit" value="Submit"></li>
							</ul>
						</div>
					</div>
			</div>
		</div>
			<?php include_once("footer.php");?>
		</div>
	</body>
</html>