<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include("pathfile.php");

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
		return curl_exec($ch);
	}
	
	public function process_register($data)
	{ 
		global $APIregisterPath;
		$url ="http://localhost:8080/T2Login/webapi/site/register";
		$data["password"]=md5($data["password"]);
		$result= $this->processAPI($data,$url);
		return $result;
	}
	
	public function process_login($data)
	{
		
		$url = "http://localhost:8080/T2Login/webapi/site/login";
		$data["password"]=md5($data["password"]);
		return $this->processAPI($data,$url);
	}

	public function verify($hash,$userID)
	{
		$url = "http://localhost:8080/T2Login/webapi/site/verify";
		$data=array("hash"=>$hash,"userID"=>$userID);
		return $this->processAPI($data,$url);
	}
	
	public function forgetPassword($email)
	{
		$url = $APIforgetPath;
		$data=array("email"=>$email);
		return $this->processAPI($data,$url);
	}

	public function getPostedAds()
	{
		$userID=$this->session->userdata["userID"];
		$sqlForSeller = "SELECT * FROM PostSell where userID=$userID";
		$sqlForRental= "SELECT * FROM PostRent where userID=$userID";
		$sqlForPG= "SELECT * FROM PostPG where userID=$userID";
	
		$resultForSeller=$this->db->query($sqlForSeller)->result();
		$resultForRental=$this->db->query($sqlForRental)->result();
		$resultForPG=$this->db->query($sqlForPG)->result();
	
		$data=array("resultForSeller"=>$resultForSeller,"resultForRental"=>$resultForRental,"resultForPG"=>$resultForPG);
	
		return $data;
	}
	
	public function getPersonalInfo()
	{
		$userID=$this->session->userdata["userID"];
	$sqlInformation = "SELECT * FROM Users where userID=$userID";
	$userInformation=$this->db->query($sqlInformation)->result();
	return $userInformation;
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
		$password = "aryan25";
		$dbname = "100acresT2";
		$conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;
	}
	
	
	
	
	
}

?>
