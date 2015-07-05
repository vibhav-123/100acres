<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include("pathfile.php");

class Property_m extends CI_Model
{

	public function getPropertyDetails($data)
	{
		
		if (isset($data['postID']))
		{
			$post= $data['postID'];
		}
		else{
		
		}
		if (isset($data['mode']))
		{
			$mode= $data['mode'];
			if($mode=='sell')
				$tableName="PostSell";
			else if ($mode=='rent')
				$tableName="PostRent";
			else if ($mode=='pg')
				$tableName="PostPG";
		}
		else{
		
		}

		$str="Select * from $tableName where postID=$post";
		$res=$this->db->query($str);
		
		$propertyDetails=$res->result();
		$UID=$propertyDetails[0]->userID;
		$str2="Select * from Users where userID=$UID";
		$res3=$this->db->query($str2);
		$userDetails=$res3->result();

		
		$resultArray=array("propertyDetails"=>$propertyDetails,"userDetails"=>$userDetails);
	
		return $resultArray;
	}
	
	public function getPersonalInfo()
	{
		$userID=$this->session->userdata["userID"];
	$sqlInformation = "SELECT * FROM Users where userID=$userID";
	$userInformation=$this->db->query($sqlInformation)->result();
	return $userInformation;
	}

	public function getConnection()
	{
		$servername = "localhost";
		$username = "root";
		$password = "aryan25";
		$dbname = "100acresT2";
		$conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;
	}
	
	
	
	
	
}

?>
