3<html>	
    <head>
	    <script src="http://www.100acres.com/js/jquery-1.3.2.min.js"></script>
	    <script src="http://www.100acres.com/js/validationPost.js"></script>
	    <script src="http://www.100acres.com/js/jsFunctionsPost.js"></script>
	    <link type="text/css" href="http://www.100acres.com/styles/styleSheetPost.css" rel="stylesheet"></link>
     </head>
    <body id="body">
    <div id="largeDiv" style="height: 100%; width: 100%; >
	 <div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script> 
 
     <div id="header"></div>
     <div id="postContainer" >
		<br/><br/><br/>
    	 <table  id="postMain" style="table-layout: fixed; " > 
    	 	<tr style="text-align: center;">
    	 		<td colspan="3">
        			<h2 >Advertise your property here!</h2>
        		</td>
        	</tr>
        	<tr style="text-align: center;">
        		<td>
            		<input type="button" value="Sell your property" id="buttonPostSell" onclick="post_sell()" class="buttonPost">
            	</td>
            	<td>	
              		<input type="button" value="Rent your property" id="buttonPostRent" onclick="post_rent()" class="buttonPost">
              	</td>
				<td>	
              		<input type="button" value="Look for a paying guest" id="buttonPostPG" onclick="post_PG()" class="buttonPost">
              	</td>
            </tr>
		</table>

	<!-- Start of Rent Div -->
		
	<!-- -------------------------End of Rent Div------------------------------------- -->
	
	
	<!-- -------------------------Start of Sell Div------------------------------------- -->
	
	<div id="div_Sell">

	<form >
	<table>
	<tr>
	<td >Contact for this advertisement</td>
	<td> <input type="text" id="contact_post_sell" class="inputText" name="contact_post_sell" />
	</td>	
	<tr>
	<td>Type </td>
	<td>
	<select id="property_type_post_sell">
	  <option value="bunglow">Bunglow</option>
	  <option selected="true"  value="flat">Flat</option>
	  <option value="apartment">Apartment</option>
	  <option value="floor">Floor</option>
	</select>
	</td>
	</tr>


	<tr>
	<td>Built Type </td>
	<td>
	<select id="built_type_post_sell">
	  <option selected="true"  value="SingleFloor"> Single</option>
	  <option value="Duplex">Duplex</option>
	  <option value="Triplex">Triplex</option>
	</select>
	</td>
	</tr>



	<tr>
	<td>Construction Status</td>
	<td>
	<select id="cons_status_post_sell">
	  <option selected="true"  value="ReadyToMove"> Ready to move</option>
	  <option value="UnderConstruction">Under Construction</option>
	</select>
	</td>
	</tr>

	<tr>
	<td> Year of Construction</td>
	<td>
	<select id="year_post_sell">
	  <option value="2010">Pre-1990</option>
	  <option value="2010">1990</option>
	  <option value="2010">1991</option>
	  <option value="2010">1992</option>
	  <option value="2010">1993</option>
	  <option value="2010">1994</option>
	  <option value="2010">1995</option>
	  <option value="2010">1996</option>
	  <option value="2010">1997</option>
	  <option value="2010">1998</option>
	  <option value="2010">1999</option>
	  <option value="2010">2000</option>
	  <option value="2010">2001</option>
	  <option value="2010">2002</option>
	  <option value="2010">2003</option>
	  <option value="2010">2004</option>
	  <option value="2011">2005</option>
	  <option value="2011">2006</option>
	  <option value="2011">2007</option>
	  <option value="2011">2008</option>
	  <option value="2011">2009</option>
	  <option value="2011">2010</option>
	  <option value="2011">2011</option>
	  <option value="2012">2012</option>
	  <option value="2013">2013</option>
	  <option selected="true"  value="2014">2014</option>
	</td>
		</select>
	</tr>
	

	<tr>
	<td>Total rooms</td>
	<td>
	<select id="bedrooms_post_sell">
	  <option selected="true"  value="1"> 1</option>
	  <option value="2"> 2</option>
	  <option value="3"> 3</option>
	  <option value="4"> 4</option>
	  <option value="5"> 5</option>
	</select>

	</td>
	</tr>
	<tr>
	<td> Area Covered </td>
	<td> <input type="text" class="inputText" id="area_post_sell" name="area_post_sell" placeholder="(in Square metres)" class="address"/>
	</td>
	</tr>
	<tr>
	<td>
	Price</td>
	<td>
		<input type="text" id="price_post_sell" class="inputText" placeholder="Enter Amount(In Rupees)"/>
	</td>
	</tr>

	<tr>
	<td> City </td>
	<td> 
	<select id="city_post_sell">
	  <option  value="Delhi">Delhi</option>
	  <option selected="true" value="Noida">Noida</option>
	</select>
	</td>
	</tr>

	<tr>
	<td> Address </td>
	<td> <input type="text" class="inputText" id="address_post_sell" name="address_post_sell" placeholder="Address of your property" class="address"/>
	</td>
	</tr>
	
	</table>
	<hr>
	
	<table id="optional_sell" style="width:420px;table-layout: fixed">
	<tr> <td style="color:#FF0000;">Optional</td>
	</tr>
	<tr>
	<td> Parking available? </td>
	<td> 
	<select id="parking_post_sell">
	  <option value="Available">Available</option>
	  <option selected="true"  value="Unavailable">Unavailable</option>
	</select>
	</td>
	</tr>

	<tr>
	<td> Ownership </td>
	<td> 
	<select id="owner_post_sell">
	  <option selected="true"  value="owner">Owner</option>
	  <option value="broker">Broker</option>
	</select>
	</td>
	</tr>

	<tr>
	<td> Description </td>
	<td> <input type="text" class="inputText" id="description_post_sell" name="description_post_sell" placeholder="Description of your property- Landmarks etc"/>
	</td>
	</tr>
	<tr>
	<td>
	<div id="errorDivSell"></div>
	</td>
	</tr>
	
