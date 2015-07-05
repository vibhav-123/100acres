<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class Welcome extends CI_Controller {

	//This function is executed when http://www.100acres.com is accessed. It loads htm_home.php which is the welcome page for the site.
	public function index()
	{
		$this->load->view('htm_home');
		
	}

	
	//This function accepts email_id and password as parameters from the login tab and sends it to the model which then calls an API to 		check if the email id is present in the database and in case of success, it starts a session for the user and loads the personal_page
	
	public function login($email,$pass)
	{	
		$this->load->model('homepage');
		$result_login_status=$this->homepage->loggingIn($email,$pass);
		
		if($result_login_status=='Success'){
			
			session_start();
			$_SESSION["email"]=$email;
			$_SESSION["login_time"]=date_create()->format('Y-m-d H:i:s');
			
			
		}
		echo $result_login_status;

	}

	//This method fetches the email from the registeration form and calls the model to check if there is an entry corresponding to the 		email id. The status of email being present or not is returned.

	public function registeration($email){
		
		$this->load->model('homepage');
		$result_register_status=$this->homepage->register($email);
		
		if($result_register_status=='Success'){
			$this->send_mail($email);
		}
		else
		{
			echo "email already exists!";
		}

	}

	//This function sends a randomly generated code to the email id that was entered by the user while filling in the form so as to 	 		 authenticate the email id and the user before completing the registration

 	public function send_mail($email){
		$to = $email;
		$str='';
		for($i=7;$i>0;$i--){
		    $str = $str.chr(rand(97,122)); 
		   
		}
		if ( mail( $to, 'Verfication Code', 'The verfication code is:'.$str.' .Please use the above link to complete registration process.') ) {
			echo $str;
		} else {
		echo "Mail sending failed :(<br>\n";
	}
}
	//This method is called when verification code entered by user matches with the code sent via email. This method calls the model to save 	the data in the database and then returns the status if successful

	public function verify($name,$email,$pass,$mob,$sec,$ans){
		
		$this->load->model('homepage');
		$result_register_status=$this->homepage->verification($name,$email,$pass,$mob,$sec,$ans);
		
		echo $result_register_status;
	}

	//This method enables us to login to the site using Facebook id and password and also creates a session	

	public function fb(){
		$data=$_POST;
		print_r($data);
		session_start();
		$_SESSION["email"]=$data["email"];
		$_SESSION["login_time"]=date_create()->format('Y-m-d H:i:s');
	}

	//This loads the personal page when the login is complete 

	public function personal_view()
	{
		$this->load->view('personal_page');
		
	}
	//This function calls the model to destroy the session, make login_time and logout_time entries in session_details table and log a user out of the personal page.
	public function loggingOut(){
				
		$this->load->model('homepage');
		$this->homepage->logout();
		header("Location:http://www.100acres.com");
					
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
