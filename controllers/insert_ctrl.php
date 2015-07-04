<?php

class insert_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
}
function index() {
	if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Mobile']) && isset($_POST['Password'])){
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Mobile = $_POST['Mobile'];
		$Password = $_POST['Password'];
		$Password = md5($Password);
		$data = array("Name" => "$Name", "Email" => "$Email", "Mobile" => "$Mobile", "Password" => "$Password");
		$data_string = json_encode($data);
		$ch = curl_init('http://localhost:8080/User_Registration/webapi/myresource/reg');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'Content-Length: ' . strlen($data_string)));
		$result = curl_exec($ch);

		curl_close($ch);
		if($result=="Added"){
			$data['message'] = 'Account Created Successfully';
		}
		else{
			$data['message']= $result;
		}	
		$this->load->view('form', $data);	
		
	}
	else{
		$this->load->view('form');	
	}
}

}

?>
