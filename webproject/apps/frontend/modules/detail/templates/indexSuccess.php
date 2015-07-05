	<html>
	<head>
	
	</head>
	<body>
	<div id="header_div">
	 	
	</div>
	
		
		<div id = "image" align ="center">
	    <img src="http://www.100acres.com/simg/image.jpeg" style="height:300px;width:600px"/>
		</div>
		<div  id="details" >
			<?php 
			foreach ($dataarr as $key => $value) {

			$price=$value['expected_price'];
			$BHK=$value['bedrooms'];
			$Availablefor=$value['i_want_to'];
			$Providedby=$value['i_am'];
			$user=$value['email'];
			$Description=$value['type_of_property'];
			$address=$value['address'];
			}
          echo "Price: " .$price;
          echo "</br>";

          echo "BHK: ".$BHK ." BHK";
            echo "</br>";
          echo "Available For: ". $Availablefor;
            echo "</br>";
          echo "Provided By: " .$Providedby;
            echo "</br>";
          echo "User Name: " .$user;
            echo "</br>";
          echo "Description: ".$Description ;
            echo "</br>";
          echo "Address: ". $address;
          
     		?>
			
	</div>
    
	</body>

	</html>