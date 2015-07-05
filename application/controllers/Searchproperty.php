<?php 

class Searchproperty extends CI_Controller{
	public function  __construct(){
		parent::__construct();
		
		$this->load->model('search_property_model');
	}

	public function index(){
		$post['keyword']=(empty($this->input->get('keyword')))? NULL : $this->input->get('keyword');
		$post['minprice']=(empty($this->input->get('minprice')))? NULL : $this->input->get('minprice');
		$post['maxprice']=(empty($this->input->get('maxprice')))? NULL : $this->input->get('maxprice');
		$post['bedroom']=(empty($this->input->get('bedroom')))? NULL : $this->input->get('bedroom');
		$post['intention']=(empty($this->input->get('intention')))? NULL : $this->input->get('intention');
		if($post['intention']=='buy'){
			$post['intention']='sell';
		}
		//print_r($post);
		$this->search_property_model->search_property($post);
	}

	public function getitems($offset,$limit){
		$post['keyword']=(empty($this->input->get('keyword')))? NULL : $this->input->get('keyword');
		$post['minprice']=(empty($this->input->get('minprice')))? NULL : $this->input->get('minprice');
		$post['maxprice']=(empty($this->input->get('maxprice')))? NULL : $this->input->get('maxprice');
		$post['bedroom']=(empty($this->input->get('bedroom')))? NULL : $this->input->get('bedroom');
		$post['intention']=(empty($this->input->get('intention')))? NULL : $this->input->get('intention');
		if($post['intention']=='buy'){
			$post['intention']='sell';
		}
		$str=$this->search_property_model->search_property($post,$offset,$limit);
		//echo $str;
	}
}

?>