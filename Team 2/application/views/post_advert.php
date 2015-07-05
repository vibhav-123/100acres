<?php 
	include_once 'pathfile.php';
?>
<html>	
    <head>
	    <script src="http://www.100acres.com/js/jquery-1.3.2.min.js"></script>
	    <script src="http://www.100acres.com/js/validationPost.js"></script>
	    <script src="http://www.100acres.com/js/jsFunctionsPost.js"></script>
	    <link type="text/css" href="http://www.100acres.com/styles/styleSheetPost.css" rel="stylesheet"></link>
	    <title>
	    	Post a Property
	    </title>
     </head>
    
    <body id="body">
    
    <div id="largeDiv" style="height: 100%; width: 100%;">
	
	 <div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script> 
 
     <div id="cover"></div>
    <div id="back"></div>
    <div class="header" style="position: absolute;top: 0;z-index:0; background-color: rgba(0,0,0,0.3); width:100%; height:40px" >
	<div style="position:absolute;left:0;top:0;" ><a id="a1" href=<?=$homePath?> >100Acres</a></div>
	
	<div id="headerInformation" style="position:absolute;right:0px;top:0;height:100%;width:400px">
		<div id="buySell" style="position: absolute;top:10px;">
				<a id="postPropertyLink" href='javascript:MyFunc()'>Sell/Rent Property </a>
			</div>
    		<div id="WelcomeDiv" class="WelcomeDiv" style="position:absolute;top:4px;right:10px;color:white">Welcome
				
					<button id="nameButton" onclick="showProfileOptions()" class="button" style="background-color: inherit"> 
	            			<?=$this->session->userdata["name"]?>&#9662;
	            	</button>
            			
            			<ul id="dropdown" style="list-style-position:inside;position:absolute;right:10px">
	                		<li >
	                		<button width="40px" onclick="location.href='<?=$viewProfilePath?>'" class="nameButton">
	                				View Profile
	                		</button>
	                		</li>
	                		<li >
	                		<button width="40px" onclick="location.href='http://www.100acres.com/index.php/user/logout'" class="nameButton">
	                				Logout
	                			</button>
	                		</li>
            			</ul>
        		
    			</div></div></div>
			
    
    
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
	
	<div id="div_Rent" >
		<form method="post" id="formPostRent" action="http://www.100acres.com/index.php/property_c/postadrent" enctype="multipart/form-data">
			<table >
				
				
				<tr>
				<td>
				Title for this posting </td>
				<td>
					<input type="text" id="title_post_rent" name="title_post_rent" class="inputText" placeholder="Give a title to your posting"/>
				</td>
				<td><label id="title_error_rent" name="title_error_rent" class="error_post"> </label></td>
				</tr>
				
				<tr>
					<td>Type </td>
					<td>
						<select id="propType_post_rent" name="propType_post_rent">
	  						<option selected="true" value="bunglow">Bunglow</option>
	  						<option value="flat">Flat</option>
	  						<option value="apartment">Apartment</option>
	  						<option value="floor">Floor</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Built Type </td>
					<td>
						<select id="builtType_post_rent" name="builtType_post_rent">
							<option selected="true" value="single"> Single</option>
							<option value="duplex">Duplex</option>
							<option value="triplex">Triplex</option>
							<option value="other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Construction Status</td>
					<td>
						<select id="consStatus_post_rent" name="consStatus_post_rent">
							<option selected="true" value="ReadyToMove"> Ready to move</option>
							<option value="UnderConstruction">Under Construction</option>
						</select>
					</td>
				</tr>
				<tr>
					<td> Year of Construction</td>
					<td>
						<select id="year_post_rent" name="year_post_rent">
	  
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
						  <option value="2010">2005</option>
						  <option value="2010">2006</option>
						  <option value="2010">2007</option>
						  <option value="2010">2008</option>
						  <option value="2010">2009</option>
						  <option value="2010">2010</option> 
						  <option value="2011">2011</option>
						  <option value="2012">2012</option>
						  <option value="2013">2013</option>
						  <option selected="true" value="2014">2014</option>
						 </select>
					</td>
				</tr>
				<tr>
					<td>Bed rooms</td>
					<td>
						<select id="bedrooms_post_rent" name="bedrooms_post_rent" value="bedrooms_post_rent">
						  <option selected="true" value="1"> 1</option>
						  <option value="2"> 2</option>
						  <option value="3"> 3</option>
						  <option value="other"> More Than 3</option>
						</select>
					</td>
				</tr>
				<tr>
					<td> Furniture Status </td>
					<td> 
						<select id="furniture_post_rent" name="furniture_post_rent">
						  <option selected="true" value="unfurnished">Unfurnished</option>
						  <option value="semifurnished">Semi Furnished</option>
						  <option value="furnished">Furnished</option>
						</select>
					</td>
				</tr>
				<tr>
					<td> City </td>
					<td> 
						<select id="city_post_rent" name="city_post_rent">
						  <option selected="true" value="Delhi">Delhi</option>
						  <option value="Noida">Noida</option>
						</select>
					</td>
				</tr>
				<tr>
					<td> Address </td>
					<td> <input type="text" class="inputText" id="address_post_rent" name="address_post_rent" placeholder="Address of your property" class="address"/>
					</td>
					<td><label id="address_error_rent" name="address_error_post" class="error_post"> </label></td>
					
				</tr>
				<tr>
					<td> Area Covered </td>
					<td> <input type="text" class="inputText" id="area_post_rent" name="area_post_rent" placeholder="(in Square metres)" class="address"/>
					</td>
					<td><label id="area_error_sell" name="area_error_sell" class="error_post"> </label></td>
				</tr>
				
				<tr>
				<td>
				Rent per month</td>
				<td>
					<input type="text" id="price_post_rent" name="price_post_rent" class="inputText" placeholder="Enter amount (in digits)"/>
				</td>
				<td><label id="price_error_rent" name="price_error_rent" class="error_post"> </label></td>
				</tr>
			
				<tr>
				<td>Contact number for this posting</td>
				<td> <input type="text" id="contact_post_rent" class="inputText" name="contact_post_rent" placeholder="Contact Number for this posting"/>
				</td>
				<td><label id="contact_error_rent" name="contact_error_rent" class="error_post"> </label></td>
				</tr>
				<tr>
					<td>Description</td>
					<td> <input type="text" class="inputText" id="description_post_rent" name="description_post_rent" placeholder="Description of your property- Landmarks etc"/>
					</td>
					<td><label id="description_error_rent" name="description_error_rent" class="error_post"> </label></td>
				</tr>
				<tr>
					<td> Ownership </td>
					<td> 
						<select id="owner_post_rent" name="owner_post_rent">
						  <option value="owner">Owner</option>
						  <option value="broker">Broker</option>
						</select>
					</td>
				</tr>
				
				</table>
			<hr>
				<table>
				<tr> <td ><div style="color:red">Optional</div></td>
				</tr>
				
			
				<tr>
				<td> Parking available? </td>
				<td> 
				<select id="parking_post_rent" name="parking_post_rent">
				  <option value="information unavailable">Information Unavailable</option>
				  <option value="available">Available</option>
				  <option value="unavailable">Unavailable</option>
				</select>
				</td>
				</tr>	
				
							
			<tr>
				<td> Upload photo</td>
			<td>
	
		<input type="file" name="file_upload_rent" size=35 />

	 
	</td>
	</tr>	
				<tr>
					<td>
						<input type="button" id="Post_rent" class="button_post" value="Post this ad!" onclick="postadrent()"/>
						<input type="button" id="cancel_PG" value="Cancel" class="button_post" onclick="cancel_post()"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
	
	<!-- -------------------------End of Rent Div------------------------------------- -->
	
	
	<!-- -------------------------Start of Sell Div------------------------------------- -->
	
	<div id="div_Sell">

