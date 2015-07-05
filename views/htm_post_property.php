<html>
<head>

<title>Post Property</title>

<link rel="stylesheet" type="text/css" href="http://www.100acres.com/css/styling.css">



</head>
<body>
<form name="formPost" id= "formPost" method="post" enctype="multipart/form-data" action="http://www.100acres.com/index.php/process/post_property"> 
	<table border=0 width=100%  align=center cellpadding=10>
		<tr align=center>
		<td align=left><font face="calibri" size=5>Enter the Property Details<br><hr>
		</tr>
	</table>

	<center><font color="red" face="arial" size=2><p id ="error"> </p></font></center>

	<table border=0 width=100% align=center cellpadding=10>
		<tr>
		<td>I want to: 
		<td>	<input type=radio name=sell_rent value="Sell" checked >Sell
			<input type=radio name=sell_rent value="Rent">Rent
		</tr>
		<tr>
		<td>I am: 
		<td>	<input type=radio name=user value="Owner" checked >Owner
			<input type=radio name=user value="Broker" >Broker
			<input type=radio name=user value="Builder" >Builder
		</tr>
		
		<tr>
		<td>Type of Property: 
		<td>	<input type=radio name=prop_type value="Residential" checked onclick="validate_post_property1(this);">Residential
			<input type=radio name=prop_type value="Commercial"  onclick="validate_post_property1(this);">Commercial
		</tr>
		</table>


		<table border=0 width=100% align=center cellpadding=10 id=bed>
		<td width=37.2%>Bedrooms:</td>	
		<td>	<select name="bedrooms" class=input_text>
				   <option value="1 BHK">1 BHK			
				   <option value="2 BHK">2 BHK
				   <option value="3 BHK">3 BHK
				   <option value="4 BHK">4 BHK		   
				   <option value="5 BHK">5 BHK			
				   <option value="6 BHK">6 BHK
				   <option value="7 BHK">7 BHK
				   <option value="7+ BHK">7+ BHK		   
			</select><br></td>
		</tr>
		</table>

		<table border=0 width=100% align=center cellpadding=10 class=element_visibility id=ar>
		<td width= 37.2%>Area: 	</td>	
		<td><input type="text" name=area class=input_text>Sq.Ft.</td>
		</tr>
		</table>
	
	
		<table border=0 width=100% align=center cellpadding=10>	
		<tr>
		<td width=37.2%>City: 
		<td>	<select name="city"class="input_text">
				   <option value="Noida">Noida		
				   <option value="Rohini">Rohini
				   <option value="Dwarka">Dwarka
			</select><br>
		</tr>
		<tr>
		<td>Address: 
		<td ><textarea rows="4" cols="30" name=address></textarea>
		</tr>
		<tr>
		<td>Description: 
		<td><textarea rows="4" cols="30" name=description></textarea><br>  
		</tr>
		<tr>
		<td>Price: 
		<td><input type="text" name=price class=input_text>
		</tr>

		<tr>
		<td>Upload Property Photo: 
		<td><input type="file" name="image" id="fileToUpload" class=input_text><br>
		</tr>



	</table>
	<table border=0 width=100% align=center cellpadding=10>
	<tr align=center>
	<td align=right><input type="button" value="Post It" name="post_property" class=input_button onclick="validate_post_property();"> 	
	<td align=left><input type="reset"value="Reset"class="input_button">
	</tr>
	</table>
    
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://www.100acres.com/javascripts/validation_file.js"></script>

</body>
</html>
