<?php	
	// web service call for new registration
	function register(){					
	    $ch=curl_init();					
		$name=$_POST["name"];				
		$uname=$_POST["uname"];				
		$email=$_POST["email"];				
		$pwrd=$_POST["password"];	
		$data=array('name'=>$name,'username'=>$uname,'email'=>$email,'password'=>$pwrd);				
		$json_encoded= json_encode($data);				
		$url = 'http://localhost:8082/register/webapi/reg/register';	
		curl_setopt($ch, CURLOPT_URL,$url);				
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);				
    	curl_setopt($ch, CURLOPT_HEADER, 0);				
		curl_setopt($ch, CURLOPT_POST, true);				
	        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));					
	        curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);					
               $result = curl_exec($ch);
         return $result;
}
// web service call for login
	function login(){	
			
	        $ch=curl_init();				
		$uname=$_POST["uname"];					
		$pwrd=$_POST["password"];	
		$data=array('username'=>$uname,'password'=>$pwrd);				
		$json_encoded= json_encode($data);				
		$url = 'http://localhost:8082/register/webapi/reg/login';	
					
		curl_setopt($ch, CURLOPT_URL,$url);				
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);				
    		curl_setopt($ch, CURLOPT_HEADER, 0);				
		curl_setopt($ch, CURLOPT_POST, true);				
	        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));					
	        curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);					
               	$result = curl_exec($ch);
		return $result;
		

	}	
	// web service call for verifying user using email id 
	function verifyUser($email){
		$ch=curl_init();
		$data=array('email'=>$email);
		$json_encoded= json_encode($data);
		$url = 'http://localhost:8082/register/webapi/reg/verify';
			
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);
		$result = curl_exec($ch);
		return $result;
		
	}
	
	// web service call for login with facebook and google plus
	function fbregister(){
		$ch=curl_init();
		$name=$_POST["name"];
		$uname=$_POST["email"];
		$email=$_POST["email"];
			
		$data=array('name'=>$name,'username'=>$uname,'email'=>$email);
		$json_encoded= json_encode($data);
		$url = 'http://localhost:8082/register/webapi/reg/fbregister';
			
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);
		$result = curl_exec($ch);
		return $result;
		
	}
	
	// web service call in case of forgot password
	function forgotPass(){
		$ch=curl_init();
		$uname=$_POST["uname"];
		$data=array('username'=>$uname);
		$json_encoded= json_encode($data);
		$url = 'http://localhost:8082/register/webapi/reg/forgotMail';
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);
		$result = curl_exec($ch);
		return $result;		
		
	}
	
?>						