<form method="post" id="formPostSell" action="http://www.100acres.com/index.php/property_c/postAdSell" enctype="multipart/form-data">
	<table >
	<tr>
	<td> Title for this posting </td>
	<td> <input type="text" id="title_post_sell" class="inputText" name="title_post_sell" placeholder="Give a title to your posting"/>
	</td>
	<td><label id="title_error_sell" name="title_error_sell" class="error_post"> </label></td>
	</tr>
	
	
	<tr>
	<td>Type </td>
	<td>
	<select id="propType_post_sell" name="propType_post_sell">
	  <option value="bunglow">Bunglow</option>
	  <option selected="true"  value="flat">Flat</option>
	  <option value="apartment">Apartment</option>
	  <option value="floor">Floor</option>
	</select>
	</td>
	<td><label id="type_error_sell" name="propType_error_sell" class="error_post"> </label></td>
	</tr>


	<tr>
	<td>Built Type </td>
	<td>
	<select id="builtType_post_sell" name="builtType_post_sell">
	  <option selected="true"  value="single"> Single</option>
	  <option value="duplex">Duplex</option>
	  <option value="triplex">Triplex</option>
	  <option value="other">Other</option>
	</select>
	</td>
	<td><label id="builtType_error_sell" name="builtType_error_sell" class="error_post"> </label></td>
	</tr>



	<tr>
	<td>Construction Status</td>
	<td>
	<select id="consStatus_post_sell" name="consStatus_post_sell">
	  <option selected="true"  value="ReadyToMove"> Ready to move</option>
	  <option value="UnderConstruction">Under Construction</option>
	</select>
	</td>
	<td><label id="consStatus_error_sell" name="consStatus_error_sell" class="error_post"> </label></td>
	</tr>

	<tr>
	<td> Year of Construction</td>
	<td>
	<select id="year_post_sell" name="year_post_sell">
	  
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
	  <option value="2010">2005</option>
	  <option value="2010">2006</option>
	  <option value="2010">2007</option>
	  <option value="2010">2008</option>
	  <option value="2010">2009</option>
	  <option value="2010">2010</option> 
	  <option value="2011">2011</option>
	  <option value="2012">2012</option>
	  <option value="2013">2013</option>
	  <option selected="true" value="2014">2014</option>
	 </select>
	</tr>
	

	<tr>
	<td>BHK</td>
	<td>
	<select id="bedrooms_post_sell" name="bedrooms_post_sell">
	  <option selected="true"  value="1"> 1</option>
	  <option value="2"> 2</option>
	  <option value="3"> 3</option>
	  <option value="other"> More Than 3</option>
	</select>

	</td>
	<td><label id="bedrooms_error_sell" name="bedrooms_error_sell" class="error_post"> </label></td>
	</tr>

	<tr>
	<td> City </td>
	<td> 
	<select id="city_post_sell" name="city_post_sell">
	  <option  value="Delhi">Delhi</option>
	  <option selected="true" value="Noida">Noida</option>
	</select>
	</td>
	<td><label id="city_error_sell" name="city_error_sell" class="error_post"> </label></td>
	</tr>

	<tr>
	<td> Address </td>
	<td> <input type="text" class="inputText" id="address_post_sell" name="address_post_sell" placeholder="Address of your property" class="address"/>
	</td>
	<td><label id="address_error_sell" name="address_error_sell" class="error_post"> </label></td>
	</tr>

	<tr>
	<td> Area Covered </td>
	<td> <input type="text" class="inputText" id="area_post_sell" name="area_post_sell" placeholder="(in Square metres)" class="address"/>
	</td>
	<td><label id="area_error_sell" name="area_error_sell" class="error_post"> </label></td>
	</tr>

	<tr>
	<td>
	Price</td>
	<td>
		<input type="text" id="price_post_sell" class="inputText" placeholder="Enter amount (in digits)" name="price_post_sell"/>
	</td>
	<td><label id="price_error_sell" name="price_error_sell" class="error_post"> </label></td>
	
	<tr>
		<td> Description </td>
		<td> <input type="text" class="inputText" id="description_post_sell" name="description_post_sell" placeholder="Description of your property- Landmarks etc"/>
		</td>
		<td><label id="description_error_sell" name="description_error_sell" class="error_post"> </label></td>
	</tr>
	<tr>
	<td>Contact Number for this posting</td>
	<td> <input type="text" id="contact_post_sell" class="inputText" name="contact_post_sell" placeholder="Contact Number for this posting"/>
	</td>
	<td><label id="contact_error_sell" name="contact_error_sell" class="error_post"> </label></td>
	</tr>
	
	<tr>
	<td> Ownership </td>
	<td> 
	<select id="owner_post_sell" name="owner_post_sell">
	  <option selected="true"  value="owner">Owner</option>
	  <option value="broker">Broker</option>
	</select>
	</td>
	</tr>
	
	</table>
	<hr>
	
	
	<table>

	<tr> <td ><div style="color-#FF0000;">Optional</div></td>
	</tr>



	<tr>
	<td> Parking available? </td>
	<td> 
	<select id="parking_post_sell" name="parking_post_sell">
	  <option value="Available">Available</option>
	  <option selected="true"  value="Unavailable">Unavailable</option>
	</select>
	</td>
	</tr>

	

	
	<tr>
	<td> Upload photo</td>
	<td>
	
		<input type="file" name="file_upload" size=35 />

	 
	</td>
	</tr>

	<tr> </tr>
	<tr>
		<td>
		<input type="button" id="post_sell" class="button_post" value="Post this ad!" onclick="postadsell()"/>
		<input type="button" id="cancel_sell" class="button_post" value="Cancel" onclick="cancel_post()"/>
		</td>
	</tr>

