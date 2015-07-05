<?php 

class Property_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function property_details($propertyid){
		$this->db->select('*');
		$this->db->from('propertylistings');
		$this->db->join('additionaldetails','propertylistings.id = additionaldetails.id','left');
		$this->db->where('propertylistings.id',$propertyid);
		$query=$this->db->get();
		$row=$query->row_array(1);
		$jsonstring=json_encode($row);
		//print_r($row);die();
		return $jsonstring;
		//$jsonstring=json_encode($row);
		//return $jsonstring;

	}

	public function insertdetails($data){
		$status='fail';
		if($this->db->insert('additionaldetails',$data))
			$status='ok';

		return $status;
	}
}

?>