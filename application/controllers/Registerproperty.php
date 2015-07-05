<?php 
class Registerproperty extends CI_Controller{
	
	public function __construct(){
		
		parent::__construct();
		
		$this->load->model('registerproperty_model');
		if(!$this->session->has_userdata('useremail')){
			redirect('/user/index?loginfirst=true&lasturl=registerproperty/register','refresh');
		}
		
	}
	
	public function register(){
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error">','</span>');
		$this->form_validation->set_rules("typeofowner","Owner Type","required");
		$this->form_validation->set_rules("intention","Sell or Rent","required");
		$this->form_validation->set_rules("typeofproperty","Property Type","required");
		$this->form_validation->set_rules("city","City","required");
		$this->form_validation->set_rules("address","Address","required");
		$this->form_validation->set_rules("noofbeds","BHK","required");
		$this->form_validation->set_rules("price","Estimated price","required");
		$image='uploadfile';
		$config['upload_path']='./uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '1000';
		$config['overwrite']=false;
		$this->load->library('upload');
		$this->upload->initialize($config);
		
		if ($this->form_validation->run() == FALSE){
			
			$this->load->view("register_property");
			
		}
		elseif (! $this->upload->do_upload($image)) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('register_property', $error);
		}
		else{
			$imagepath=$this->upload->data('file_name');
			$pid=$this->registerproperty_model->insert_entry($imagepath);
			if($pid!='Insertion failed'){
				$data['propertyid']=$pid;
				$this->load->view('postsuccess',$data);
			}
			
		}
	}
}

?>