<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class Searching extends CI_Controller{
	public function findSearchResults1()
	{	
		
	static $min_buy_area,$max_buy_area,$prop_type,$location,$buy_rent,$city,$bedrooms,$min_buy_price,$max_buy_price,$min_rent_price,$max_rent_price,$numrows;

		$this->load->model('search'); 
		$flag=$_GET['flag'];

		if($flag==1)
		{
			 $min_buy_area=$_POST['min_buy_area'];
			 $max_buy_area=$_POST['max_buy_area'];
			 $prop_type=$_POST['prop_type'];
			 $location=$_POST['location'];
			 $buy_rent=$_POST['buy_rent'];
			 $city=$_POST['city'];
			 $bedrooms=$_POST['bedrooms'];
			 $min_buy_price=$_POST['min_buy_price'];
			 $max_buy_price=$_POST['max_buy_price'];
			 $min_rent_price=$_POST['min_rent_price'];
			 $max_rent_price=$_POST['max_rent_price'];
	
			$numrows=$this->search->count_search_property_results($min_buy_area,$max_buy_area,$prop_type,$location,$buy_rent,$city,$bedrooms,$min_buy_price,$max_buy_price,$min_rent_price,$max_rent_price);

			$search_property_result1=$this->search->search_property($min_buy_area,$max_buy_area,$prop_type,$location,$buy_rent,$city,$bedrooms,$min_buy_price,$max_buy_price,$min_rent_price,$max_rent_price,0);
			

			if($numrows==0)
				echo "No results found";
			else
			{
				$parent_data = array('temp_numrows' => $numrows, 'temp_array2' => $search_property_result1);
				
				$this->load->view('htm_search_results',$parent_data);
			}
		}
		else if($flag==0)
		{
			$offset=$_GET['offset'];
			$search_property_result=array();
			$search_property_result=$this->search->search_property($min_buy_area,$max_buy_area,$prop_type,$location,$buy_rent,$city,$bedrooms,$min_buy_price,$max_buy_price,$min_rent_price,$max_rent_price,$offset);
			$data1['temp_array']=$search_property_result;
			$this->load->view('htm_search_results',$data1);
		}
		
	}


	public function display_search_details()
	{
		
		$pid=$_GET['prop_id'];
		$flag=$_GET['flag'];
		
		
		$this->load->model('search'); 
		$search_property_result1=array();
		$search_property_result1=$this->search->search_details($pid);
		$data2['temp_array1']=$search_property_result1;
		if($flag==1)
			$this->load->view('details',$data2);
		else if($flag==0)
			$this->load->view('account_property_details',$data2);
		
	}

	
}
