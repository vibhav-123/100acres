<?php 
//Controller to load Registration form view
class Form extends CI_Controller
 {
	public function index()
	{
		$this->load->helper('form');
        $this->load->view('form');
	}
}
?>


