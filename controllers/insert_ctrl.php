<?php
//Controller to interact with webservices
class insert_ctrl extends CI_Controller {
function __construct() 
{
	parent::__construct();
}
function index() 
{
	//If Name,Email,Mobile,Password is sent via POST request after validation then insert these values to database via webservices
	if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Mobile']) && isset($_POST['Password']))
	{
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Mobile = $_POST['Mobile'];
		$Password = $_POST['Password'];
		$Password = md5($Password);
		$data = array("Name" => "$Name", "Email" => "$Email", "Mobile" => "$Mobile", "Password" => "$Password");
		$data_string = json_encode($data);
		$ch = curl_init('http://localhost:8080/User_Registration/webapi/myresource/reg');	//call webservice User_Registration
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json'
		));
		$result = curl_exec($ch);
		curl_close($ch);
		if($result=="Added")
		{
			//If data is inserted in the database then show this message to the user
			$data['message'] = 'Account Created Successfully';
			$this->load->view('login', $data);	
		}
		else
		{
			//If Email is already in use then shoe this message on the screen
			$data['message']= 'Email already exists';
			$this->load->view('form', $data);
		}	
			
		
	}
	else
	{
		$this->load->view('form');	
	}
}
}
?>
