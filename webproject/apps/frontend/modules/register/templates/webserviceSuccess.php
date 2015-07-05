<?php	
	
						
	     /* $ch=curl_init();					
		$name=$_POST["name"];				
		$mobile=$_POST["mobile"];				
		$email=$_POST["email"];				
		$pwrd=$_POST["password"];	
		//echo "$name $uname $email $pwrd";
	
		//$pwrdHash= md5($pwrd);	

			
		$data=array('name'=>$name,'mobile'=>$mobile,'email'=>$email,'password'=>$pwrd);				
		$json_encoded= json_encode($data);				
		$url = 'http://localhost:8080/api/webapi/register/price/';	
					
		curl_setopt($ch, CURLOPT_URL,$url);				
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);				
    		curl_setopt($ch, CURLOPT_HEADER, 0);				
		curl_setopt($ch, CURLOPT_POST, true);				
	        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));					
	        curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);					
               $result = curl_exec($ch);
  if($result)
{
   //header("Location: http://www.100acres.com/frontend_dev.php/");
setcookie("usernaam", $name);
$this->redirect('login/profile');
}*/


/*function login(){	
			
	        $ch=curl_init();					
		//$name=$_POST["name"];				
		$uname=$_POST["uname"];				
		//$email=$_POST["email"];				
		$pwrd=$_POST["password"];	

		$pwrdHash= md5($pwrd);	

			
		$data=array('username'=>$uname,'password'=>$pwrdHash);				
		$json_encoded= json_encode($data);				
		$url = 'http://localhost:8081/register/webapi/reg/login';	
					
		curl_setopt($ch, CURLOPT_URL,$url);				
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);				
    		curl_setopt($ch, CURLOPT_HEADER, 0);				
		curl_setopt($ch, CURLOPT_POST, true);				
	        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));					
	        curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);					
               	$result = curl_exec($ch);
		return $result;
		

}*/						
?>						
