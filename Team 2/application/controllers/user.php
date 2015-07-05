<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller 
{

	public function index()
	{
		$this->load->view('homepage.php');
	}
    
	//Used for logging in a user
	public function validateLogin() 
	{
		$data=$this->sterilizeInput();
		$this->load->model('processinfo');
		$jsonEncodedResult=$this->processinfo->process_login($data);
		$decodedResult=json_decode($jsonEncodedResult,true);
		if($decodedResult["error"]!="")
			echo $decodedResult["error"];
        else
		{    
				$this->createSession($decodedResult);
	            echo "Success";
        }
	}
	
	//this is the init function of forgot password
	public function forgotPasswordInit()
	{
		$data=$this->sterilizeInput();			 //Assigns $data to $_POST array. This will prevent the usage of super global variables.
		$this->load->model("processinfo");
		$jsonEncodedResult=$this->processinfo->forgotPassword($data);		//Updates hash field of User table if verified and active. Will recieve json encoded object
		$decodedResult=json_decode($jsonEncodedResult,true);
		 
		if($decodedResult["error"]!="")			//There was an error returned by the API
		{
			echo $decodedResult["error"];
		}
		else
		{
			$this->load->helper("mail");
			sendMailToUser($data["email"],$decodedResult["userID"],$decodedResult["hash"],"forgotValidate");
		}
	
	}
	
	//This is called when user tries to register through Facebook.
	public function fb()
	{
		$data=$this->sterilizeinput();		//Assigns $data to $_POST array. This will prevent the usage of super global variables.
		$this->load->model("processinfo");
		$jsonEncodedResult=$this->processinfo->fbLogin($data);		//Creates a new record in the User table if email not present. Returns a json encoded object
		 
		$decodedResult=json_decode($jsonEncodedResult,true);
		
		if($decodedResult["error"]=="" | $decodedResult["error"]=="Success")		//There was no error returned by the API
		{
			$this->createSession($decodedResult);
		}
		else
		{
			echo $decodedResult["error"];
		}
	}
	
	//This is called to validate the forgot password link
	
	public function forgotValidate($hash,$userID)
	{
		$this->load->model("processinfo");
		$jsonEncodedResult=$this->processinfo->forgotValidate($hash,$userID);		//The link is validated. Will recieve a json encoded object from API
	
		$decodedResult=json_decode($jsonEncodedResult,true);
	
		if($decodedResult["error"]!="")				//There was an error returned by the API
		{
			echo $decodedResult["error"];
		}
		else
		{
			$argument=array("userID"=>$userID);
			$this->load->view("resetPassword.php",$argument);	//load reset password page
		}
	}
	
	//This is called to reset a user's password
	public function resetPassword()
	{
		 
		$data=$this->sterilizeInput(); 		//Assigns $data to $_POST array. This will prevent the usage of super global variables.
		$this->load->model("processinfo");
		$jsonEncodedResult=$this->processinfo->resetPassword($data);		//Will reset the password of the user
		$decodedResult=json_decode($jsonEncodedResult,true);
		 
		if($decodedResult["error"]!="")				//There was an error returned by the API
		{
			echo $decodedResult["error"];
		}
		 
		else
		{
			echo "Success";
		}
	}
	
	//This is used to view the profile of a user
	public function viewUserProfile()
	{
		
		if(!isset($this->session->userdata["userID"]))
		{
			$this->load->view("homepage");
			return;
		}
		$this->load->model("processinfo");
		$postedAds=$this->processinfo->getPostedAds();		//get information regarding the Ads posted by the user
		$personalInformation=$this->processinfo->getPersonalInfo();			//get personal info of the user using userID
		$argumentToBePassed=array("postedAds"=>$postedAds,"personalInformation"=>$personalInformation);  //make associative array to pass to view
			
		$this->load->view("profile_user_resham",$argumentToBePassed);	//load the view
	
		
	} 
	
	

	public function logout()
	{   
		$this->session->unset_userdata("name");
		$this->session->unset_userdata("userID");
		$this->load->view('homepage');
	}

//This is called for registering a permanent user
	public function registerUser()
    {
    	$data=$this->sterilizeInput();
        $this->load->model('processinfo');
        $jsonEncodedResult=$this->processinfo->process_register($data);
        $decodedResult=json_decode($jsonEncodedResult,true);
        if($decodedResult["error"]!="")
        {
         	echo $decodedResult["error"];
        }
        else
        {
         	$this->load->helper("mail");
        	sendMailToUser($data["email"],$decodedResult["userID"],$decodedResult["hash"],"verify");
        }
    }
    
    //This is called for updating user info through profile page
    public function updateuserinfo()
    {
    	$data=$this->sterilizeInput();
    	$this->load->model('processinfo');
    	$jsonEncodedResult=$this->processinfo->update_info($data);
    	$decodedResult=json_decode($jsonEncodedResult,true);
    	if($decodedResult["error"]!="")
    		echo $decodedResult["error"];
    	else
    	{
    		echo "Success";
    	}
    
    }
    

    //This is called for registering a temporary user
    public function registerTempUser()
    {
    	$data=$this->sterilizeInput();
    	$this->load->model('processinfo');
    	$jsonEncodedResult=$this->processinfo->process_temp_register($data);
    	$decodedResult=json_decode($jsonEncodedResult,true);
    	if($decodedResult["error"]!="")
    	{
    		echo $decodedResult["error"];
    	}
    	else
    	{
    		echo $decodedResult["userID"];
    	}
    }
    
    //This is called for verifying a user's password before it can be changed
    public function verifyPassword()
    {
    	$data = $this->sterilizeInput();
    	$this->load->model('processinfo');
    	$jsonEncodedResult=$this->processinfo->verifyPassword($data);
    	$decodedResult=json_decode($jsonEncodedResult,true);
    	if($decodedResult["error"]!="")
    		echo $decodedResult["error"];
    	else
    	{
    		print_r($data);
    		$jsonEncodedResult1=$this->processinfo->resetPassword($data);
    		$decodedResult1=json_decode($jsonEncodedResult1,true);
    
    		//if($decodedResult1["error"]!="")
    		//echo $decodedResult["error"];
    		//else echo "Updated password";
    	}
    }
    
    
    
    //This is caled for verifying the email of the user
    public function verify($hash,$userID)
    {
    	$this->load->model("processinfo");
    	$jsonEncodedResult=$this->processinfo->verify($hash,$userID);
    	$decodedResult=json_decode($jsonEncodedResult,true);
    	if($decodedResult["error"]!="")
    	{
    		echo $decodedResult["error"];
    	}
    	else
    	{
    		$this->createSession($decodedResult);
    		$this->load->view("verificationSuccess");
    	}
    	
    }
    
    //this is used for debugging
    public function checkSessionSet()
    {	
    	if(isset($this->session->userdata["userID"]))
    		echo "Success";
    	else	
    		echo "Failure";
    }	
    
    public function forgetPassword($email)
    {
    	$this->load->model("processinfo");
    	$jsonEncodedResult=$this->processinfo->forgetPasswrd($email);
    	$decodedResult=json_decode($jsonEncodedResult,true);
    	if($decodedResult["error"]!="")
    	{
    		echo $decodedResult["error"];
    	}
    	else
    	{
    		$this->load->helper("mail");
    		sendMailToUser($data["email"],$decodedResult["userID"],$decodedResult["hash"]);
    	}
    	 
    }
    
    public function test($param)
    {
        echo $param;
    }
    
    public function sterilizeInput()
    {
    	return $_POST;
    }
    
    private function createSession($result)
    {
    	$this->session->set_userdata("name",$result["name"]);
        $this->session->set_userdata("userID",$result["userID"]);
        return $this->processinfo->inputIPAddress();
    }
    
    public function isSessionSet()
    {
        $getEmail=$this->session->userdata("name");
        echo $this->session->userdata("userID");
        echo "Session is :".$getEmail;
    } 
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
