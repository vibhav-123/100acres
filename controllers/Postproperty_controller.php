<?php

class Postproperty_controller extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		//$this->load->library('upload');
	}

	function register() {
				
		if(isset($_POST['owner_type']) && isset($_POST['sellorrent']) && isset($_POST['select_city']) && isset($_POST['address']) && isset($_POST['select_value']) && isset($_POST['price']))
		{
				
				if(isset($_GET['User_id'])){
					$User_id=$_GET['User_id'];
			}	
				
				$image='propertyimage';
        		$config['upload_path']='./uploads/';
        		$config['allowed_types'] = 'gif|jpg|png';
        		$config['max_size']     = '1000';
        		$config['overwrite']=false;
        		$this->load->library('upload');
        		$this->upload->initialize($config);
        		if (! $this->upload->do_upload($image)) {
            		$error = array('error' => $this->upload->display_errors());
            		$this->load->view('post_form', $error);
        			}
        		else
        			{

						$imagedata=$this->upload->data('file_name');
						$imagepath = $imagedata['file_name']; 
						$owner_type = $_POST['owner_type'];
						$intention = $_POST['sellorrent'];
						$city = $_POST['select_city'];
						$address = $_POST['address'];
						$bedroom = $_POST['select_value'];
						$expected_price = $_POST['price'];
						$data = array("owner_type" => "$owner_type", "intention" => "$intention","city" => "$city","address" => "$address",
							"bedroom" => "$bedroom","expected_price" => "$expected_price","imagepath" => "$imagepath","User_id"=>"$User_id");
		    			$data_string = json_encode($data);
						$ch = curl_init('http://localhost:8080/webservice/webapi/Property');
						curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    					'Content-Type: application/json',
    					'Content-Length: ' . strlen($data_string))
					);
						curl_setopt($ch, CURLOPT_TIMEOUT, 5);
						curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
						$result = curl_exec($ch);
						$error=array('error' => "");
						$error['success'] =$result;
						curl_close($ch);
						$this->load->view('post_form',$error);
					}
		}
	else
		{
			
			$error=array('error' => "",'success'=>"");
			if(isset($_GET['User_id'])){
				$User_id=$_GET['User_id'];
				$error['User_id']=$User_id;
			}
			//$error['success'] =$result;
			$this->load->view('post_form',$error);
		}
	}

}

?>
