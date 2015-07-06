<?php 

class Search_property_model extends CI_Model{
	public function  __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function search_property($post,$offset=0,$limit=1){
		//echo "<br><br>";print_r($post);
		$this->db->distinct();
		$this->db->select('id,intention,typeofproperty,bedroom,typeofowner,price,city,address,imageurl');
		foreach ($post as $key => $value) {
			if(!is_null($value)){
				if($key=='maxprice')
					$this->db->where('price<',$value);
				if($key=='minprice')
					$this->db->where('price>',$value);
				if($key=='bedroom')
					$this->db->where('bedroom',$value);
				if($key=='intention')
					$this->db->where('intention',$value);
				
				if($key=='keyword'){
					//$this->db->like('city',$value);
					//$this->db->or_like('address',$value);
					$this->db->where("(city like '%{$value}%' or address like '%{$value}%')");
				}
					
			}
		}
		$query=$this->db->get('propertylistings',$limit,$offset);
		//print_r($query);
		//if ajax request send html string else load view
		$data['query']=$query;
		$data['postparams']=$post;
		if($offset!==0){
			$str='';
			if($query->num_rows()>0){
				foreach($query->result() as $row){
					echo '<a href="/property/details/'.$row->id.'" target="_blank">';
					echo '<div class="searchresult">';
					$imageurl='/uploads/'.$row->imageurl;
					echo "<img src=$imageurl alt='search result image' />";
					echo "<span>Price: {$row->price}</span>";
					echo "<span>BHK: {$row->bedroom}</span>";
					echo "<span>Property Type: {$row->typeofproperty}</span>";
					echo "<span>Provider: {$row->typeofowner}</span>";
					echo "<span>City: {$row->city}</span>";
					echo '<span class="text-content"><span>Click for More Details</span></span>';
					echo '</div></a>';
				}
			}
			return $str;
			//echo $str;
		}
		//$this->load->view('header_view',$data);
		$this->load->view('propertysearch',$data);
		//$this->load->view('footer_view',$data);
	}
	
}

?>