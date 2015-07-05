<?php

class Form extends CI_Controller {
function __construct() {
parent::__construct();
//$this->load->model('RegistrationData');
$this->load->helper('url');
$this->load->helper('form');
$this->load->library('../controllers/login');
}
	

	function submit(){
		//$this->load->model('RegistrationData');
			$fields = array(
				'name' => $this->input->post('username'),
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
			//error_log('xxxxxxxx2');
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_HEADER,0);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
			//error_log('xxxxxxxx3');
			$output = curl_exec($ch);
			$output = json_decode($output);

			if($output->msg == 1){
				echo "<script>
alert('Registration successfully done and automatically login');

</script>";
				$data = array( 'email' => $this->input->post('email'),
				'pwd' => md5($this->input->post('password')));
			$this->login->log($data);
			/*$data['logged_in']=false;
			$this->load->view('home',$data);
			echo "<script>
alert('Registration successfully done now you can login');

</script>";*/
			} 
			else if($output->msg ==2){
					//echo "Email already exists";
				$data['logged_in']=false;
			$this->load->view('home',$data);
			echo "<script>
alert('Email already exists. Try with another email');

</script>";
			}
			else
			{
				echo "invalid email";
				$data['logged_in']=false;
			$this->load->view('home',$data);
			}
			curl_close($ch);
	}
	
	/*function success(){
  $data['logged_in'] = true;
  $this->load->view('home',$data);
}*/
}
?>
