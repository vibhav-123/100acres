<?php

                     //checks if user is still logged in
	 
		 	
	 
/*$ch=curl_init();					
		//$name=$_POST["name"];				
		//$uname=$_POST["uname"];				
		$email=$_POST["email"];				
		$pwrd=$_POST["password"];	

		//$pwrdHash= md5($pwrd);	

			
		$data=array('email'=>$email,'password'=>$pwrd);				
		$json_encoded= json_encode($data);				
		$url = 'http://localhost:8080/api/webapi/register/email';	
					
		curl_setopt($ch, CURLOPT_URL,$url);				
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);				
    		curl_setopt($ch, CURLOPT_HEADER, 0);				
		curl_setopt($ch, CURLOPT_POST, true);				
	        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));					
	        curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);					
               	$result = curl_exec($ch);
		//return $result;
//echo $result;
    if ($result)
	{$array = json_decode($result, TRUE);
      $name= $array['name'];

//print_r(array_values($array));
      setcookie("naam",$name);
	//setcookie('username', $email);
//$this->redirect('login/profile');
       //echo $_COOKIE["naam"];
			
				//$this->session->set_userdata('logged_in', $data);  
                            //   $this->getUser()->setAttribute('logged_in',$data); 
                              //    $this->redirect('login/profile');     //sets session
				/*if($this->session->userdata('logged_in'))
			{
					$session_data = $this->session->userdata('logged_in');
					$data['email'] = $session_data['email'];
					$this->redirect('login/profile');      //loads page with logged in status.
			}*/

				
			//}
			/*else 
			{
			    echo "Sorry";               //prompts user to register first, if not

			}*/

 
?>
