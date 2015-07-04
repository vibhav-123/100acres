<?php
class insert_model extends CI_Model
{
function __construct() 
{
parent::__construct();
$this->load->database();
}
function form_insert($data)
{
	$Email = trim($this->input->post('Email'));
    $Email = strtolower($Email);  
  	$query = $this->db->query('SELECT * FROM User where Email="'.$Email.'"');
    if($query->num_rows() > 0)
  	return "false";
  	else{
 	$this->db->insert('User', $data);
 	return "true";
}
}

}
?>