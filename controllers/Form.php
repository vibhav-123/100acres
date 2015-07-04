<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
		$data['get_result']="true";
		$this->load->helper('form');
        $this->load->view('form',$data);
	}
	

}


