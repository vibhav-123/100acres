<?php
class Registerproperty_model extends CI_Model{
	
	public $typeofowner;
	public $typeofproperty;
	public $city;
	public $address;
	public $noofbeds;
	public $price;
	public $intention;
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function insert_entry($imagepath) {
		$data['typeofowner']=$this->input->post('typeofowner');
		$data['intention']=$this->input->post('intention');
		if($data['intention']=='sell')
			$data['intention']='buy';
		$data['address']=$this->input->post('address');
		$data['price']=$this->input->post('price');
		$data['typeofproperty']=$this->input->post('typeofproperty');
		$data['bedroom']=$this->input->post('noofbeds');
		$data['city']=$this->input->post('city');
		$data['imageurl']=$imagepath;

		if(!$this->db->insert('propertylistings',$data)){
			return 'Insertion failed';
		}
		$pid=$this->db->insert_id();
		return $pid;
	}
}