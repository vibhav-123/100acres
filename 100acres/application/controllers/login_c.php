<?php



                // validation expected data exists

                $email = $_POST['email']; // required
                $pass = $_POST['pass']; // required
		//echo $_POST['email']; echo $_POST['pass'];



                $obj['email']=$email;
                $obj['pass'] = $pass;
                $object=json_encode($obj) ;

                //echo 'succ'.$object;
                $ch = curl_init('http://localhost:8080/startWS/webapi/myresource');
                $headers = array("Content-Type: application/json");
                curl_setopt_array($ch, array(
                        CURLOPT_POST => TRUE,
                        CURLOPT_RETURNTRANSFER => TRUE,
                        CURLOPT_HTTPHEADER => $headers,
                        CURLOPT_POSTFIELDS => $object
                ));
                $result= curl_exec ($ch);
		echo $result;
                curl_close ($ch);
		$this->load->view('dfhsg',$result);
                //header('Location: http://sanity.com/form/get.php');
                //return $result;



?>
