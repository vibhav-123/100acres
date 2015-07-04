<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends CI_Controller 
{
	function __construct()
 	{
   		parent::__construct();
   		$this->load->library('session');
        $this->load->model('user','',TRUE);
   	}

	public function index()
		{
			if($this->session->userdata('logged_in'))
   				{
     				$session_data = $this->session->userdata('logged_in');
     				$data['Name'] = $session_data['Name'];
    				$this->load->view('contact_us', $data);
   				}
   				else
   				{
            $data['Name'] ='NULL';
   					$this->load->view('contact_us',$data);
   				}

	}
	

}
