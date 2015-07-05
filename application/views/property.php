<html>
<head>
	<title>100acres</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/property.css">

	<?php 
	if (isset($row['latitude']) && isset($row['longitude'])) {
		?>
	
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
	function initialize() {
		//var myCenter=new google.maps.LatLng(51.508742,-0.120850);
		var myCenter=new google.maps.LatLng(<?php echo $row['latitude'];?>,<?php echo $row['longitude'];?>);
		var mapProp = {
			center:myCenter,
			zoom:10,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		var marker=new google.maps.Marker({ position:myCenter });

		marker.setMap(map);

		var infowindow = new google.maps.InfoWindow({
			content:"Your Property"
		});

		infowindow.open(map,marker);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<?php 
	}?>
</head>

<body>
	<div id="header">
		<div id="headerbackground"></div>
		<?php 
		if($this->session->has_userdata('useremail')){
		echo '<a href="/user/logout"><div class="loginbtn">Logout</div></a>';
		}
		else
			echo '<a href="/user/login"><div class="loginbtn">Login/Register</div></a>';
		?>
		<a href="/home"><div class="loginbtn">Home</div></a>
		<div id="logo">
			<figure>
			<img src="/images/logo.jpg" alt="99acres logo">
			<figcaption>India's No:1 Property Portal</figcaption>
			</figure>
		</div>
		<div class="clear"></div>
	</div>
	<div id="content">
		
		<div id="basicdetails">
			<div id="image">
				<?php 
				$imageurl='/uploads/'.$row['imageurl'];
				echo "<img src=$imageurl alt='Property image' />";
				?>
			</div>
			<div>
				<div id="details">
				<ul>
					<?php 
					echo "<li>Provided by : ";
					$str=isset($row['typeofowner'])?  $row['typeofowner'] :  "N/A";
					echo $str;
					echo "</li>";
					
					echo "<li>For Rent or Sale : ";
					$str=isset($row['intention'])?  $row['intention'] :  "N/A";echo $str;
					echo "</li>";

					echo "<li>Property Type : ";
					$str=isset($row['typeofproperty'])?  $row['typeofproperty'] :  "N/A";echo $str;
					echo "</li>";
					
					echo "<li>Price : ";
					$str=isset($row['price'])?  $row['price'] :  "N/A";echo $str;
					echo "</li>";

					echo "<li>Bedrooms : ";
					$str=isset($row['bedroom'])?  $row['bedroom'] : "N/A";echo $str;
					echo "</li>";

					echo "<li>City : ";
					$str=isset($row['city'])?  $row['city'] :  "N/A";echo $str;
					echo "</li>";

					echo "<li>Address : ";
					$str=isset($row['address'])?  $row['address'] : "N/A";echo $str;
					echo "</li>";

					echo "<li>Number of rooms : ";
					$str=isset($row['noofrooms'])?  $row['noofrooms'] : "N/A";echo $str;
					echo "</li>";
					
					?>
				</ul>
				</div>
			</div>
		</div>
		<div style="clear:both"></div>
		<div id="description">
			<h2>Property Description</h2>
			<?php if($row['description']){echo "{$row['description']}";} else echo "N/A"; ?>
		</div>
		<div id="sellerdetails">
			<h2>Contact Information</h2>
			<ul>
			<?php 
				echo "<li>Seller Name : ";
				$str=isset($row['sellername'])? $row['sellername'] :  "N/A";echo $str;
				echo "</li>";

				echo "<li>Contact Number : ";
				$str=isset($row['phone'])?  $row['phone'] : "N/A";echo $str;
				echo "</li>";

				echo "<li>Contact Email : ";
				$str=isset($row['email'])?  $row['email'] :  "N/A";echo $str;
				echo "</li>";
			?>
			</ul>
		</div>
		<div style="clear:both"></div>
		<?php if (isset($row['latitude']) && isset($row['longitude'])) {
			echo '<div id="googleMap"></div>';
		}?>
		
	</div>
</body>
</html>