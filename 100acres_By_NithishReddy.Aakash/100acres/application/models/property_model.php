<?php
class property_model extends CI_Model
{
public function __construct()	{
parent::__construct();
  $this->load->database(); 
}
public function storedata($seller) {
  
    $this->db->insert('seller', $seller); 
   
}
public function userid($email)
{
$this->db->select('uid');
$this->db->where('email',$email);
$query=$this->db->get('UserTable');
$result=$query->result();
return $result;
}
public function storedata1($property) {
  
    $this->db->insert('property', $property);
     $p_id = $this->db->insert_id();
    return $p_id; 
  
}
}
?>

