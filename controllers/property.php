<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
class property extends CI_Controller
{
	function __construct() {
	parent::__construct();
	$this->load->model("property_model");
	}

  public function index()
  {
  	
  	$this->load->database();
    $city=$_GET['select_city'];
    $minprice=$_GET['minprice'];
    $maxprice=$_GET['maxprice'];
    $bedroom=$_GET['select_value'];
    $sellorrent=$_GET['sellorrent'];
    $pass = array("$city","$minprice","$maxprice","$bedroom","$sellorrent");
    if(isset($_GET['page'])){
      $page=$_GET['page'];
    }
    else{
      $page=1;
    }

    $data["users"]=$this->property_model->get_property($city,$bedroom,$minprice,$maxprice,$sellorrent,$page);
    $data['saved_values']=$pass;
    $this->load->view("propertydata",$data);
  }
}