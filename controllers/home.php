<?php 
session_start(); //we need to call PHP's session object to access it through CI
//Controller to load home view when the user is logged in
class home extends CI_Controller {
function __construct()
 {
   parent::__construct();
   $this->load->library('session');                     //initialize the Session class manually in controller constructor
 }
function index()
 {
   //if the user is logged in then pass user's name and user's id to the home view.
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['Name'] = $session_data['Name'];
     $data['User_id'] = $session_data['User_id'];
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     header("Location: http://www.100acres.com/Login");
     die();
     
   }
 }
function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();                                     //if user logout then destroy that session created
   header("Location: http://www.100acres.com/Login");
   die();
 }
}
?>