<?php
	
class Search extends CI_Model
{

	public function Query_condition($min_buy_area,$max_buy_area,$prop_type,$location,$buy_rent,$city,$bedrooms,$min_buy_price,$max_buy_price,$min_rent_price,$max_rent_price)
	{
		
		$condition1="";
		if($buy_rent=="Buy" && $prop_type=="Residential")
		{	
			$condition1="bedrooms='$bedrooms' and price>=$min_buy_price and price<=$max_buy_price and sell_rent='Sell' and city='$city' and address like '%$location%'";
		}

		else if($buy_rent=="Buy"&&$prop_type=="Commercial")
		{
			$condition1="area>=$min_buy_area and area<=$max_buy_area and price>=$min_buy_price and price<=$max_buy_price and sell_rent='Sell' and city='$city' and address like '%$location%'";
		}

		else if($buy_rent=="Rent"&&$prop_type=="Residential")
		{
			$condition1="bedrooms='$bedrooms' and price>=$min_rent_price and price<=$max_rent_price and sell_rent='Rent' and city='$city' and address like '%$location%'";
		}

		else if($buy_rent=="Rent" && $prop_type=="Commercial")
		{
			$condition1="area>=$min_buy_area and area<=$max_buy_area and price>=$min_rent_price and price<=$max_rent_price and sell_rent='Rent' and city='$city' and address like '%$location%'";
		}
		
		return $condition1;
	}

	public function create_sql_connection()
	{
		$servername = "localhost";
	 	$username = "root";
	 	$password = "jaisairam";
		$conn = new mysqli($servername, $username, $password);
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}
	

	//This function searches the database to find results as per the search posted by the user and sends the result back to the controller
	public function search_property($min_buy_area,$max_buy_area,$prop_type,$location,$buy_rent,$city,$bedrooms,$min_buy_price,$max_buy_price,$min_rent_price,$max_rent_price,$offset)
	{		
		//echo $bedrooms;
		
		$conn=$this->create_sql_connection();
		$rowsPerPage = 3;	

		$condition1=$this->Query_condition($min_buy_area,$max_buy_area,$prop_type,$location,$buy_rent,$city,$bedrooms,$min_buy_price,$max_buy_price,$min_rent_price,$max_rent_price);

		
		
		$sql="select * from 100acres.property where $condition1 LIMIT $offset, $rowsPerPage";
	
		
		$result = $conn->query($sql);		
		
		$data = array();

		
		if ($result->num_rows>0) 							
		{	
			while($row = $result->fetch_assoc()) 
			{
				$data[]=$row;
		    	}
		} 
		$conn->close(); 
		return $data;
	}

	public function count_search_property_results($min_buy_area,$max_buy_area,$prop_type,$location,$buy_rent,$city,$bedrooms,$min_buy_price,$max_buy_price,$min_rent_price,$max_rent_price)
	{
		$conn=$this->create_sql_connection();
		$condition1=$this->Query_condition($min_buy_area,$max_buy_area,$prop_type,$location,$buy_rent,$city,$bedrooms,$min_buy_price,$max_buy_price,$min_rent_price,$max_rent_price);


		$sql="select count(*) as numrows from 100acres.property where $condition1";
			
		$result = $conn->query($sql);
		$numrows=0;
		
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()) 
			{
				$numrows=$row['numrows'];
			}
		}
		$conn->close(); 
		return $numrows;	
	}

	public function search_details($pid)
	{
	
		$conn=$this->create_sql_connection();
		$sql ="Select * from 100acres.property where pid=$pid";
		$result = $conn->query($sql);
		$data = array();
		if ($result->num_rows>0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$data[]=$row;
		    	}

		} 
		$conn->close(); 
		return $data;
	
	}

}
?> 
