<?php 

class Search extends CI_Controller{


  public function  __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('searchmodel');
    $this->load->library('session');

  }

  public function index()
  {
    $post['city']=(empty($this->input->get('city')))? NULL : $this->input->get('city');
    $post['minprice']=(empty($this->input->get('minprice')))? NULL : $this->input->get('minprice');
    $post['maxprice']=(empty($this->input->get('maxprice')))? NULL : $this->input->get('maxprice');
    $post['bedrooms']=(empty($this->input->get('bedrooms')))? NULL : $this->input->get('bedrooms');

    $query=$this->searchmodel->search_property($post);

    $data['result']=$query;
    $data['postparams']=$post;
    $data['logged_in']=$this->session->userdata('logged_in');
   
    $this->load->view('searchview',$data);
  }

  public function getitems($offset,$limit)
  {
    $post['city']=(empty($this->input->get('city')))? NULL : $this->input->get('city');
    $post['minprice']=(empty($this->input->get('minprice')))? NULL : $this->input->get('minprice');
    $post['maxprice']=(empty($this->input->get('maxprice')))? NULL : $this->input->get('maxprice');
    $post['bedrooms']=(empty($this->input->get('bedrooms')))? NULL : $this->input->get('bedrooms');
   
    $query=$this->searchmodel->search_property($post,$offset,$limit);
      
    if($query != null)
    {
        $data['result']=$query;
        $data['postparams']=$post;
        $this->load->view('searchresults',$data);
    } 
    
    
  }


  public function getDescription($id = '')
  {
    $query=$this->searchmodel->getDetails($id);
    if($query != null){
        $data['result']=$query;
        $this->load->view('descriptionview',$data);
    } 
    
  }

}

?>