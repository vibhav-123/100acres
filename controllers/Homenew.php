<?php 
//Controller to load Homepage
class Homenew extends CI_Controller {
	function __construct()
 	{
   		parent::__construct();
   		$this->load->library('session');                                 //initialize the Session class manually in controller constructor
  }
	public function index()
		{
			//if the user is logged in then pass user's name to the view.
      if($this->session->userdata('logged_in'))
   				{
     				$session_data = $this->session->userdata('logged_in');
     				$data['Name'] = $session_data['Name'];
    				$this->load->view('homenew', $data);
   				}
   		else
   				{
            //if the user is not logged in then pass user's name as NULL or an empty string
            $data['Name'] ='NULL';
   					$this->load->view('homenew',$data);
   				}
    }	
}
?>

