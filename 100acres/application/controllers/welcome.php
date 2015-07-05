<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once 'path.php';
include_once'application/controllers/webService/webservice_call.php';

class Welcome extends CI_Controller {
	
	///////////////////////////////////////////////////////////////////////////
	// homepage loading
	public function index()
	{ 
		$this->load->view('Main.php');
	}
	///////////////////////////////////////////////////////////////////////////
	// check whether the session is maintained
	public function onOk() {
		
	  	if(isset($this->session->userdata['email'])){
	  		echo "ok";
	  	}else{
	  		echo "notok";
	  	}
	  	
	}
	
	///////////////////////////////////////////////////////////////////////////
	// calls the register web service to register new user
	public function callRegAPI(){
		
                
		$rs=register();
	    
		if($rs=="1")
			$this->sendLink($_POST['email']);  // sending verification mail
		else if($rs==""){
			echo "0";  // web service not working
		}else{
			echo $rs;  // registration failed
		}
		
	}
	
	///////////////////////////////////////////////////////////////////////////
	//calls the login web service
	public function callLogAPI(){
		
		    $result1=json_decode(login(),true);
			$error=$result1['error'];
			if($error==""){
				echo "webservice error login again";
			}else{
				switch ($error){
					
					case "verified":    /////////
						$this->session->set_userdata('uid', $result1['uid']);
						$this->session->set_userdata('email', $result1['email']);
						$this->session->set_userdata('name', $result1['name']);
						$this->session->set_userdata('username', $result1['username']);
						echo "login success";
						break;
					case "not verified":   ///////////
						$this->sendLink($result1['email']); // send verification link again
						break;
					case "nothing":
						echo $error;
						break;
					case "status error":
						echo $error;
						break;
					case "exception":
						echo $error;
						break;
					case "not found":    /////////////////
						echo "invalid username and password";
						break;
					default:
						echo "default error";
						break;
				}
			}
	}
	
	///////////////////////////////////////////////////////////////////////////
	//for posting new properties
	public function handlePostings(){
				$this->load->model('main_model');
				if($_POST["purpose"] == "pg"){
					echo ($this->main_model->insertPropertyPg());
				
				}
				else if($_POST["ptype"] == "residential"){
					echo ($this->main_model->insertPropertyResidential());
						
				}else if($_POST["ptype"]== "commercial"){
					echo ($this->main_model->insertPropertyCommercial());
				}
				$property_result=$this->main_model->getPostings();
				$this->load->view('Postings.php',$property_result);
	}
	
	///////////////////////////////////////////////////////////////////////////
	// navigating to property sell page
	public function gotoSell(){
		$this->load->view('PostProperty.php');
	}
	
	///////////////////////////////////////////////////////////////////////////
	// navigating ti hire page
	public function gotoHire(){
		$this->load->view('Hire.php');
	}
	
	//////////////////////////////////////////////////////////////////////////
	// navigating to contact page
	public function gotoContact(){
		$this->load->view('contact.php');
	}
	
	/////////////////////////////////////////////////////////////////////////
	// navigating to home page
	public function gotoHome(){
		$this->load->view('Main.php');
	}

	///////////////////////////////////////////////////////////////////////////
	// for destroying the session when logout is pressed
	public function destroySession() {
		
		if (!isset($_SESSION))
		{
			session_start();
		}
		$this->session->unset_userdata('uid');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');

		$this->session->unset_userdata('username');
		echo "destroyed";
	}
	
	///////////////////////////////////////////////////////////////////////////
	// for sending verification link to email during new registration
	public function sendLink($em){
		$secret = "35onoi2=-7#%g03kl";
		$hash = MD5($em.$secret);
		$link ="http://www.100acres.com/index.php/welcome/verifyLink?email=$em&hash=$hash";
		$to =$em;
		if ( mail( $to, 'mail verification', $link) ) {
			echo "1";   // mail sent seccesfully
		} else {
			echo "-2";   // mail sending error
		}
	}
	
	///////////////////////////////////////////////////////////////////////////
	// calls when the user confirms his email
	public function verifyLink(){
		$verify_result;
		$secret = "35onoi2=-7#%g03kl";
		$hash = MD5($_GET['email'].$secret);
		if($hash==$_GET['hash']){
			
			$verify_result=verifyUser($_GET['email']);
			if($verify_result==""){
				echo "Web Service Error";
			}
			else {
				echo $verify_result;
			}
		}else{
			echo "your verification link is corrupted....";
		}
	}
	
