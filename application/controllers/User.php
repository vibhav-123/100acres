<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
      
      public function __construct()
      {
          parent::__construct();
          $this->load->model('user_model');
          $this->load->library('session');
          //$this->form_validation->set_error_delimiters('<span class="error">','</span>');
      }
 
      public function index()
      {
        
          if($this->session->userdata('useremail')!='')
          {
              redirect('/home','refresh')
          }
          else{
              if(isset($_GET['loginfirst']))
                echo '<div style="float:right;font-size:20px;color:red;font-weight:bold;margin-top:40px;margin-left:70%;position: absolute; z-index:3;">You have to login first!!</div>';
               $data['title']= 'Home';
               if(isset($_GET['lasturl']))
                    $data['lasturl']=$_GET['lasturl'];
               $this->load->view('header_view',$data);
               $this->load->view("registration_view.php", $data);
               $this->load->view('footer_view',$data);
          }
      }
 

      public function login()
      {
          //print_r($_POST);
          $email=$this->input->post('email');
          $password=md5($this->input->post('pass'));

          $fblogin=false;

          if(isset($_GET['username'])){ 
                $fblogin=true;
                $result_name=$_GET['username'];
                $result_email=$_GET['email'];

          } 

          $lasturl='';
          if(isset($_POST['lasturl']))
            $lasturl=$_POST['lasturl'];
          //echo $this->input->post['lasturl'];die();
          $result=$this->user_model->login($email,$password);
          
          if($result) {
              
              $this->session->set_userdata('useremail',$email);
              $this->session->set_userdata('logged_in',TRUE);
              
              if($lasturl!=''){
                redirect('/'.$lasturl,'refresh');
              }
            redirect('/home', 'refresh');
          }
          elseif ($fblogin) {
              $this->session->set_userdata('useremail',$result_email);
              $this->session->set_userdata('logged_in',TRUE);
              
            redirect('http://100acres.com/home', 'refresh');
            
          }
          
          else
          {   
              echo '<div style="float:right;font-size:20px;color:red;font-weight:bold;margin-top:40px;margin-left:70%;position: absolute; z-index:3;">Invalid Username Or Password,Try again!!</div>';
              $this->index();
          }
      }

      
 
      public function registration()
      {
          
          $this->load->library('form_validation');
          // field name, error message, validation rules
          $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]');
          $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
          $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
          $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

          if($this->form_validation->run() == FALSE)
          {
              $this->index();
          }
          else
          {
              $email=$this->input->post('email_address');
              //$password=md5($this->input->post('password'));

              $result=$this->user_model->new_login($email);
              
              if($result)
              { 
                  $this->user_model->add_user();
                  $this->session->set_userdata('useremail',$email);
                  redirect('/home','refresh')
              }
              else
              {
                  echo '<div style="float:right;font-size:20px;color:red;margin-top:255px;margin-left:70%;position: absolute; z-index:4;">This Email id is already registered.</div>';
                  $this->index();  
              }
          }
      }
      
      public function logout()
      {
          $newdata = array(
          'user_id'    =>'',
          'user_name'  =>'',
          'user_email' => '',
          'logged_in'  => FALSE,
          );
          $this->session->unset_userdata($newdata );
          $this->session->unset_userdata('user_name' );
          $this->session->sess_destroy();
          redirect('/home', 'refresh');
      }
  }
?>
