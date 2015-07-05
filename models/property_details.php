
<?php



header("Access-Control-Allow-Origin: *");

//This model calls the post_property function and posts all the data of the post_property form that the user submits in the corresponding database

class Property_details extends CI_Model{
	public function post_property($data)
	{	
		
		$servername = "localhost";
		$username = "root";
		$password = "jaisairam";	
	
		session_start();
		$email=$_SESSION["email"];		
		
		$image=str_replace("%5C","%5C%5C",$data["image"],$i);
				
		$img= urldecode ($image);
		

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		

		
		if($data["prop_type"]=="Residential")
			{ 
				$condition="'$data[bedrooms]',-2";
			}
		else
			{
				$condition="-2,'$data[area]'";
			}
		$sql="INSERT INTO 100acres.property			(email,user_type,sell_rent,prop_type,city,address,bedrooms,area,price,post_time,image,description) VALUES('$email','$data[agent_type]','$data[sell_rent]','$data[prop_type]','$data[city]','$data[address]',".$condition.",'$data[price]',NOW(),'$img','$data[description]')";
		
		
		if ($conn->query($sql) === TRUE) {
			return "Success";
		} else {
			return "Unsuccessful";
		}
		$conn->close();
	}

}
?> 
