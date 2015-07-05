<?php 

class Contactmodel extends CI_Model{
	public function  __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insert($post){
  $this->db->insert('contact_us', $post);
     $id = $this->db->insert_id();
    return $id; 
		
}
}

?>