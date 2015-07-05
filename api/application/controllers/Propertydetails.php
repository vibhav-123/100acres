<?php 

class Propertydetails extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("property_model");
		$this->load->helper('chromephp');
	}

	public function index(){
		error_log("Received request new");
		if($_SERVER['REQUEST_METHOD']=='GET'){
			error_log("Received request");
			//$propertyid=$this->input->get['pid'];
			//print_r($_GET['pid']);die();
			//ChromePhp::log('id is '+$this->input->get['pid']);
			//ChromePhp::log('id was '+$_GET['pid']);
			//echo "Hello buddy";die();
			$propertyid=$_GET['pid'];
			//echo "Hello buddy ".$propertyid;die();
			$jsonstring=$this->property_model->property_details($propertyid);
			
			//echo "Hey Hemanth".print_r(json_decode($jsonstring));
			header('Content-Type: application/json');
			header('Content-Length: '.strlen($jsonstring));
			echo $jsonstring;
		}
		elseif($_SERVER['REQUEST_METHOD']=='POST'){
			$json=file_get_contents("php://input");
			$data=json_decode($json);
			$status=$this->property_model->insertdetails($data);
			echo $status;
		}
		else{
			$jsonstring=json_encode(array('error' => 'Invalid Request method'));
			echo $jsonstring;
		}
	}
}

?>