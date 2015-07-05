<?php
$ch=curl_init();					
		//$name=$_POST["name"];				
		//$uname=$_POST["uname"];				
		$email=$_POST["email"];				
		$pwrd=$_POST["password"];	

		//$pwrdHash= md5($pwrd);	

			
		$data=array('email'=>$email,'password'=>$pwrd);				
		$json_encoded= json_encode($data);				
		$url = 'http://localhost:8080/api/webapi/register/email/';	
					
		curl_setopt($ch, CURLOPT_URL,$url);				
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);				
    		curl_setopt($ch, CURLOPT_HEADER, 0);				
		curl_setopt($ch, CURLOPT_POST, true);				
	        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));					
	        curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);					
               	$result = curl_exec($ch);
		return $result;
?>
