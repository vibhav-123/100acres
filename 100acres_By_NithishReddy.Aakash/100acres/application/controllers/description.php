<?php 

class Description extends CI_Controller{


  public function  __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('descriptionmodel');
    $this->load->library('session');

  }

  public function index(){
    
    
}
}
?>