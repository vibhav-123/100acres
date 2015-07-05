<?php 
//Controller to load login page
class Login extends CI_Controller {
function __construct()
{
   parent::__construct();
   $this->load->library('session');					//initialize the Session class manually in controller constructor
}
public function index()
{
	if( $this->session->userdata('logged_in') ) 	//If the user is logged in then then go to Home view 
	{
       	header('Location:/home');
       	die();
    } 
    else 
    {
       	$this->show_login(false);
    }
}

function show_login( $show_error) 
{
	$data['error'] = $show_error;
	$this->load->helper('form');
	$this->load->view('login',$data);
}

function login_user() 								//Function to call webservice User_registration for checking whether the user entered a valid email address with its matching password
{
	$Email = $this->input->post('Email');
	$Password  = $this->input->post('Password');
	$Password=md5($Password);
	$Email = stripslashes($Email);
	$Password = stripslashes($Password);
	$data = array("Email" => "$Email", "Password" => "$Password");
	$data_string = json_encode($data);
	$ch = curl_init('http://localhost:8080/User_Registration/webapi/myresource/auth');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	 	'Content-Length: ' . strlen($data_string)));
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	$result = curl_exec($ch);					//fetch Name of the user 
	curl_close($ch);
	$ch1 = curl_init('http://localhost:8080/User_Registration/webapi/myresource/ID');
	curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch1, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	 	'Content-Length: ' . strlen($data_string)));
	curl_setopt($ch1, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch1, CURLOPT_CONNECTTIMEOUT, 5);
	$result1 = curl_exec($ch1);					//fetch User_id of the user
	curl_close($ch1);
	$normal_login=$Email && $Password && !($result=="User doesn't exist" || $result=="Query Failed"); //if Email and Password exists and matches
	$fb_login=false;
	//if user is doing log in through Facebook then set variable fblogin as true and get the Name and Email of the user.
	if(isset($_GET['username']))
	{	
		$fblogin=true;
		$result_name=$_GET['username'];
		$result_email=$_GET['email'];
	}	
	//If user is doing log in via 100acres.com log in page
	if($normal_login)
	{
		$sess_array = array('Name' => $result,'User_id' => $result1,'Email'=>$Email);
		$this->session->set_userdata('logged_in', $sess_array);
		header('Location:/home');      //redirect the user to home view
		die();
	}
	else if($fb_login)
	{
		$sess_array = array('Name'=>$result_name,'Email'=>$result_email);
		$this->session->set_userdata('logged_in', $sess_array);
		header('Location:/home');	//redirect the user to home view of 100acres.com after using Facebook log in
		die();
	}
	else
	{   // Otherwise show the login screen with an error message.
		$this->show_login("Invalid Username or Password");
	}
  }
}
?>