<tr >
	<td>
	<input type="button" id="sellButton" class="button_post" value="Post this Seller ad!" onclick="postadsell()"/>
	<input type="button" id="rentButton" class="button_post" value="Post this Rental Ad" onclick="postadrent()"style="display:none"/>
	</td>
	<td>
	<input type="button" id="cancel_rent" class="button_post" value="Cancel" onclick="cancel_post()"/>
	</td>
	</tr>

</table>
</form>
	</div>
<!----------------- End of Sell Div --------------------->

<!----------------- Start of PG Div  -------------------->
	
	<div id="div_PG">

	<form class="PostForm">
	<table>
	<tr>
	<td>Contact for this advertisement</td>
	<td> <input type="text" id="contact_post_pg" class="inputText" name="contact_post_sell" />
	</td>
	<td>
		<div id="contact_error_pg" class="errorBox"></div>
	</td>
	</tr>

	<tr>
		<td>Gender</td>
		<td>
			<select id="gender_post_pg">
				<option value="boys">Boys</option>
				<option value="girls">Girls</option>
				<option value="mirls">Mixed</option>
			</select>
		</td>
	</tr>
	
	<tr>
	<td>Price</td>
	<td>
		<input type="text" id="price_post_pg" class="inputText" placeholder="Enter amount (in Rupees)"/>
	</td>
	<td><div id="price_error_pg" class="errorBox"></div></td>
	</tr>

	<tr>
	<td>Sharing</td>
	<td>
		<select id="sharing_post_pg" name="sharing_post_pg">
			<option value="1">Single</option>
			<option value="2">Double</option>
			<option value="3">Triple</option>
			<option value="4">Quadra</option>
			<option value="4+">More than 4</option>
			
		</select>
	</td>
	
	</tr>
	


	<tr>
	<td> Location </td>
	<td> 
	<select id="location_post_pg" name="location_post_pg">
	  <option value="Delhi">Delhi</option>
	  <option value="Noida">Noida</option>
	</select>
	</td>
	</tr>

	
	<tr>
	<td> Address </td>
	<td> <input type="text" class="inputText" id="address_post_pg" name="address_post_pg" placeholder="Address of your property" class="address"/>
	</td>
	<td><div id="address_error_pg" class="errorBox"></div></td>
	</tr>

	
	<tr>
	<td>
	<div id="errorDivPG"></div>
	</td>
	</tr>

	<tr>
	<td>
	<input type="button" id="post_PG" class="button_post" value="Post this PG ad!" onclick="postPg()"/>
	<input type="button" id="cancel_PG" class="button_post" value="Cancel" onclick="cancel_post()"/>
	</td>
	</tr>
	</table>
	</form>
	</div>
	
<!------------------ End of PG Div ------------------------>
</div>

<!--------------------- End of postContainer Div ----------->
<div id="footer" style= "position:fixed;bottom:0;background-color: rgba(0,0,0,0.3); width:100%; height:50px;margin-top: 100px;display:none">
	 <table>
		<tr>
		<td> <a class="footerLink" href="aboutUs.html">About Us</a></td>
		<td width="50px"></td>
		<td> <a class="footerLink" href="tnc.html">Terms and Conditions</a></td>
		<td width="50px"></td>
		<td>
			<div class="fb-like" data-href="https://www.facebook.com/100acresdotcom" data-layout="standard" data-action="like" data-show-faces="false" data-share="true" width="50px"></div>
		</td>
		<td width="50px"></td>
		<td> <a class="footerLink" href="Feedback.html">Feedback</a></td>
		<td width="50px"></td>
		<td> <a class="footerLink" href="Report.html">Report a problem</a></td>
		<td width="50px"></td>
		<td> <a class="footerLink" href="PrivacyPolicy.html">Privacy Policy</a></td>
		<td width="50px"></td>
		<td>&#169;100acres.com </td>
		</tr>
	</table>
</div>

</body>
</html>