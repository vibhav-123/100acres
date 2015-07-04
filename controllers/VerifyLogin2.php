<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class VerifyLogin2 extends CI_Controller {
		
		function __construct(){
		    parent::__construct();
		   // $this->load->library('session');
		    //$this->load->model('user','',TRUE);
	 	}

		function index(){
			if( $this->session->userdata('isLoggedIn') ) {
            	redirect('/main/show_main');
        	}
        	else {
            $this->show_login(false);
        }
    }
			$error=''; // Variable To Store Error Message
			if (isset($_POST['submit'])) {
				if (empty($_POST['Email']) || empty($_POST['Password'])) {
					
					$error = "Email or Password is invalid";
					echo $error;
				}
				
				else{
					$Email=$_POST['Email'];
					$password=$_POST['Password'];
					$password=md5($password);
					$Email = stripslashes($Email);
					$password = stripslashes($password);
					//$Email = mysql_real_escape_string($Email);
					//$password = mysql_real_escape_string($password);
					$data = array("Email" => "$Email", "Password" => "$password");
					$data_string = json_encode($data);
					$ch = curl_init('http://localhost:8080/User_Registration/webapi/myresource/auth');
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
					curl_close($ch);
					if($result=="User doesn't exist" || $result=="Query Failed"){
						$data['error']="User doesn't exist";
						$this->load->view('login',$data);
					}	
					else{
						$_SESSION['login_user']=$result;
						$this->load->view('home');
					}
					
					
					
					
				}
			}
		}	
	}

?>