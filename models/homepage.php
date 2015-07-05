<?php
	header("Access-Control-Allow-Origin: *");
	class Homepage extends CI_Model{

	
	//This function accepts email_id and password as parameters from the login tab and sends it to the model which then calls an API to 		check if the email id is present in the database and in case of success, it starts a session for the user and loads the personal_page
        
	public function loggingIn($email,$pass)
	{	
		
                $obj['email']=$email;
                $obj['pass'] = $pass;
                $object=json_encode($obj);
			
                //echo 'succ'.$object;
                $ch = curl_init('http://localhost:8080/100acresProject/webapi/myresource');
                $headers = array("Content-Type: application/json");
                curl_setopt_array($ch, array(
                        CURLOPT_POST => TRUE,
                        CURLOPT_RETURNTRANSFER => TRUE,
                        CURLOPT_HTTPHEADER => $headers,
                        CURLOPT_POSTFIELDS => $object
                ));
		
                $result= curl_exec ($ch);
                curl_close ($ch); 
		return $result;
	}
	


    	//This function interacts with the database to check if there exits an email_id(i.e if the user already exists) or not

	public function register($email){
		
			
		$servername = "localhost";
		$username = "root";
		$password = "jaisairam";
		

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
	
		$sql = "SELECT * from 100acres.registration where email='$email'";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0)
			return("Unsuccessful");
		else
			return("Success");
	
		$conn->close();
	}

	
	//This fucntion stores the data of the registering user inot the database after the verification has been done.
	
	public function verification($name,$email,$pass,$mob,$sec,$ans)
	{	
		$obj['name']=$name;
                $obj['email']=$email;
                $obj['pass'] = $pass;
		$obj['mob']=$mob;
		$obj['sec']=$sec;
		$obj['ans']=$ans;
                $object=json_encode($obj) ;

               
                $ch = curl_init('http://localhost:8080/100acresProject/webapi/myresource1'); 
                $headers = array("Content-Type: application/json");
                curl_setopt_array($ch, array(
                        CURLOPT_POST => TRUE,
                        CURLOPT_RETURNTRANSFER => TRUE,
                        CURLOPT_HTTPHEADER => $headers,
                        CURLOPT_POSTFIELDS => $object
                ));
		$result= curl_exec ($ch);
		
		return $result;
                curl_close ($ch);
	}

	//This function enters the login and logout time of the user and destroys the session.
	public function logout(){

		session_start();
	
		$email=$_SESSION["email"];
		$login_t=$_SESSION["login_time"];
	
		$servername = "localhost";
		$username = "root";
		$password = "jaisairam";
		

		/// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql="INSERT INTO 100acres.session_details (email,login_time,logout_time) VALUES('$email','$login_t',NOW()) ON DUPLICATE KEY UPDATE login_time=VALUES(login_time), logout_time=VALUES(logout_time)";

		if ($conn->query($sql) === TRUE) {
		  
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
	}

}
?>
