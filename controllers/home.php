<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('session');
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['Name'] = $session_data['Name'];
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
   session_destroy();
   header("Location: http://www.100acres.com/Login");
     die();
}

}

?>