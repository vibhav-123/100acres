
<h1 align="center" >Basic Property Details</h1>
<p align="center">Start posting your property and add property features	</p>
<div style="margin-left:200px">
<hr>
<form method = "POST" action="/mainSite_dev.php/form">
<ol>
*I am: <input type="radio" name="iam" value="1">Owner
<input type="radio" name="iam" value="2">Broker
<input type="radio" name="iam" value="3">Builder
<br>
<br>
*I want to: <input type="radio" name="iwantto" value="1">Sell
<input type="radio" name="iwantto" value="2">Rent/Lease Out
<br><br>
*Type of Property: <select name='property'> 
	
  <option value="Residential Apartment"selected>Residential Apartment</option>
  <option value="Builder Floor">Builder Floor</option>
  <option value="Villa/House">Villa/House</option>
  <option value="Commercial Office">Commercial Office </option>
</select>
<br>
<br>
*City: <select name="city"> 
	
  <option value="Delhi"selected>Delhi</option>
  <option value="Mumbai">Mumbai</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Chennai"selected>Chennai</option>
</select>
<br><br>

*Address: <input type="text" name="address" value="Eg. Street Number 12 or flat number 420">
<br><br>

*Bedrooms: <select name='bedrooms'> 
	
  <option value="1">1</option>
  <option value="2"selected>2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<br>
<br>
*Expected Price(Rs.) : Crores: <select name="crores"> 
		
  <option value="1"selected>1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4"selected>4</option>
</select>
Lakhs: <select name="lakhs"> 
		
  <option value="10"selected>10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40"selected>40</option>
</select>

Thousands: <select name="thousands"> 
		
  <option value="10"selected>10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40"selected>40</option>
</select>
<br>
<br>
<pre>                             Or Enter the price below</pre>

<pre>                             <input type="number" name = "price"></pre>
<br>

</ol>
</div>
<p align="center" >
<input type="submit" value="Register Now"></p>
</form>

