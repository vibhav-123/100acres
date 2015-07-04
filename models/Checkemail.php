<?php
Class Checkemail extends CI_Model
{
   public function __construct() {
   $this->load->database();
}
function check_email_availablity()
{
  
  $Email = trim($this->input->post('Email'));
  $Email = strtolower($Email);  
  $query = $this->db->query('SELECT * FROM User where Email="'.$Email.'"');
  if($query->num_rows() > 0)
  return "false";
  else
  return "true";
}
}
?>