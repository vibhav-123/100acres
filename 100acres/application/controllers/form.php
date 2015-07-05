<?php

class Form extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->helper('url');
$this->load->helper('form');
$this->load->library('../controllers/login');
}
	

	function submit()
	    {
			$fields = array('name' => $this->input->post('username'),
				            'email' => $this->input->post('email'),
				            'pwd' => md5($this->input->post('password')),
				            'mobile' => $this->input->post('mobileno')
				            );			
			$this->sendCurlRequest($fields);
		}

	function sendCurlRequest($fiedls)
	    {
			$fields_string = json_encode($fiedls);
			$url = "localhost:8080/FireProject/webapi/RegisterResource/register"; 
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_HEADER,0);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
			$output = curl_exec($ch);
			$output = json_decode($output);

            //Insertion of user data done successfully
			if($output->msg == 1)
			  {
				echo "<script>
                      alert('Registration successfully done and automatically login');
                      </script>";
				$data = array( 'email' => $this->input->post('email'),'pwd' => md5($this->input->post('password')));
			    $this->login->log($data);
              } 
            //Email already exists in the database
			else if($output->msg==2)
			  {
				$data['logged_in']=false;
			    $this->load->view('home',$data);
			    echo "<script>
                      alert('Email already exists. Try with another email');
                      </script>";
			  }
			//Email is not valid
			else
			  {
				echo "invalid email";
				$data['logged_in']=false;
			    $this->load->view('home',$data);
			  }
			curl_close($ch);
	    }
}
?>
