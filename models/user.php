<?php
Class user extends CI_Model
{
 function login($Email, $Password)
 {
   $pass=md5($Password);
   $this -> db -> select('Name, Email, Mobile');
   $this -> db -> from('User');
   $this -> db -> where('Email', $Email);
   $this -> db -> where('Password', $pass);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>