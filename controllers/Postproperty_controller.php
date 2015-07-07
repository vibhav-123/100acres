<?php
//Controller to load post property form and call webservice to insert property data into database
class Postproperty_controller extends CI_Controller 
{
function __construct() 
 {
	parent::__construct();
	$this->load->library('session');
	$this->load->helper(array('form', 'url'));
 }
function register()
 {	

 	if($this->session->userdata('logged_in'))
	{
		//print_r($this->session->userdata('logged_in'));
		//Get the property details via POST request.
		if(isset($_POST['owner_type']) && isset($_POST['sellorrent']) && isset($_POST['select_city']) && isset($_POST['address']) && isset($_POST['select_value']) && isset($_POST['price']))
		{
			//Get the User_id of the user	
			if(isset($_GET['User_id']))
			{
				$User_id=$_GET['User_id'];
			}	
			$image='propertyimage';
			//Configuration required for uploading image sent by the user
			$config['upload_path']='./uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '1000';
			$config['overwrite']=false;
			//Initialize the library upload using above configuration
			$this->load->library('upload');  
			$this->upload->initialize($config);
			//If the image is not uploaded then set an error message and pass it to view
			if (! $this->upload->do_upload($image))
			{
	    		$error = array('error' => $this->upload->display_errors());
	    		$this->load->view('post_form', $error);
			}
			else
			{
				//If the image is uploaded then call Webservice 'webservice' to insert the data into property table
				$imagedata=$this->upload->data('file_name');
				$imagepath = $imagedata['file_name']; 
				$owner_type = $_POST['owner_type'];
				$intention = $_POST['sellorrent'];
				$city = $_POST['select_city'];
				$address = $_POST['address'];
				$bedroom = $_POST['select_value'];
				$expected_price = $_POST['price'];
				$data = array("owner_type" => "$owner_type", "intention" => "$intention","city" => "$city","address" => "$address",
					"bedroom" => "$bedroom","expected_price" => "$expected_price","imagepath" => "$imagepath","User_id"=>"$User_id");
				$data_string = json_encode($data);
				$ch = curl_init('http://localhost:8080/webservice/webapi/Property');    //Call to webservice
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Content-Length: ' . strlen($data_string))
				);
				curl_setopt($ch, CURLOPT_TIMEOUT, 5);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
				$result = curl_exec($ch);
				$error=array('error' => "");
				$error['success'] =$result;
				curl_close($ch);
				$this->load->view('post_form',$error);
			}
		}
	else
		{
			//If the form parameters are not sent via POST request
			$error=array('error' => "",'success'=>"");
			if(isset($_GET['User_id']))
			{
				$User_id=$_GET['User_id'];
				$error['User_id']=$User_id;
			}
			$this->load->view('post_form',$error);
		}
}
else
{
	// print_r($this->session->userdata('logged_in'));die;
	// echo "session destroyed";
	// print_r($this->session->userdata('logged_in'));
	// die();
	// $this->session->unset_userdata('logged_in');
 //   	session_destroy();
	$error=array('error' => "",'success'=>"First Login");
	header("Location: http://www.100acres.com/Login");
   	die();
	//$this->load->view('login');
}
}
}

?>
