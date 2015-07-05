<html>
 <head>
 <link rel="stylesheet" type="text/css" href="/public/CSS/description.css">
 </head>
	
	<body>
	<div id="header_div">
	 	<div id="logo">
	 		<div id="header_logo">100acres</div>
	 	</div>
		<div id="header_right">	 
	  		<div id="header_login">
	  			<img id="login_image" src="public/images/100acres.jpg" > 
	  			<div  id="l1" onclick = "document.getElementById('light').style.display='block';">Login</div>
	  		</div>
		</div>
	</div>
	<div id="dis">
	    <?php 
          if(count($result) > 0)
          {
           foreach ($result as $key) 
           {
     	?>
     	<div  id="dsec"><div class="d">Map view</div></div>
		<div id="gmap_canvas" name='map'>Loading map....</div>
        <div id='map-label'>Map shows approximate location.</div>
           
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>   
        <script type="text/javascript">
        <?php echo $data_arr[0];?>
        function init_map() 
        {
            var myOptions = {zoom: 14,
                center: new google.maps.LatLng(<?php echo $data_arr[0]; ?>, <?php echo $data_arr[1]; ?>),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
            marker = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng(<?php echo $data_arr[0]; ?>, <?php echo $data_arr[1]; ?>)
            });
            infowindow = new google.maps.InfoWindow({
                content: "<?php echo $data_arr[2]; ?>"
            });
            google.maps.event.addListener(marker, "click", function () {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);
        }
        google.maps.event.addDomListener(window, 'load', init_map);
        </script>


        <div  id="dsec"><div class="d">Description</div></div>
		  <div id="img">
            <?php echo	"<img src='/public/images/posting/$key->image_path_name' id='img1'>";?>
		  </div> 	
     	    <?php } }
     	    ?>

		<div id="dat">
			<p id="dat1">
			<div id="details">
			<?php foreach ($result as $key) {
				echo '<div style="float:left;margin-left: 30;  font-size: 18px;font-style: oblique;">';
                echo '<div style="float:left" class="m1">';
                echo "<span><li>Posted By:&nbsp&nbsp &nbsp {$key->Type_of_person}</li></span>";
                echo "<span><li>Name of Posted Person: {$key->username}</span><br>";
                echo "<span><li>Contact Number : {$key->mobileno}</span><br></div>";
                echo '<div class="m">';
                echo "<div float='right'><li>For Sell/Rent : {$key->Purpose}</div>";
                echo "<div><li>Price: {$key->expected_price}</div>";
                echo "<div><li>BHK: {$key->bedrooms}<br></div></div>";
                echo '<div class="m2">';
                echo "<div float='left' name='address'><li>Address : {$key->address}<br>";
                echo "<span><li>City: {$key->city}</span><br>";
                echo "<span><li>Description: {$key->description}</span></div></div>";
            }?>
	        </div>
	        </p>
		</div>
	</div>

    <div id="disc1">
    	For more details, please fill the details and We will connect with you shortly..!!
    </div>
	<div class="send1">
	<form action="http://www.100acres.com/index.php/intrested" method="post"> 
		<div  id="name" >
			<div id="f_name">
				<input  name="firstname" id="name1" type="text" placeholder="First Name" required='true' >
			</div>

			<div id="l_name">
				<input name="lastname" id="name1" type="text" placeholder="Last Name" required='true' >
			</div>
		</div>


		<div id="name">
			<div id="f_name">
				<input name="email" id="name1" type="text" placeholder="Email" required='true' >
			</div>

			<div id="l_name">
				<input name="mobileno" id="name1" type="text" placeholder="Mobile N0." maxlength="10" required='true'>
			</div>
		</div>

		<div id="disc">
			<textarea name="comment" id="area" placeholder="How may I help you..!!"></textarea>
		</div>

		<div id="sub">
			<input id="sub1" type="submit" name="submit">
		</div>
	</form>
	</div>
	<!--search result ends-->

	</body>

	</html>