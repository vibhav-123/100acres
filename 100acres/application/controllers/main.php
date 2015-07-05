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
 	if($this->session->userdata('email')!='')
 	{	
 		$data['logged_in']=true;
 	}
 	else
 	{ 
 		$data['logged_in']=false;
 	}

 	$this->load->view('home',$data);

 }
}