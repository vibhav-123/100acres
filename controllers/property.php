<?php
//Controller to load property listing page
class property extends CI_Controller
{
  function __construct() 
  {
    parent::__construct();
    $this->load->model("property_model");
  }
  public function index()
  {
  	$this->load->database();
    //Get the search parameters via GET request
    $city=$_GET['select_city'];
    $minprice=$_GET['minprice'];
    $maxprice=$_GET['maxprice'];
    $bedroom=$_GET['select_value'];
    $sellorrent=$_GET['sellorrent'];
    $sort=$_GET['sort'];
    $pass = array("$city","$minprice","$maxprice","$bedroom","$sellorrent","$sort");
    //if page number is set by pagination then get that page number
    if(isset($_GET['page']))
    {
      $page=$_GET['page'];
    }
    else
    {
      //if page is not set then set it to page no:1
      $page=1;
    }
    $data["users"]=$this->property_model->get_property($city,$bedroom,$minprice,$maxprice,$sellorrent,$sort,$page);
    $data['saved_values']=$pass;
    $this->load->view("propertydata",$data);
  }
}
?>