	///////////////////////////////////////////////////////////////////////////
	// calls when user login or registers using facebook login
	public function callFBLog(){
						$fbresul=fbregister();
						$fbresult=json_decode($fbresul,true);
						if($fbresult==""){
							echo "web service error .. restart the service";
						}else{
						$this->session->set_userdata('username', $_POST['email']);
						$this->session->set_userdata('email', $_POST['email']);
						$this->session->set_userdata('name', $_POST['name']);
						$this->session->set_userdata('uid',$fbresult['uid']);
						
						
						if($fbresult['error'] == "Account created!")
						{
							$details="Username= ".$_POST['email']." and password= ".$fbresult['password'];
							 mail( $_POST['email'], '100acres.com Registration Details', $details);
							echo "You have been Registered to 100acres.com.Kindly check your mail for login details";
						}
						else
						{
							echo "Login success";
						}
						}
						
	}
	/////////////////////////////////////////////////////////////////////////////
	// forgot mail
	public function forgotMail(){
		$forgotData=forgotPass();
		$forgotDataDecoded=json_decode($forgotData,true);
		if($forgotDataDecoded['error']==""){
			echo "webservice Error";
		}else if($forgotDataDecoded['error']=="not found"){
			echo "invalid username";
		}else if($forgotDataDecoded['error']=="found"){
			$forgotEmail=$forgotDataDecoded['email'];
			$forgotPassword=$forgotDataDecoded['password'];
			if ( mail( $forgotEmail, 'your 100acres password', $forgotPassword) ) {
				//echo "--".$to;
				echo "your password has been sent to the registered email";   // mail sent seccesfully
			} else {
				echo "mail sending error... try again later";   // mail sending error
			}
		}else{
			echo "invalid output fatal Error";
		}
	}
	
	
	////////////////////////////////////////////////////////////////
	// it displays the user profile page
	public function gotoProfile(){
		if(isset($this->session->userdata['email'])){
			$this->load->model('main_model');
			$user_result=$this->main_model->getUserDetails(); 
			$this->load->view('Profile.php',$user_result);
		}
		else{
			$this->load->view('Main.php');
		}
			
	}
	
	////////////////////////////////////////////////////////////////
	// it displays all the properties posted buy the user
	public function gotoPostings(){
		if(isset($this->session->userdata['email'])){
			 $this->load->model('main_model');
			$property_result=$this->main_model->getPostings(); 
			$this->load->view('Postings.php',$property_result);
		}
		else{
			$this->load->view('Main.php');
		}
			
	}
	
	//////////////////////////////////////////////////////////////////
	// when user edits his profile
	public function editProfile(){
		$this->load->model('main_model');
		$this->main_model->updateProfile();
	}
	
	//////////////////////////////////////////////////////////////////
	// for deleting the properties
	public function deletePosting(){
		 $this->load->model('main_model');
		 if($_POST["ptype"] == "pg"){
			$this->main_model->removePropertyPg();	
		}
		else if($_POST["ptype"] == "residential"){
			$this->main_model->removePropertyResidential();
		
		}else if($_POST["ptype"]== "commercial"){
			$this->main_model->removePropertyCommercial();
		} 
	}
	
	//////////////////////////////////////////////////////////////////
	// main search function
	public function search_main(){
		$this->load->model('main_model');
		$property_result;
		if($_POST['search_type']=="pg"){
			$property_result=$this->main_model->search_pg();
		}else{
			$property_result=$this->main_model->search_comm_or_res();
		}
		$this->load->view('search_result.php',$property_result);
	}
	//////////////////////////////////////////////////////////////////
	// for showing details page of residential properties
	public function showDetails_residential($parameter_pid){

		$this->load->model('main_model');
		$property_result=$this->main_model->search_full_residential($parameter_pid);
		$this->load->view('show_details_residential.php',$property_result);
	}
	
	//////////////////////////////////////////////////////////////////
	//for showing details page of commercial properties
	public function showDetails_commercial($parameter_pid){
		$this->load->model('main_model');
		$property_result=$this->main_model->search_full_commercial($parameter_pid);
		$this->load->view('show_details_residential.php',$property_result);
	}
	////////////////////////////////////////////////////////////////
	//for showing details page of PG properties
	public function showDetails_pg($parameter_pid){
		$this->load->model('main_model');
		$property_result=$this->main_model->search_full_pg($parameter_pid);
		$this->load->view('show_details_residential.php',$property_result);
	}


///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
	// USER interaction with the properties..
	// it saves the user data to table and also displays the contact information of the landlord
	public function getSeller(){
		$this->load->model('main_model');
		$sellerDetails=$this->main_model->getSellerDetails();
		echo $sellerDetails;
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>
