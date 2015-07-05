<?php

class register extends CI_Controller {

	function index()
	{
		$this->load->helper(array('register', 'url'));

		$this->load->library('form_validation');
$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
		$this->form_validation->set_rules('confirmpassword', 'Confirmpassword', 'required');
$this->form_validation->set_rules('mobileno', 'Mobileno', 'required');	




	
	if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform');
		}
		else
		{
			$this->load->model('RegistartionData');
			
			$this->load->view('formsuccess');
		}
	}
}
?>
