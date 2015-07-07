<?php 

class Additionaldetails extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('additionaldetails_model');
	}

	public function index(){
		/*$data['id']=$this->input->post['id'];
		$data['sellername']=$this->input->post['sellername'];
		$data['phone']=$this->input->post['phone'];
		$data['email']=$this->input->post['email'];
		$data['noofrooms']=$this->input->post['noofrooms'];
		$data['description']=$this->input->post['description'];
		$data['latitude']=$this->input->post['latitude'];
		$data['longitude']=$this->input->post['longitude'];
		$id=$data['id'];
		print_r($this->input->post);
		//print_r($_POST);
		die();*/
		$data['id']=$_POST['id'];
		$data['sellername']=$_POST['sellername'];
		$data['phone']=$_POST['phone'];
		$data['email']=$_POST['email'];
		$data['noofrooms']=$_POST['noofrooms'];
		$data['description']=$_POST['description'];
		$data['latitude']=$_POST['latitude'];
		$data['longitude']=$_POST['longitude'];
		$id=$data['id'];
		//ChromePhp::log($data);
		$result=$this->additionaldetails_model->postadditionaldetails($data);
		//ChromePhp::log($result);
		if($result=='ok'){
			redirect('/property/details/'.$id,'refresh');
		}
	}
}

?>