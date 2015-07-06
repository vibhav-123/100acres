<?php 

class Home extends CI_Controller{
	public function  __construct(){
		parent::__construct();
		$this->load->helper("form");
	    $this->load->library('session');
	}

	public function index(){
		

		$data = array();
	   
	   if($this->session->userdata('useremail')!='')
   	   {
              $data['logged_in'] = true;
       } 
       else 
       {
       		  $data['logged_in'] = false;
       }


       	$this->load->view('header_view',$data);
        $this->load->view("mainpage",$data);
   		$this->load->view('footer_view',$data);
 	}
}

?>