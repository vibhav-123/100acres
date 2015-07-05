<?php 

class Intrestedmodel extends CI_Model{
	public function  __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insert($post){
  $this->db->insert('intrested', $post);
     $id = $this->db->insert_id();
    return $id; 
		
}
}

?>