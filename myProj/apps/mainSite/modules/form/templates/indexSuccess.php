<?php include_partial('global/header');?>
<?php include_partial('global/logout');?>
<form method = "POST" enctype='multipart/form-data' action="/mainSite_dev.php/form/submit" onsubmit="return checkFormPost(this);">
<div class="pp" id="pp">

<h1 align="center" >Basic Property Details</h1>
<h2 align="center">Start posting your property and add property features</h2>



<ol>
*I am: <input type="radio" name="iam" value="1" checked>Owner
<input type="radio" name="iam" value="2">Broker
<input type="radio" name="iam" value="3">Builder
<br>
<br>
*I want to: <input type="radio" name="iwantto" value="1" checked>Sell
<input type="radio" name="iwantto" value="2">Rent/Lease Out
<br><br>

*Type of Property:	<font color="black"> <select name='property'> 

  <option value="Residential Apartment"selected>Residential Apartment</option>
  <option value="Builder Floor">Builder Floor</option>
  <option value="Villa/House">Villa/House</option>
  <option value="Commercial Office">Commercial Office </option>

</select>
</font>
<br>
<br>
*City:<font color="black"> <select name="city"> 
	
  <option value="Agra"selected>Agra</option>
  <option value="Banglore">Banglore</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Chennai">Chennai</option>
  <option value="Faridabad">Faridabad</option>
  <option value="Ghaziabad">Ghaziabad</option>
  <option value="Gurgaon">Gurgaon</option>
  <option value="Greater Noida">Greater Noida</option>
  <option value="Hyderabad">Hyderabad</option>
  <option value="Karnal">Karnal</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Kurukshetra">Kurukshetra</option>
  <option value="Lucknow">Lucknow</option>
  <option value="Mumbai">Mumbai</option>
  <option value="New Delhi">New Delhi</option>
  <option value="Noida">Noida</option>
  <option value="Panipat">Panipat</option>
  <option value="Pune">Pune</option>
  <option value="Rohtak">Rohtak</option>
  <option value="Shimla">Shimla</option>
  <option value="Sonipat">Sonipat</option>
</select></font>
<br><br>

*Address:<font color="black"> <input type="text" name="address"></font>
<br><br>

*Bedrooms: <font color="black"><select name='bedrooms'> 
	
  <option value="1">1</option>
  <option value="2"selected>2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select></font>
<br>
<br>
*Expected Price(Rs.) : Crores: <font color="black"><select name="crores"> 
  <option value="0"selected>--Select--</option>		
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></font>
Lakhs:<font color="black"> <select name="lakhs"> 
  <option value="0"selected>--Select--</option>		
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
  <option value="50">50</option>
  <option value="60">60</option>
  <option value="70">70</option>
  <option value="80">80</option>
  <option value="90">90</option>
</select></font>

Thousands: <font color="black"><select name="thousands"> 
  <option value="0"selected>--Select--</option>		
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="30">30</option>
  <option value="40">40</option>
  <option value="50">50</option>
  <option value="60">60</option>
  <option value="70">70</option>
  <option value="80">80</option>
  <option value="90">90</option>
</select>
</font>
<br>
<br>
Upload your image: <input type='file' name='file_upload'>
</ol>




<p align="center" >
<input type="submit" value="Submit"></p></div>
</form>
