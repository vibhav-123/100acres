<html>
<head>
<title>Search</title>
</head>
<body>

<html>
<head>
<title>Search for Property</title>
<link rel="stylesheet" type="text/css" href="http://www.100acres.com/css/styling.css">

</head>
<body>

<form name=search_form method="post" enctype="multipart/form-data" action="http://www.100acres.com/index.php/searching/findSearchResults1?flag=1" onsubmit="return validate_search3();"> <!--changed name of form from frm to search_form-->
	<table border=0 width=100% align=center cellpadding=10>
		<tr align=center>
		<td align=left><font face="calibri" size=5>Enter the Search Details<br><hr>
		</tr>
	</table>

	<center><font color=red face=arial size=2><p id="error"></p></font></center>

	<table border=0 width=100% align=center cellpadding=10>
		<tr>
		<td>I want to: 
		<td>	<input type=radio name=buy_rent value="Buy" checked onclick="validate_search1(this);">Buy
			<input type=radio name=buy_rent value="Rent" onclick="validate_search1(this);">Rent
		</tr>

		<tr>
		<td>City: 
		<td>	<select name="city"class="input_text">
				   <option value="Noida">Noida		
				   <option value="Rohini">Rohini
				   <option value="Dwarka">Dwarka
			</select><br>
		</tr>

		<tr>
		<td>Location: 
		<td><input type="text" name=location class=input_text>
		</tr>
		
		<tr>
		<td>Type of Property: 
		<td>	<input type=radio name=prop_type value="Residential" checked onclick="validate_search2(this);">Residential
			<input type=radio name=prop_type value="Commercial" onclick="validate_search2(this);">Commercial
		</tr>
		</table> <!--changed table here-->
		

		<table border=0 width=100% align=center cellpadding=10 id=BHK>
		<tr > 
		<td width=37.8%>Bedrooms:</td>	<!--Sell,Rent Residential wala-->
		<td>	<select name="bedrooms" class=input_text >
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

		<table  border=0 width=100% align=center cellpadding=10 id=area class=element_visibility>
		<tr >  <!--changed form minarea to min_area-->
		<td width=37.8%>Min Area:
		<td><input type="text" name=min_buy_area class=input_text>Sq.Ft. <!--min_area_b-->
		</tr>
		<tr> <!--maxarea-->
		<td width=37.8%>Max Area:
		<td><input type="text" name=max_buy_area class=input_text>Sq.Ft. <!-- max_area_b-->
		</tr>
		</table>

		<table  border=0 width=100% align=center cellpadding=10 id=buy_price >
		<tr> 
		<td width=37.8%>Min Price:</td>	
		<td>	<select name="min_buy_price" class=input_text>  
				   <option value="500000">5 lacs
				   <option value="1500000">15 lacs
				   <option value="2000000">20 lacs	   
				   <option value="2500000">25 lacs		
				   <option value="3000000">30 lacs
				   <option value="4000000">40 lacs
				   <option value="5000000">50 lacs
				   <option value="6000000">60 lacs	   
				   <option value="7000000">75 lacs		
				   <option value="9000000">90 lacs
				   <option value="10000000">1 crores
				   <option value="30000000">3 crores							   
			</select><br></td>
		</tr>

		<tr>
		<td width=37.8%>Max Price:</td>	
		<td>	<select name="max_buy_price" class=input_text>    
				   <option value="500000">5 lacs
				   <option value="1500000">15 lacs
				   <option value="2000000">20 lacs	   
				   <option value="2500000">25 lacs		
				   <option value="3000000">30 lacs
				   <option value="4000000">40 lacs
				   <option value="5000000">50 lacs
				   <option value="6000000">60 lacs	   
				   <option value="7000000">75 lacs		
				   <option value="9000000">90 lacs
				   <option value="10000000">1 crores
				   <option value="30000000">3 crores							   
			</select><br></td>
		</tr>
		</table>
		
		<table  border=0 width=100% align=center cellpadding=10 id=rent_price class=element_visibility>
		<tr> 
		<td width=37.8%>Min Price:</td>	
		<td>	<select name="min_rent_price" class=input_text> <!--min_price_s-->			
				   <option value="5000">5000
				   <option value="10000">10000	   
				   <option value="15000">15000		
				   <option value="20000">20000
				   <option value="30000">30000
				   <option value="50000">50000
				   <option value="70000">70000
				   <option value="80000">80000
				   <option value="90000">90000
				   <option value="100000">1 lacs
				   <option value="150000">1.5 lacs
				   <option value="200000">2 lacs							   
			</select><br></td>
		</tr>

		<tr>  
		<td width=37.8%>Max Price:</td>	
		<td>	<select name="max_rent_price" class=input_text>  		
				   <option value="Below 5000">Below 5000
				   <option value="5000">5000
				   <option value="10000">10000	   
				   <option value="15000">15000		
				   <option value="20000">20000
				   <option value="30000">30000
				   <option value="50000">50000
				   <option value="70000">70000
				   <option value="80000">80000
				   <option value="90000">90000		
				   <option value="100000">1 lacs
				   <option value="150000">1.5 lacs
				   <option value="200000">2 lacs							   
			</select><br></td>
		</tr>

	</table>
	<table border=0 width=100% align=center cellpadding=10>
	<tr align=center>
	<td align=right><input type="submit" value="Post It" name="search_property" class=input_button target=iframe1> 	<!--changed here--> <!-- search_property-->
	<td align=left><input type="reset"value="Reset"class="input_button">
	</tr>
	</table>
    
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://www.100acres.com/javascripts/validation_file.js"></script>


</body>
</html>
