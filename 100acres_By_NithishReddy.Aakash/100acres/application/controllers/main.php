<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('url');
   $this->load->library('session');
   $this->load->helper('form');
 }
 public function index()
 {
 	$data=array();

 	/*error_log("sssssss");
 	echo "<pre>";
 	print_r($this->session->all_userdata());
 	echo "</pre>";
 	error_log("valueee".print_r($this->session->userdata('email'),true)) ;
 	//die;*/
 	if($this->session->userdata('email')!='')
 	{	//error_log("iffff");
 		$data['logged_in']=true;

 	}
 	else
 	{ //error_log("eslseeee");
 		$data['logged_in']=false;
 	}

 	$this->load->view('home',$data);

 }
}