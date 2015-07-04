<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifyemail extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('Checkemail');
 }
function check_email_availablity()
{
	$this->load->model('Checkemail');
	$get_result = $this->Checkemail->check_email_availablity();
	$this->load->view('form',$get_result);
	
}


}
