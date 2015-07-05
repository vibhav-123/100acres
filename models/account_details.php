<?php
header("Access-Control-Allow-Origin: *");	

session_start();


class Account_details extends CI_Model{
	
	//This function is called from display_session_details and display_property_details and it creates an sql connection

	public function create_sql_connection()
	{
		
		$servername = "localhost";
		$username = "root";
		$password = "jaisairam";
		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}

	//This function retrieves the last login and last logout time of the user
	public function display_session_details()
	{
		$conn=$this->create_sql_connection();
		$email=$_SESSION["email"];
		$sql = "SELECT DATE_FORMAT(login_time, '%d/%m/%Y')as login_date,DATE_FORMAT(logout_time, '%d/%m/%Y')as logout_date,TIME_FORMAT	(login_time, '%h:%i %p') as login_t,TIME_FORMAT(logout_time, '%h:%i %p') as logout_t FROM 100acres.session_details where email='$email'";
	
		$result = $conn->query($sql);
		$data=array();
		if ($result->num_rows>0) 
		{
		    while($row = $result->fetch_assoc()) 
			{
				$data[]=$row;
		    	}
			return $data;
		} 
		else
			return "Logged in for the first time.";
		
		$conn->close(); 
		
	}
	
	//This function displays all the information about the properties posted by the loggedin user

	public function display_property_details()
	{
		$conn=$this->create_sql_connection();
		$email=$_SESSION["email"];
		$sql1="Select * from 100acres.property where email='$email'";
		$result1 = $conn->query($sql1);
		
		$data=array();
		if ($result1->num_rows > 0)
		 {
		    while($row = $result1->fetch_assoc()) 
			{
				$data[]=$row;
		   	 }
		} 
		//print_r($data);
		$conn->close(); 
		return $data;
		
	}
}
?>
