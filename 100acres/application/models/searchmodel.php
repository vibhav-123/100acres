<?php 

class Searchmodel extends CI_Model{
	public function  __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function search_property($post,$offset=0,$limit=1)
	{
		$this->db->distinct();
        $this->db->select('property.pid,property_type,city,address,bedrooms,expected_price,image_path_name,price_pu_area,Type_of_person,Purpose,UserTable.username,mobileno,description');
		$this->db->from('property');
		$this->db->join('seller','property.pid = seller.pid');
		$this->db->join('UserTable','seller.uid = UserTable.uid');
		foreach ($post as $key => $value) 
		{
			if(!is_null($value))
			{
				if($key =='maxprice')
					$this->db->where('property.expected_price <',$value);
				if($key =='minprice')
				
					$this->db->where('property.expected_price >',$value);
				if($key=='bedrooms')
					$this->db->where('property.bedrooms',$value);
				if($key=='city')
		            $this->db->where("(city like '%{$value}%' or address like '%{$value}%')");		
			}
		}
		$this->db->limit($limit);
		$this->db->offset($offset);
		$query=$this->db->get();

		
		$result = $query->result();
		if(!empty($result))
		{
           return $result;
		}
		else 
		   return null;
				
	}
	public function getDetails($id)
	{
		$this->db->distinct();

		$this->db->select('property.pid,property_type,city,address,bedrooms,expected_price,image_path_name,price_pu_area,Type_of_person,Purpose,UserTable.username,mobileno,description');
		$this->db->from('property');
		$this->db->join('seller','property.pid = seller.pid');
		$this->db->join('UserTable','seller.uid = UserTable.uid');
		$this->db->where('property.pid',$id);
		$query=$this->db->get();		
		$result = $query->result();
		if(!empty($result))
		{
           return $result;
	    }
		else 
		   return null;
	}
	
}

?>