<?php 

class Contact extends CI_Controller{


  public function  __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('contactmodel');
    $this->load->library('session');

  }
  public function index()
  {
    $this->load->view('contactform');
  }

  public function postMessage(){
    $post['name']=(empty($this->input->post('name')))? NULL : $this->input->post('name');
    $post['email']=(empty($this->input->post('email')))? NULL : $this->input->post('email');
    $post['mobileno']=(empty($this->input->post('mobileno')))? NULL : $this->input->post('mobileno');
    $post['message']=(empty($this->input->post('message')))? NULL : $this->input->post('message');
    $id=$this->contactmodel->insert($post);
    echo "<script>alert('Thanks for showing your intrest..We will shortly connect with you..!!');</script>";
    echo "<script>window.close();</script>";

    
}
}
?>