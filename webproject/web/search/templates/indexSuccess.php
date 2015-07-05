
<html>
<head>


</head>


<body id="body">
	<form action="http://www.100acres.com/frontend_dev.php/search/show" method="POST">
<div id="main">
	<div id="header">
	 	<div style="float:left;margin-left:10px;margin-top:10px">100acres.com </div>
		<div style="float:right;position:relative">	 
 			<div style="float:left;margin-right:100px;margin-top:15px;"><a href="http://www.w3schools.com">Sell/rent property</a> </div>
	  		<div style="float:right;margin-top:15px;margin-right:10px"><a href="http://www.w3schools.com">Login</a> </div>
		</div>
	</div>

<!--   Search page  -->	
<div id="search">
	<div id="search1">
		<div id="place">
			<div>Place</div>
			<div>
				<select name="Keywords">
				<option value="Search">City</option>
				<option value="Noida">Noida</option>
				<option value="Faridabad">Faridabad</option>
				<option value="Gurgaon">Gurgaon</option>
				</select>
			</div>	
		</div>
		
			<div id="price">
				<div >Min Price</div>

				<div >
					<select name="MinPrize">
					<option value="Search">Min Price</option>
					<option value="10000">10000</option>
					<option value="100000">100000</option>
					<option value="1000000">1000000</option>
					</select>
				</div>
			</div>
		
		<div id="price">
			<div>Max Price</div>	
			<div>	
				<select name="Maxprize">
				<option value="Search">Max Price</option>
				<option value="10000">10000</option>
				<option value="100000">100000</option>
				<option value="1000000">1000000</option>
				</select>
			</div>
		</div>
		
		<div id="price">
			<div>Bedroom
			</div>
			
			<div>
				<select name="Bedrooms">
				<option value="Search">BedRooms</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				</select>
			</div>
		</div>
		
	</div>

	<div style="float:left;margin-top:10px;margin-left:250px;"> 
		<div style="float:left;margin-left:250px">
			<button type="submit" ><img src="reload1.png" style="height:15px;width:40px" /></button>
		</div>
		
		<div style="float:left;margin-left:130px">
			<button type="submit" >Search</button>
		</div>
	</div>
</div>


<!--   image and description  -->
<div id="first_img">
<img src="reload1.jpg" style="height:100px;width:100px"/>

		<div style="color:black"	<h1 >  </h1></div>
		
	

</div>
<div id="second_img">

<img src="reload1.jpg" style="height:100px;width:100px"/>
			<h1>hi amar</h1>
	
</div>


<div id="third_img">
<img src="reload1.jpg" style="height:100px;width:100px"/>
	<h1><? php echo "hi amar"?></h1>
	
</div>


<div id="forth_img">
<img src="reload1.jpg" style="height:100px;width:100px"/>

			<h1>hi amar</h1>
		
</div>	

</form>
</body>

</html>