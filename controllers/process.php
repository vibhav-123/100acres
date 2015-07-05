<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");

class Process extends CI_Controller {

	//This function is called on the click of account_details button and it loads the model 'account_details' to fetch details of the user
	
	public function retrieve_account_details(){ 
		
	
		$this->load->model('account_details');
		$session_details=$this->account_details->display_session_details();
		$property_details=$this->account_details->display_property_details();
		$parent_data = array('temp_session_details' => $session_details, 'temp_property_details' => $property_details);
		$this->load->view('htm_account_details',$parent_data);

		
	}

	
	//This method recieves all data from the property posting form and sends it to model for saving it to database
	
	public function post_property()
	{
		$data=$_POST;
		$this->load->model('property_details'); 
		$post_property_result=$this->property_details->post_property($data);
		echo $post_property_result;

	}

/*
	public function findSearchResults()
	{	echo "controller reached\n";
	
		$data=$_POST;
		print_r($data);
		$this->load->model('search'); //search_model
		$search_property_result=$this->search->search_property($data);
		$this->search->load_results();
	}
	public function send_enquiry_mail($user_name,$email,$phone_num,$message)
	{	$sender=$user_name;
		$Email_id=$email;
		$Contact_num=$phone_num;
		$Message=$message;
		//$to = //fill here;
		
		if ( mail( '$to', 'Buyer posted a query regarding your property', 'A buyer by the name'.$sender.' recently viewed your property and had a query regarding it which we are forwarding you. The message sent by'.$sender.'is:\n\n'.$Message.'\n\n The email id of sender is:'.$Email_id.'and the contact number as mentioned by the sender is:'.$Contact_num.'\n You can contact the sender and finalize the deal!! \n\n Happy Selling!!') ) {
			echo "mail sent successfully";
		} else {
		echo "Mail sending failed :(";
	}



	}*/

}
