<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Processinfo extends CI_Model
{
	private function processAPI($data,$APIurl)
	{
		$ch=curl_init();
		$json_encoded= json_encode($data);
		curl_setopt($ch, CURLOPT_URL,$APIurl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);
		$result= curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	
	public function process_register($data)
	{
		$url = 'http://localhost:8080/projectWebService/webapi/site/register';
		$data["password"]=md5($data["password"]);
		return $this->processAPI($data,$url);
	}
	
	public function process_login($data)
	{
		$url = 'http://localhost:8080/projectWebService/webapi/site/login';
		$data["password"]=md5($data["password"]);
		return $this->processAPI($data,$url);
	}
 	
	public function verify($hash,$userID)
	{
		$url = 'http://localhost:8080/projectWebService/webapi/site/verify';
		$data=array("hash"=>$hash,"userID"=>$userID);
		return $this->processAPI($data,$url);
	}
	
	public function forgotPassword($data)
	{
		$url = 'http://localhost:8080/projectWebService/webapi/site/forgotInit';
		return $this->processAPI($data,$url);
	}
	public function fbLogin($data)
	{
		$url="http://localhost:8080/projectWebService/webapi/site/fb";
		return $this->processAPI($data,$url);
	}
	
	public function forgotValidate($hash,$userID)
	{
		$url = 'http://localhost:8080/projectWebService/webapi/site/forgotValidate';
		$data=array("hash"=>$hash,"userID"=>	$userID);
		return $this->processAPI($data,$url);
	}
	
	public function resetPassword($data)
	{
		$url = 'http://localhost:8080/projectWebService/webapi/site/reset';
		$data["userID"]=$data["userID"];
		$data["password"]=md5($data["password"]);
		unset($data["info"]);
		return $this->processAPI($data,$url);
	}
	
	public function getConnection()
	{
		$servername = "localhost";
		$username = "root";
		$password = "root123";
		$dbname = "100acresT2";
		$conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;
	}
	
	
	public function getPostedAds($userID	)
	{
		$sqlForSeller = "SELECT * FROM PostSell where userID=$userID"; 
		$sqlForRental= "SELECT * FROM PostRent where userID=$userID"; 
		$sqlForPG= "SELECT * FROM PostPG where userID=$userID";
		
		$resultForSeller=$this->db->query($sqlForSeller)->result();
		$resultForRental=$this->db->query($sqlForRental)->result();
		$resultForPG=$this->db->query($sqlForPG)->result();
		
		$data=array("resultForSeller"=>$resultForSeller,"resultForRental"=>$resultForRental,"resultForPG"=>$resultForPG);
		
		return $data;
	}
	
	public function getPersonalInfo($userID)
	{
		$sqlInformation = "SELECT * FROM Users where userID=$userID";
		$userInformation=$this->db->query($sqlInformation)->result();
		return $userInformation;
	}
/* 		$resultArray=$result->mysqli_fetch_all();
		if($result->num_rows > 0)		
		{
			$resultArray=$result->fetch_array(MYSQLI_NUM);
			echo "hello";
		}
		else
			echo "hi";
 */		//$result2=$conn->query($sql2);
		//$result3=$conn->query($sql3);
		
	/* 	
		 $resultArray2=$result2->fetch_array(MYSQLI_NUM);
		$resultArray3=$result3->fetch_array(MYSQLI_ASSOC); */ 
		
		/* $as=array_merge($resultArray,$resultArray2); */
		//print_r($resultArray);
		/*if ($result->num_rows > 0)
		{
			echo "<table style='width: 1100px;table-layout: fixed;   text-align: center'>";
			echo"<tr><th> Properties to sell</th></tr>";
			while($row = $result->fetch_assoc())
			{
		
				echo "<tr>";
				echo "<td>".$row["postID"]."</td>";
				echo "<td>".$row["address"]."</td>";
				echo "<td> CReated on to be added</td>";
				echo "<td><a href='http://www.100acres.com'> Go to Advertisement</a></td>";
				echo "<td><a href='http://www.100acres.com'> Edit Advertisement</a></td>";
			}
		
			echo "</table>";
		}
		else
		{
			echo "No such user exists";
		}
		
		
		$sql = "SELECT * FROM PostRent where userID=43";
		$result = $conn->query($sql);
		
		
		if ($result->num_rows > 0)
		{
			echo "<table style='width: 1100px;table-layout: fixed;   text-align: center'>";
			echo"<tr><th> Properties to Rent</th></tr>";
			while($row = $result->fetch_assoc())
			{
		
				echo "<tr>";
				echo "<td>".$row["postID"]."</td>";
				echo "<td>".$row["address"]."</td>";
				echo "<td> CReated on to be added</td>";
				echo "<td><a href='http://www.100acres.com'> Go to Advertisement</a></td>";
				echo "<td><a href='http://www.100acres.com'> Edit Advertisement </a></td>";
		
				echo "</table>";
			}
		}
		else
		{
			echo "No such user exists";
		}
		
		$sql = "SELECT * FROM PostPG where userID=43";
		$result = $conn->query($sql);
		
		
		if ($result->num_rows > 0)
		{
			echo "<table style='width: 1100px;table-layout: fixed;   text-align: center'>";
			echo"<tr><th> Properties for PG</th></tr>";
			while($row = $result->fetch_assoc())
			{
		
				echo "<tr>";
				echo "<td>".$row["postID"]."</td>";
				echo "<td>".$row["address"]."</td>";
				echo "<td> CReated on to be added</td>";
				echo "<td><a>Go to Advertisement</a></td>";
				echo "<td><a>Edit Advertisement</a></td>";
			}
		
			echo "</table>";
		}*/
		
		
		
	}
 
?>
