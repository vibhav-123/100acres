<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include("pathfile.php");

class Property_m extends CI_Model
{

	public function getPropertyDetails($data)
	{
		
		if (isset($data['postID']))
		{
			$postingID= $data['postID'];
		}
		else{
			
		}
		if (isset($data['mode']))
		{
			$mode= $data['mode'];
			if($mode=='buy')
				$tableName="PostSell";
			else if ($mode=='rent')
				$tableName="PostRent";
			else if ($mode=='pg')
				$tableName="PostPG";
		}
		else{
		
		}

		$query="Select * from $tableName where postID=$postingID";
		$res=$this->db->query($query);
		
		$propertyDetails=$res->result();
		$UID=$propertyDetails[0]->userID;
		$query="Select * from Users where userID=$UID";
		$res=$this->db->query($query);
		$userDetails=$res->result();

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
	
	public function getNumber($data)
	{
		$postID=$data["postID"];
		$tableName="";
		if($data["mode"]=="pg")
			$tableName="PostPG";
		else
		if($data["mode"]=="rent")
			$tableName="PostRent";
		else 
			if($data["mode"]=="buy")
				$tableName="PostSell";
		else 
			return "Error";	
		$postID=$data["postID"];
		$query="Select contact from ".$tableName." where postID=".$postID;
		$contactNumber=$this->db->query($query)->result();
		return $contactNumber[0]->contact;
	}
}

?>