</table>
</form>
	</div>
<!----------------- End of Sell Div --------------------->

<!----------------- Start of PG Div  -------------------->
	
<div id="div_PG">

<form method="post" id="formPostPG" action="http://www.100acres.com/index.php/property_c/postAdPg" enctype="multipart/form-data">
	<table >

	<tr>
	<td> Title for this posting </td>
	<td> <input type="text" class="inputText" id="title_post_pg" name="title_post_pg" placeholder="Give a title to your posting" class="title"/>
	</td>
	<td><label id="title_error_pg" name="title_error_pg" class="error_post"> </label></td>
	</tr>
	
	<tr>
	<td> Gender</td>
	<td>
	<select id="gender_post_pg" name="gender_post_pg">
	  <option selected="true" value="boys">Boys</option>
	  <option value="girls">Girls</option>
	 </select>
	</td>
	</tr>

	
	<tr>
	<td>Sharing</td>
	<td>
	<select id="sharing_post_pg" name="sharing_post_pg">
	  <option selected="true" value="single">Single</option>
	  <option value="double">Double</option>
	  <option value="triple">Triple</option>
	  <option value="quadra">Quadra</option>
	  <option value="other">More than 4</option>
	 </select>
	</td>
	</tr>
	
	
	
	<tr>
	<td>
	Price</td>
	<td>
		<input type="text" id="price_post_pg" name="price_post_pg" class="inputText" placeholder="Enter amount (in digits)"/>
	</td>
	<td><label id="price_error_pg" name="price_error_pg" class="error_post"> </label></td>
	</tr>

	<tr>
	<td> Year of Construction</td>
	<td>
	<select id="year_post_pg" name="year_post_pg">
	  
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
	  <option value="2010">2005</option>
	  <option value="2010">2006</option>
	  <option value="2010">2007</option>
	  <option value="2010">2008</option>
	  <option value="2010">2009</option>
	  <option value="2010">2010</option> 
	  <option value="2011">2011</option>
	  <option value="2012">2012</option>
	  <option value="2013">2013</option>
	  <option selected="true" value="2014">2014</option>
	 </select>
	</td>
	</tr>
	
	<tr>
	<td> City </td>
	<td> 
	<select id="city_post_pg" name="city_post_pg">
	  <option selected="true" value="Delhi">Delhi</option>
	  <option value="Noida">Noida</option>
	</select>
	</td>
	</tr>

	<tr>
	<td> Address </td>
	<td> <input type="text" class="inputText" id="address_post_pg" name="address_post_pg" placeholder="Address of your property" class="address"/>
	</td>
	<td><label id="address_error_pg" name="address_error_pg" class="error_post"> </label></td>
	</tr>
	<tr>
		<td> Area </td>
		<td> <input type="text" class="inputText" id="area_post_pg" name="area_post_pg" placeholder="(in Square metres)"/>
		</td>
		<td><label id="area_error_pg" name="area_error_pg" class="error_post"> </label></td>
	</tr>
	
	<tr>
	<td> Description </td>
	<td> <input type="text" class="inputText" id="description_post_pg" name="description_post_pg" placeholder="Description of your property" class="address"/>
	</td>
	<td><label id="description_error_pg" name="description_error_pg" class="error_post"> </label></td>
	</tr>
<tr>
	<td>Contact Number for this posting </td>
	<td> <input type="text" id="contact_post_pg" class="inputText" name="contact_post_pg" placeholder="Contact Number for this posting"/>
	</td>
	<td><label id="contact_error_pg" name="contact_error_pg" class="error_post"> </label></td>
	</tr>
	<tr>
					<td> Ownership </td>
					<td> 
						<select id="owner_post_rent" name="owner_post_rent">
						  <option value="owner">Owner</option>
						  <option value="broker">Broker</option>
						</select>
					</td>
				</tr>
	<tr>
	<td> Upload photo(Optional)</td>
	<td>
	
		<input type="file" name="file_upload_pg" size=35 />

	 
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

<!-- Footer starts here 
<div id="footer" style= ";margin:0;background-color: rgba(0,0,0,0.3); width:100%; height:50px;">
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
 Footer ends here-->
 </div>
</body>
</html>