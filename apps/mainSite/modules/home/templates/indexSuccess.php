<!-- UI of home page -->
<?php include_partial('global/header');?>
<?php include_partial('global/logout');?>

<center>
<div class="postproperty" id="postproperty">
		<a href="http://www.100acres.com/mainSite_dev.php/form">
			<h3>Post A Property</h3>
		</a>
</div>
</center>


<div class="b50 l30 posAbs">
	<button class="ml30" type="button">Buy</button> 
	<button class="ml30" type="button">Sell</button> 
	<button class="ml30" type="button">Rent</button> 
</div>

<div id="flip">Click to search</div>
<div id="panel">
	<h2>Find a property</h2>
	<form method = "POST" class='panel' id="target" action="/mainSite_dev.php/search/results">
		<li>	<div class="autosuggest">
				<label for="city">Enter the city:</label>
				<input name="keyword" placeholder="Enter the city">
			</div>
		<br>
		<li>Min Price: 
			<input type="number" name ="min_price" placeholder="Enter the minimum price">
		</li>
		<br>

		<li>Max Price:
			<input type="number" name ="max_price" placeholder="Enter the maximum price price">
		</li>
		<br>

		<li>Bedrooms: 
			<select name='bedrooms'> 
		  		<option value="1">1</option>
				<option value="2"selected>2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</li>
		<br>

		<input type="submit" align="middle" value="Search" >
	</form>
</div>
