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
			<input type="number" name ="max_price" max="100000000000" placeholder="Enter the maximum price price">
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
