<!DOCTYPE html>
<html>
<head>
	<title> Add Property</title>
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/sell_property.css">
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/common.css">
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/footer.css">
</head>
	<body onLoad="clearAll()">
		<div id="container">
			<div id="header">
			<h1>100acres.com</h1>
			<a href="http://www.100acres.com/index.php/welcome/check_session">Home</a>
			<a href="#">1800 41 99099</a>
			</div>
		    <div id="content">				
				<img src="http://www.100acres.com/images/home.jpg"  width="100%" id="img1">
				<form name="addProperty" id="property_posting_form" action="http://www.100acres.com/index.php/welcome/add_property" method="post" enctype="multipart/form-data">
				<div id="details">
					<div id="fill_form">
						<fieldset>
							<legend>Property Details</legend>
							<table>
								<tr><td><div style="color:red"><span id="validation_error"></span></div></td><tr>
								<tr>
								<td>Purpose</td>
								<td><input type="radio" name="purpose" value="sell" checked>Sell
								<input type="radio" name="purpose" value="rent">Rent</td>
								</tr>
								<tr>
								<td>Type of Property</td><td><select name="type">
								<option value="residential">Residential</option>
								<option value="commercial">Commercial</option>
								</select></td>
								</tr>

								<tr>
								<td>PG Accomodation available</td>
								<td><input type="radio" name="pg" value="y">Yes
								<input type="radio" name="pg" value="n" checked>No</td>
								</tr>
								<tr>
								<td>City</td><td><select name="city" id="property_city" onChange="city_clicked()">
								<option value="select_city">Select City</option>
								<option value="Noida">Noida</option>
								<option value="Delhi">Delhi</option>
								<option value="Gurgaon">Gurgaon</option>
								<option value="Mumbai">Mumbai</option>
								<option value="Chennai">Chennai</option>
								<option value="Kolkata">Kolkata</option>
								<option value="Allahabad">Allahabad</option>
								</tr>
								<tr>
								<td>Locality:</td><td><input type="text" name="locality" id="property_locality" onChange="locality_clicked()"></td>
								</tr>
								<tr>
								<td>Society/Project Name:</td><td><input type="text" name="society" id="society" onChange="society_clicked()">
								
								</tr>
								
								<tr>
								<td>Full Address</td><td><input type="text" name="address" id="address"></td>
								</tr>
								<tr>
								<td>Bedrooms</td><td><select name="bedroom" id="BHK">
								<option selected value="select_BHK">Select Bedroom</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">Greater than 5</option>
								</select></td></td>
								</tr>
								<tr>
								<td>Bathrooms</td><td><select name="bathroom" id="bathroom">
								<option selected value="select_bathroom">Select Bathroom</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="5">Greater than 3</option>
								</select></td></td>
								</tr>
								<tr>
								<td>Balconies</td><td><select name="balcony" id="balcony">
								<option selected value="select_balcony">Select Balconies</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">Greater than 3</option>
								</select></td></td>
								</tr>
								<tr>
								<td>Furnishing:</td>
								<td><input type="radio" name="furnish" value="full" checked>Fully furnished
								<input type="radio" name="furnish" value="semi">Semi furnished
								<input type="radio" name="furnish" value="un">Un furnished</td>
								</tr>
								<tr>
								<td>Built-up Area:</td><td><input type="number" name="area" id="area">
								<select name="unit" id="unit">
								<option selected value="select_unit">Select Unit</option>
								<option value="Sq.Ft.">Sq.Ft.</option>
								<option value="Sq. Yards">Sq. Yards </option>
								<option value="Sq. Meter">Sq. Meter</option>
								<option value="Acres">Acres</option>
								<option value="Marla">Marla</option>
								<option value="Cents">Cents </option>
								<option value="Bigha">Bigha </option>
								<option value="Kottah">Kottah </option>
								<option value="Kanal">Kanal</option>
								<option value="Grounds">Grounds </option>
								<option value="Ares">Ares </option>
								<option value="Biswa">Biswa </option>
								<option value="Guntha">Guntha </option>
								<option value="Aankadam ">Aankadam </option>
								<option value="Hectares">Hectares </option>
								<option value="Rood">Rood </option>
								<option value="Chataks">Chataks </option>
								<option value="Perch">Perch </option>
								</select></td>
								</tr>
								<tr>
								<td>Expected price(Rs):</td><td><input type="number" name="price" id="price"></td>								
								</tr>
								<tr>
								<td>Description:</td><td><textarea rows="3" cols="40" name="description" placeholder="Describe your property"></textarea>
							    </td>
								</tr>
								<tr>
								<td>Attach Image:</td><td><input type="file" name="imagepath"></td>
								</tr>	
								<tr>
								<td></td><td><input type="Submit" value="Submit" onclick="return check_validity();"></td>
								</tr>
								<tr>
									<td><input type="hidden" id="latBox" name="lat"/></td>
									<td><input type="hidden" id="lonBox" name="lon"/></td>
								</tr>
							</table>
						</fieldset>
					</div>
					<div id="map_box">
						<div id="map-canvas"></div>
					</div>
					<div id="panel"><span id="display_map_error"></span></td></div>
				</div>
				</form>
			</div>
			<?php include_once('footer.php');?>
		</div>
		<script src="http://www.100acres.com/application/views/js/sell_property.js"></script>	
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
	    <script type="text/javascript" src="http://www.100acres.com/application/views/js/google_maps.js"></script>
	</body>
</html>
