<?php 

class Intrested extends CI_Controller{


  public function  __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('intrestedmodel');
    $this->load->library('session');

  }

  public function index(){
    $post['firstname']=(empty($this->input->post('firstname')))? NULL : $this->input->post('firstname');
    $post['lastname']=(empty($this->input->post('lastname')))? NULL : $this->input->post('lastname');
    $post['email']=(empty($this->input->post('email')))? NULL : $this->input->post('email');
    $post['mobileno']=(empty($this->input->post('mobileno')))? NULL : $this->input->post('mobileno');
    $post['comment']=(empty($this->input->post('comment')))? NULL : $this->input->post('comment');
    $id=$this->intrestedmodel->insert($post);
    if($id>0)
    echo "<script>alert('thanks for showing your intrest..We will shortly connect with you..!!');</script>";
else
    echo "<script>alert('server problem');</script>";
    echo "<script>window.close();</script>";

    
}
}
?>