<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<div class="title" id="titile">
100 Acres.com

<a href="file:///var/www/html/myProj/form.html"><img src="http://www.100acres.com/images/login.jpeg" align="right"
     width="72" height="46" border="0" 
 /></a></div>
 

<div class="button" id="button1">
 <button type="button" font-size="100px">Buy</button> 
</div>
<div class="button2" id="button2">
 <button type="button">Sell</button> 
</div>
</div>
<div class="button3" id="button3">
 <button type="button" width="5000px">Rent</button> 
</div>
</div>

<div id="flip">Click to search</div>

<div id="panel">
<h2>Find a property</h2>
<form method = "GET" class='panel' action="new.php">
<li>Keyword: <input type="text" name="keyword">
</li>

<br>

<li>Min Price: <select name = "min price">
<option value="500000">5 Lakh</option>
<option value="1000000">10 Lakh</option>
<option value="1500000">15 Lakh</option>
<option value="2000000">20 Lakh</option>
<option value="2500000">25 Lakh</option>
<option value="3000000">30 Lakh</option>
</select>
</li>

<br>

<li>Max Price: <select name="max price">
<option value="500000">5 Lakh</option>
<option value="1000000">10 Lakh</option>
<option value="1500000">15 Lakh</option>
<option value="2000000">20 Lakh</option>
<option value="2500000">25 Lakh</option>
<option value="3000000">30 Lakh</option>
</select>
</li>

<br>

<li>Bedrooms: <select name='bedrooms'> 
	
  <option value="1">1</option>
  <option value="2"selected>2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select></li>

<br>

<input type="submit" align="middle" value="Search" >

</form>

</div>



