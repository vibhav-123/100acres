<?php 
session_start(); 
class Welcome extends CI_Controller {

	public function __construct() 
	{
		parent:: __construct();
		$this->load->model("property_model");
		$this->load->model("user_model");
		$this->load->library("pagination");
		//xss_clean used on $_post and $_get to prevent vulnerable attacks
		$_POST=$this->security->xss_clean($_POST);    
		$_GET=$this->security->xss_clean($_GET);
	}
	

    /*@function:loads home page of website
      @input:none
      @output:none*/
    public function index()
	{
	    $this->load->view('home');    
	}


	/*@function:loads login page
      @input:none
      @output:none*/
    public function login() 
    {
	    $this->load->view('login');    
    }

    /*@function:loads register page
      @input:none
      @output:none*/
    public function register() 
    {
	    $this->load->view('register');   
    }
    
    /*@function:allows user to post property if logged in,otherwise loads login page
      @input:none
      @output:none*/
	public function sell_property() 
	{
		if($this->session->userdata('logged_in'))
			$this->load->view('sell_property');      
		else
			$this->load->view('go_to_login');
	 }
    
    /*@function:calls web service to check for duplicate email at time of registration.
      @input:none
      @output:String("success"/"emailid already exists") */
    public function check_email_availability() {            
		$email=$_POST['email'];	
		$data=array("email" => $email);
		$data_string=json_encode($data);
		$url='http://localhost:8080/HundredAcres/webapi/resource/check_email_available';
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);   
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
		$result = curl_exec($ch);
		echo $result;
    }

    
    /*@function:calls web service to insert register details into DB table 'users'.
      @input:none
      @output:String("success"/"email id already exists") */
	public function register_userAPI()                       
	{
		$data=array("name" => $_POST['Name'], "email" => $_POST['email'], "password" => $_POST['Password'], "contact_no" => $_POST['no']);
		$data_string=json_encode($data); 
		$url='http://localhost:8080/HundredAcres/webapi/resource/register';
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);  
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
		$result = curl_exec($ch);
		if ($result=="Success")
	  		$this->load->view('after_register_success');        
		else
		    $this->load->view('register');             
	 
	}

    /*@function:loads profile page with welcome status if already registered after login,otherwise prompts user to register first.
      @input:none
      @output:none */
	public function check_user_registered() 
	{                             
		$data=array("email" => $_POST['Email'], "password" => $_POST['Password']);
		$data_string=json_encode($data);
		$ch=curl_init('http://localhost:8080/HundredAcres/webapi/resource/check_registered'); 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
		$user_id = curl_exec($ch);
		//$user_data=array("email" => $_POST['Email'], "password" => $_POST['Password'],"name"=>$result);
		if ($user_id!=0)
		{
			$user_data=$this->user_model->get_user_details($user_id);
			$this->session->set_userdata('logged_in',$user_data);     
			$this->check_session();
		}
		else 
		    $this->load->view('go_to_register');               		 
	}
    
    /*@function:checks whether user is still logged in or not.
      @input:none
      @output:
           @sucess:loads profile page with welcome status if session is stll set 
    */
	public function check_session()                     
	{
	 	if($this->session->userdata('logged_in'))
		{
			$user_data = $this->session->userdata('logged_in');
			$this->load->view('profile',$user_data);      
		}
		else
			$this->load->view('home');
	}

    /*@function:takes email of user and displays properties posted by logged in user if any, otherwise prints'no results'.
      @input:none
      @output:none */
	public function properties_posted_by_user()
	{
       $num_rec_per_page=4;       
        if (isset($_GET['page']))
			$page  = $_GET['page']; 
        else 
			$page=1; 
     	$start_from = ($page-1) * $num_rec_per_page; 
     	if(isset($_GET['owner']))
        {        	
        	$posted_properties['result']=$this->property_model->get_properties_posted_by_user($_GET['owner'],$num_rec_per_page,$start_from);            
            $posted_properties['flag']=true;
    		$this->load->view('search_results',$posted_properties); 
        }
	}

	/*@function:loads details page of logged in user on click of 'welcome' in profile page.
      @input:none
      @output:none */
	public function my_profile()                   
    {		
            $user_details=$this->session->userdata('logged_in');
			$this->load->view('my_profile', $user_details);   
    }

    /*@function:loads edit profile page where user can update profile
      @input:none
      @output:none */
    public function edit_user_profile()
    {
            $user_details=$this->session->userdata('logged_in');
            $this->load->view('edit_user_profile', $user_details); 
    }

    /*@function: implements updates in DB table 'users' after profile is edited and displays updated details.
      @input:none
      @output:none */
    public function save_profile_after_edit()
    {
            $profile_data = $this->session->userdata('logged_in');
            $profile_data['contact_no'] = $_POST['contact_no'];
            $this->session->set_userdata('logged_in',$profile_data);
            if($this->user_model->update_user_details($profile_data))
            	$this->my_profile();
    }

    /*@function:adds posted property in DB table 'property' on success otherwise prints 'failed' message 
      @input:none
      @output:none */
    public function add_property()                      
	{
		$session_data = $this->session->userdata('logged_in');
		$filename=$_FILES['imagepath']['name'];
	    $filetype=$_FILES['imagepath']['type'];
		if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif' or $filetype=='image/jpg')
		{
			move_uploaded_file($_FILES['imagepath']['tmp_name'],'upload/'.$filename);
			$filepath="upload/".$filename;
			$data = array("purpose"=>$this->input->post('purpose'),"type"=>$this->input->post('type'),"pg"=>$this->input->post('pg'),
            "city"=>$this->input->post('city'),"locality"=>$this->input->post('locality'),
            "society"=>$this->input->post('society'),"bedroom"=>$this->input->post('bedroom'),
            "bathroom"=>$this->input->post('bathroom'),"balcony"=>$this->input->post('balcony'),
            "furnish"=>$this->input->post('furnish'),"area"=>$this->input->post('area'),
            "unit"=>$this->input->post('unit'),"address"=>$this->input->post('address'),
            "price"=>$this->input->post('price'),"description"=>$this->input->post('description'),
            "lat"=>$this->input->post('lat'),"lon"=>$this->input->post('lon'),
            "imagepath"=>$filename,"user_id"=>$session_data['user_id']);
        }   
		if($this->property_model->add_property($data))
		   $this->load->view('after_posting_property');        
		else
		   echo "Sorry,failed to add your property. Please retry.";
    }

    /*@function:auto_completes city name in search property bar
      @input:none
      @output:none*/
	public function fetch_city()
    {
        $this->load->model('autocomplete_city_model');
        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->autocomplete_city_model->get_city($q);
        }
    }

    /*@function:searches requested property in DB table 'property' and displays results,otherwise prints 'no results'
	@input:none
	@output:none */
    public function search_property()                      
	{       
      $num_rec_per_page=4;       
        if (isset($_GET['page']))
			$page  = $_GET['page']; 
        else 
        	$page=1; 
        $start_from = ($page-1) * $num_rec_per_page; 
        if($this->input->get('purpose'))
        {
			$search_inputs=array('purpose'=>$this->input->get('purpose'),'type'=>$this->input->get('type'),
				'city'=>$this->input->get('city'),'locality'=>$this->input->get('locality'),'maxprice'=>$this->input->get('maxprice'),
				'minprice'=>$this->input->get('minprice'),'bedroom'=>$this->input->get('bedroom'));
				$purpose = $this->input->get('purpose');
        }
        else if(isset($_GET['purpose']))
        {
		    $search_inputs=array('purpose'=>$_GET['purpose'],'type'=>$_GET['type'],
				'city'=>$_GET['city'],'locality'=>$_GET['locality'],'maxprice'=>$_GET['maxprice'],
				'minprice'=>$_GET['minprice'],'bedroom'=>$_GET['bedroom']);
        }
		$data2['result']=$this->property_model->find_property($search_inputs,$num_rec_per_page,$start_from);
        $data2['count_allrows']=$this->property_model->find_count($search_inputs);
		$data2['purpose'] = $search_inputs['purpose'];
		$data2['type'] = $search_inputs['type'];
		$data2['city'] = $search_inputs['city'];
		$data2['locality'] = $search_inputs['locality'];
		$data2['minprice'] = $search_inputs['minprice'];
		$data2['maxprice'] = $search_inputs['maxprice'];
		$data2['flag']=false;
		if($data2['result'])
		$this->load->view('search_results',$data2); 
		else
			$this->load->view('no_results');	
	}

	/*@function:loads details of selected property in search results page.
      @input:none
      @output:none */
	public function view_property_detail()                   //loads details page of logged in user.
    {
		
		$pid = $this->input->post('pid');
		$details = $this->property_model->get_by_pid($pid);
		if($details)
            $this->load->view('property_details',$details); 
		else
			$this->load->view('no_results');
    }

    /*@function:allows user to log out and go back to home page
      @input:none
      @output:none */
	public function logout()                           
	{
		$this->session->unset_userdata('logged_in');   
		session_destroy();
		$this->load->view('home');
    }	
}
?>