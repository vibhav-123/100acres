<?php



class Postadvert extends CI_Model
{


	  private $mysqlHost  = 'localhost';
	    private $mysqlUserName  = 'root';
	    private $mysqlPassword  = 'root123';
	    private $mysqlDatabase  = '100acresT2';
	private $mysqlConnection    = NULL;


	public function postadpg()
	{
	
	if(isset($_POST["price"]))
	{
	        $this->mysqlConnection = new mysqli($this->mysqlHost, $this->mysqlUserName, $this->mysqlPassword,  $this->mysqlDatabase);
			
			$price=$_POST["price"];
			$year=$_POST["year"];
			$location=$_POST["location"];
			$contact=$_POST["contact"];
			$denomination=$_POST["denomination"];
			$userID=$_POST["userID"];
			$address=$_POST["address"];

 			$sql = "INSERT INTO PostPG(userID,contact,price,denomination,year,location,address) VALUES('".$userID."','".$contact."','".$price."','".$denomination."','".$year."','".$location."','".$address."')";
       			 $result = "not in any function";
     			   if($this->mysqlConnection->query($sql) === TRUE)
				{
         			   $result = "inserted!!";
			        }
			else
				{
			            $result = "FALSE";
			        }
		        mysqli_close($this->mysqlConnection);
		        return $result;
			

	}
	else
	{
			return "Unauthorized Access\n";		
	}
	
	}




	public function postSellFunc()
	{
	
	if(isset($_POST["price"]))
	{
	        $this->mysqlConnection = new mysqli($this->mysqlHost, $this->mysqlUserName, $this->mysqlPassword,  $this->mysqlDatabase);

			$userID = $_POST["userID"];
			$contact =$_POST["contact"];
			$propType=$_POST["propType"];
			$builtType=$_POST["builtType"];
			$consStatus=$_POST["consStatus"];
			$bedRooms=$_POST["bedRooms"];
			$price = $_POST["price"];
			$denomination = $_POST["denomination"];
			$year = $_POST["year"];
			$city = $_POST["city"];
			$address=$_POST["address"];
			$parking = $_POST["parking"];
			$ownership=$_POST["ownership"];
			$description=$_POST["description"];
			$area=$_POST["area"];

 			$sql = "INSERT INTO PostSell(userID,contact,propType,builtType, consStatus, bedrooms, city, address,area,price, denomination,parking,ownership,description)  VALUES('".$userID."','".$contact."','".$propType."','".$builtType."','".$consStatus."','".$bedRooms."','". $city."','".$address."','".$area."','".$price."','".$denomination."','".$parking."','".$ownership."','".$description."')";
       			 $result = FALSE;
     			   if($this->mysqlConnection->query($sql) === TRUE)
				{
         			   $result = "Selling ad posted";
			        }
			else
				{
			            $result = FALSE;
			        }
		        mysqli_close($this->mysqlConnection);
		        return $result;
			

	}
	else
	{
			return "Unauthorized Access\n";		
	}
	
	}




	public function postRentFunc()
	{
	
	if(isset($_POST["price"]))
	{
	        $this->mysqlConnection = new mysqli($this->mysqlHost, $this->mysqlUserName, $this->mysqlPassword,  $this->mysqlDatabase);

			$userID = $_POST["userID"];
			$contact =$_POST["contact"];
			$propType=$_POST["propType"];
			$builtType=$_POST["builtType"];
			$consStatus=$_POST["consStatus"];
			$bedRooms=$_POST["bedRooms"];
			$price = $_POST["price"];
			$denomination = $_POST["denomination"];
			$year = $_POST["year"];
			$city = $_POST["city"];
			$address=$_POST["address"];
			$parking = $_POST["parking"];
			$ownership=$_POST["ownership"];
			$description=$_POST["description"];
			$area=$_POST["area"];

 			$sql = "INSERT INTO PostRent(userID,contact,propType,builtType, consStatus, bedrooms, city, address,area,price, denomination,parking,ownership,description)  VALUES('".$userID."','".$contact."','".$propType."','".$builtType."','".$consStatus."','".$bedRooms."','". $city."','".$address."','".$area."','".$price."','".$denomination."','".$parking."','".$ownership."','".$description."')";
       			 $result = FALSE;
     			   if($this->mysqlConnection->query($sql) === TRUE)
				{
         			   $result = "Rent ad posted";
			        }
			else
				{
			            $result = FALSE;
			        }
		        mysqli_close($this->mysqlConnection);
		        return $result;
			

	}
	else
	{
			return "Unauthorized Access\n";		
	}
	
	}



};

?>
