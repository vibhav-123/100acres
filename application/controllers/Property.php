<?php 

class Property extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("property_model");
	}

	public function details($propertyid){
		//use webservices
		//ChromePhp::log($propertyid);
		$row=$this->property_model->property_details($propertyid);
		//var_dump($row);
		$data['row']=$row;
		$this->load->view('property',$data);
	}
}

?>