<?php 
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property_c extends CI_Controller 
{

   public function postAd()
   {
   		if(isset($this->session->userdata["userID"]))
   		{    
   			$this->load->view('post_advert');
   		}
   		else
   			$this->load->view("homepage");
    }
    
    public function getNumber()
    {
    		$data=$this->sterilizeInput("POST");
    		if(isset($data["userID"]))
    			$userID=$data["userID"];
    		else
    			$userID=$this->session->userdata["userID"];
    		$this->load->model("property_m");
    		$number=$this->property_m->getNumber($data);
    		$this->load->model("userinteractions");
    		$result=$this->userinteractions->submitInteractions($data,$userID);
    		if($result != "Error")
    			echo $number;
    		else
    			echo "Error";
    	
    }


	//Used for PG posting
	public function postAdPg()
	{
	 	$data=$this->sterilizeInput("POST");
	 
		$this->load->model('postadvert');
        $result=$this->postadvert->postAdPg($data);
        if($result=="Error")
        {
      		echo $result;  	
        }	
        else
        {
        	$dataToBePassed["postID"]=$result;
        	$dataToBePassed["mode"]="pg";
        	$this->load->model('property_m');
        	$argumentToBePassed=$this->property_m->getPropertyDetails($dataToBePassed);		//get information regarding the specified property
        	
        	$this->load->view("view_property",$argumentToBePassed);	//load the view*/
        }
        	
	}
	
	//Used for Seller posting
	public function postAdSell()
	{
		$data=$this->sterilizeInput("POST");
		$this->load->model('postadvert');
        $result=$this->postadvert->postSellFunc($data);
        if($result=="Error")
        {
      		echo $result;  	
        }	
        else
        {
        	$dataToBePassed["postID"]=$result;
        	$dataToBePassed["mode"]="buy";
        	$this->load->model('property_m');
        	 
        	$argumentToBePassed=$this->property_m->getPropertyDetails($dataToBePassed);		//get information regarding the specified property
        	 
        	
        	$this->load->view("view_property",$argumentToBePassed);	//load the view
        }
        	
	}
	
	//Used for Rental posting
	public function postAdRent()
	{
	 
        $data=$this->sterilizeInput("POST");
        $this->load->model("postadvert");
        $result=$this->postadvert->postRentFunc($data);
        if($result=="Error")
        {
      		echo $result;  	
        }	
        else
        {
        	$dataToBePassed["postID"]=$result;
        	$dataToBePassed["mode"]="rent";
        	$this->load->model('property_m');
        	
        	$argumentToBePassed=$this->property_m->getPropertyDetails($dataToBePassed);		//get information regarding the specified property
        	
        		
       		$this->load->view("view_property",$argumentToBePassed);	//load the view
        }
	}
	
	public function viewPropertyDetails()
	{
		$data=$this->sterilizeInput("GET");
		$this->load->model('property_m');
		
		$argumentToBePassed=$this->property_m->getPropertyDetails($data);		//get information regarding the specified property 
			
		$this->load->view("view_property",$argumentToBePassed);	//load the view
	
	
	}

	
	
	
	public function sterilizeInput($method)
	{
		if($method=="GET")
			return $_GET;
		else
			return $_POST;
	}


	
	
}


