	
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('url');
   $this->load->library('session');
   $this->load->helper('form');
 }
 
 function check()
      {
       $fields = array('email'=>$this->input->post('email'),
                       'pwd'=>md5($this->input->post('password'))
                      );
       $this->sendCurlRequest($fields); 
      }

 function sendCurlRequest($fields,$flag='normal')
      {
       // url encoding
       $fields_string = json_encode($fields);
       $url = "localhost:8080/FireProject/webapi/Login/login"; 
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
       curl_setopt($ch,CURLOPT_HEADER,0);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));
       curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
       $output = curl_exec($ch);
       $output = json_decode($output);


          if($output->msg == true)
          {
              $newdata = array('email'  => $fields['email'],
                               'pwd'     => $fields['pwd'],
                               'logged_in' => TRUE
                               );

              $this->session->set_userdata($newdata);
              $session_id = $this->session->userdata('session_id');
              $logged_in = $this->session->userdata('logged_in');
  
                     if($flag == "auto")
                     {
                        $this->load->view('home',$newdata);
                     } 
                     else
                     {
                        echo "success";
                     }

          } 
          else 
          {
              echo "error";
          }
              curl_close($ch);
      }


   function logout()
      {
         $this->session->sess_destroy();
         $data=array('logged_in'=> false);
         $this->load->view('home',$data);
      }
 
   function success()
      {
         $data['logged_in'] = true;
         $this->load->view('home',$data);
      }

   function log($fields,$flag = 'auto')
      {
         $this->sendCurlRequest($fields,$flag); 
      }

}

 
?>
