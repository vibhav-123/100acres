<html>
<head>
	<title>100acres-Search Results</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/solrsearchresults.css">
	<script type="text/javascript" src="/js/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="/js/getnextsolr.js"></script>
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
		<div id="filterform">
			<form method="get" action="/searchbysolr/filterresults">
			<span>
				<h2>Buy/Rent</h2>
				<div><input type="checkbox" name="intention[]" value="rent" <?php if(isset($intention) && in_array("rent", $intention)){echo "checked";}?>>Rent</input></div>
				<div><input type="checkbox" name="intention[]" value="buy" <?php if(isset($intention) && in_array("buy", $intention)){echo "checked";}?>>Buy</input></div>
			</span>
			<span>
				<h2>Provided by</h2>
				<div><input type="checkbox" name="typeofowner[]" value="owner" <?php if(isset($typeofowner) && in_array("owner", $typeofowner)){echo "checked";}?>>Owner</input></div>
				<div><input type="checkbox" name="typeofowner[]" value="broker" <?php if(isset($typeofowner) && in_array("broker", $typeofowner)){echo "checked";}?>>Broker</input></div>
				<div><input type="checkbox" name="typeofowner[]" value="builder" <?php if(isset($typeofowner) && in_array("builder", $typeofowner)){echo "checked";}?>>Builder</input></div>
			</span>
			<span>
				<h2>Property Type</h2>
				<div><input type="checkbox" name="typeofproperty[]" value="independent" <?php if(isset($typeofproperty) && in_array("independent", $typeofproperty)){echo "checked";}?>>Independent</input></div>
				<div><input type="checkbox" name="typeofproperty[]" value="apartment" <?php if(isset($typeofproperty) && in_array("apartment", $typeofproperty)){echo "checked";}?>>Apartment</input></div>
				<div><input type="checkbox" name="typeofproperty[]" value="normal" <?php if(isset($typeofproperty) && in_array("normal", $typeofproperty)){echo "checked";}?>>Normal</input></div>
				<div><input type="checkbox" name="typeofproperty[]" value="flat" <?php if(isset($typeofproperty) && in_array("flat", $typeofproperty)){echo "checked";}?>>Flat</input></div>
			</span>
			<span>
				<h2>City</h2>
				<div><input type="checkbox" name="city[]" value="chennai" <?php if(isset($city) && in_array("chennai", $city)){echo "checked";}?>>Chennai</input></div>
				<div><input type="checkbox" name="city[]" value="mumbai" <?php if(isset($city) && in_array("mumbai", $city)){echo "checked";}?>>Mumbai</input></div>
				<div><input type="checkbox" name="city[]" value="bangalore" <?php if(isset($city) && in_array("bangalore", $city)){echo "checked";}?>>Bangalore</input></div>
				<div><input type="checkbox" name="city[]" value="hyderabad" <?php if(isset($city) && in_array("hyderabad", $city)){echo "checked";}?>>Hyderabad</input></div>
				<div><input type="checkbox" name="city[]" value="delhi" <?php if(isset($city) && in_array("delhi", $city)){echo "checked";}?>>Delhi</input></div>
			</span>
			<span>
				<h2>Bedrooms</h2>
				<div><input type="checkbox" name="bedroom[]" value="1BHK" <?php if(isset($bedroom) && in_array("1BHK", $bedroom)){echo "checked";}?>>1BHK</input></div>
				<div><input type="checkbox" name="bedroom[]" value="2BHK" <?php if(isset($bedroom) && in_array("2BHK", $bedroom)){echo "checked";}?>>2BHK</input></div>
				<div><input type="checkbox" name="bedroom[]" value="3BHK" <?php if(isset($bedroom) && in_array("3BHK", $bedroom)){echo "checked";}?>>3BHK</input></div>
				<div><input type="checkbox" name="bedroom[]" value="4BHK" <?php if(isset($bedroom) && in_array("4BHK", $bedroom)){echo "checked";}?>>4BHK</input></div>
			</span>
			<span>
				<h2>Sort by</h2>
				<div><input type="radio" name="sortby" value="relevance" <?php if(!isset($sortby)) echo "checked"; else if(isset($sortby)&& $sortby=='relevance'){echo "checked";}?>>Relevance</input></div>
				<div><input type="radio" name="sortby" value="pricelow" <?php if(isset($sortby) && $sortby=='pricelow'){echo "checked";}?>>Price-Low to High</input></div>
				<div><input type="radio" name="sortby" value="pricehigh" <?php if(isset($sortby) && $sortby=='pricehigh'){echo "checked";}?>>Price-High to Low</input></div>
				
			</span>
			<div id="submit">
				<input type="submit" value="Filter">
			</div>
			</form>
		</div>
		<div id="searchresultslist">
			<h2><?php echo $noofresults; ?> results match your search criterion</h2>
			
			<?php 
			foreach($properties as $property){
				echo '<a href="/property/details/'.$property['id'].'" target="_blank">';
				echo '<div class="searchresult">';
				$imageurl='/uploads/'.$property['imageurl'];
				echo "<img src=$imageurl alt='search result image' />";
				echo "<span>Price: {$property['price']}</span>";
				echo "<span>BHK: {$property['bedroom']}</span>";
				echo "<span>Property Type: {$property['typeofproperty']}</span>";
				echo "<span>Provider: {$property['typeofowner']}</span>";
				echo "<span>City: {$property['city']}</span>";
				echo '<span class="text-content"><span>Click for More Details</span></span>';
				echo '</div></a>';
			}
			?>
		</div>
		<?php if($noofresults>4){
			?>
			<div style="clear:both" id="button">
				<input id="next" type="button" onclick="getnextsolritems()" value="Load more results">
			</div>
			<input type="hidden" name="start" id="start" value="4">
			<?php
		}
		?>
		
	</div>
</body>
</html>