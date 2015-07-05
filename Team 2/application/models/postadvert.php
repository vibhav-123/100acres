<?php
class Postadvert extends CI_Model
{
	//Used for PG postings
	public function postAdPg($data)
	{
		
			$dataToBeSent=array(				//creates an array which maps input to the array to be sent with query
		        "title" => $data["title_post_pg"],
		        "gender" =>$data["gender_post_pg"],
		        "sharing" =>$data["sharing_post_pg"],
		        "price" =>$data["price_post_pg"],
		        "year"=>$data["year_post_pg"],
		        "city"=>$data["city_post_pg"],
		        "contact"=>$data["contact_post_pg"],
				"address"=>$data["address_post_pg"],
				"description" => $data["description_post_pg"],
				"userID" =>$this->session->userdata("userID")
			);
				
				
			$path="/var/www/html/codeIgniter/ads/";	//path to save images on server
			
			if($_FILES['file_upload_pg']['name']!="")		//if image uploaded
			{
				$path=$path.$_FILES['file_upload_pg']['name'];
				
				
				if(move_uploaded_file($_FILES['file_upload_pg']['tmp_name'],$path))	//if image moved from temp storage to server
				{
					$dataToBeSent["imageURL"]="http://www.100acres.com/ads/".$_FILES['file_upload_pg']['name'];
					if($this->db->insert("PostPG",$dataToBeSent))		//if data isnerted in database		
					{
						return $this->db->insert_id();
					}
					else
					{
						return "Error";
					}
				}
			}
			else
			{	
				if($this->db->insert("PostPG",$dataToBeSent))
				{
					return $this->db->insert_id();
				}
				else
				{
					return "Error";
						
				}
			}
		}
	
	//Used for Posting Seller postings
	public function postSellFunc($data)
	{		
		$dataToBeSent=array(				//creates an array which maps input to the array to be sent with query
			"userID" => $this->session->userdata("userID"),
			"contact" => $data["contact_post_sell"],
			"propType" =>$data["propType_post_sell"],
			"builtType"=>$data["builtType_post_sell"],
			"consStatus"=>$data["consStatus_post_sell"],
			"bedRooms"=>$data["bedrooms_post_sell"],
			"price" => $data["price_post_sell"],
			"year" => $data["year_post_sell"],
			"city" => $data["city_post_sell"],
			"address"=>$data["address_post_sell"],
			"parking" => $data["parking_post_sell"],
			"ownership"=>$data["owner_post_sell"],
			"description"=>$data["description_post_sell"],
			"area"=>$data["area_post_sell"],
			"title"=>$data["title_post_sell"],
		);
		
		$pic=($_FILES['file_upload']['name']);
			
		$path="/var/www/html/codeIgniter/ads/";	//path to save images on server		//path to store images on server

		if($_FILES['file_upload']['name']!="")		//if image uploaded
			{
				$path=$path.$_FILES['file_upload']['name'];
				
				
				if(move_uploaded_file($_FILES['file_upload']['tmp_name'],$path))	//if image moved from temp to server folder
				{	
					$dataToBeSent["imageURL"]="http://www.100acres.com/ads/".$_FILES['file_upload']['name'];
					if($this->db->insert("PostSell",$dataToBeSent))
					{
						return $this->db->insert_id();
					}
					else
					{
						return "Error";
					}
					
				}
				else 
					return "Error";
			}
			else
			{
				if($this->db->insert("PostSell",$dataToBeSent))		//if image not uploaded
				{
					return $this->db->insert_id();
				}
				else
				{
						return "Error";
				}
							
			}
			
		}

	//Used for Rental Postings
	public function postRentFunc($data)
	{
		if(isset($data["price_post_rent"]))			//checks if called with right arguments
		{
		        $dataToBeSent=array(				//creates an array which maps input to the array to be sent with query
			        	"contact" => $data["contact_post_rent"],
			        	"propType" => $data["propType_post_rent"],
			        	"builtType" => $data["builtType_post_rent"],
			        	"consStatus" => $data["consStatus_post_rent"],
			        	"bedRooms" => $data["bedrooms_post_rent"],
			        	"price" => $data["price_post_rent"],
			        	"year" => $data["year_post_rent"],
			        	"city" =>$data["city_post_rent"],
			        	"address" => $data["address_post_rent"],
			        	"parking" => $data["parking_post_rent"],
			        	"ownership" => $data["owner_post_rent"],
			        	"description" => $data["description_post_rent"],
			        	"area" => $data["area_post_rent"],
			        	"title" =>$data["title_post_rent"],
			        	"furniture" =>$data["furniture_post_rent"],
			        	"userID" =>$this->session->userdata("userID")
		        	);
		        	
		        $path="/var/www/html/codeIgniter/ads/";		//path of images to be stored
		        
		        if($_FILES['file_upload_rent']['name']!="")		//if image has been uploaded
		        {
		        	$path=$path.$_FILES['file_upload_rent']['name'];		
		        	
		        	if(move_uploaded_file($_FILES['file_upload_rent']['tmp_name'],$path))
		        	{
		        		$dataToBeSent["imageURL"]="http://www.100acres.com/ads/".$_FILES['file_upload_rent']['name'];
		        		if($this->db->insert("PostRent",$dataToBeSent))
		        		{
		        			return $this->db->insert_id();
		        		}
		        		else
		        			return "Error";
		        	}
		        	else
		        		return "Error";
		        }
		        else					//if image not uploaded
		        {	
		        	if($this->db->insert("PostRent",$dataToBeSent))
					{
		        		return $this->db->insert_id();
		        	}
		        	else
		        		return "Error";
		        		
				}
		}
	}
}

?>