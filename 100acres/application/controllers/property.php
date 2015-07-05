<?php
class property extends CI_Controller{
	 
	function __construct()
	{
		parent::__construct();
		$this->load->model('property_model');
		$this->load->library('session');
	}

	
       
	function openForm()
	{
		$data['logged_in']=$this->session->userdata('logged_in');
		$this->load->view('Posting_form1',$data);	
	}
    //function for uploading the image in the database
	function image_upload() 
	{
        $target_dir = "/var/www/html/100acres/public/images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
       
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
       
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
       
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
            return $_FILES["fileToUpload"]["name"];
        }
        else 
        {
            return 0;
        }
        return 0;
    }
    
    //form is validated successfully then insertion into database is done through this
	function submit()
	{
        $this->load->model('property_model');
		$val1 = intval($this->input->post('type6')) * 10000000;
		$val2 = intval($this->input->post('type7')) * 100000;
		$val3 = intval($this->input->post('type8'))*1000;
		$val4 = $val1 + $val2 + $val3;
        //$val4 = intval($this->input->post('type9'));

        $name = $this->image_upload();
		
		$property = array('property_type' => $this->input->post('type2'),
			              'city' => $this->input->post('type3'),
			              'address' => $this->input->post('type4'),
			              'bedrooms' => $this->input->post('type5'),
			              'expected_price' => $val4,
			              'price_pu_area' => $this->input->post('type10'),
			              'image_path_name' =>$name
		                 );		
		//storing in the property table
		$p_id =$this->property_model->storedata1($property);
		$email=$this->session->userdata('email');
		$uid=$this->property_model->userid($email);
		$data['uid']=$uid;
		$uid=$data['uid'][0];
		
		$seller = array('pid'=>$p_id,
			            'uid'=>$uid->uid,
			            'Type_of_person' => $this->input->post('type'),
			            'Purpose' => $this->input->post('type1')
			           );
		//storing in the seller table
		$this->property_model->storedata($seller);
		echo "<script>alert('posting done');</script>";
		$data['logged_in']=$this->session->userdata('logged_in');
		$this->load->view('home',$data);

	}
	     
	  
    function index()
	{
        $data['logged_in']= $this->session->userdata('logged_in');
	    if($data['logged_in'] == true)
	    {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('type2', 'required');
     	$this->form_validation->set_rules('type3', 'required');
		$this->form_validation->set_rules('type4', 'required');
		$this->form_validation->set_rules('type5',  'required');
		

	            if ($this->form_validation->run() == FALSE) 
	            {
                   $this->openForm();
                } 
 	            else 
 	            {
                   $this->submit();
	            }

	    }
	    else
	    {
		echo "<script>alert('first login');</script>";
        $this->load->view('home',$data);
	    }
		
		
	}
	 
  }
?> 
