<?php	
	include 'path.php';
	
	// web service call for new registration
	function call_curl_service($arr,$path){
		$ch=curl_init();
		$json_encoded= json_encode($arr);
		global $web_service;
		$url = $web_service.$path;
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);
		$result = curl_exec($ch);
		return $result;
	}
	
	function register(){						
		$name=$_POST["name"];				
		$uname=$_POST["uname"];				
		$email=$_POST["email"];				
		$pwrd=$_POST["password"];	
		$data=array('name'=>$name,'username'=>$uname,'email'=>$email,'password'=>$pwrd);	
		return call_curl_service($data,"register");
}
// web service call for login
	function login(){				
		$uname=$_POST["uname"];					
		$pwrd=$_POST["password"];	
		$data=array('username'=>$uname,'password'=>$pwrd);				
		return call_curl_service($data,"login");
		

	}	
	// web service call for verifying user using email id 
	function verifyUser($email){
		$data=array('email'=>$email);
		$json_encoded= json_encode($data);
		return call_curl_service($data,"verify");
		
	}
	
	// web service call for login with facebook and google plus
	function fbregister(){
		$name=$_POST["name"];
		$uname=$_POST["email"];
		$email=$_POST["email"];
		$data=array('name'=>$name,'username'=>$uname,'email'=>$email);
		return call_curl_service($data,"fbregister");
		
	}
	
	// web service call in case of forgot password
	function forgotPass(){
		$uname=$_POST["uname"];
		$data=array('username'=>$uname);
		return call_curl_service($data,"forgotMail");	
		
	}
	
?>						
