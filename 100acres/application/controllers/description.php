<?php 

class Description extends CI_Controller{


  public function  __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('descriptionmodel');
    $this->load->library('session');
    $this->load->library('googlemaps'); 

  }

  public function index(){

    $this->load->model('map');
    $address=$this->input->post('$address');
    //get latitude, longitude and formatted address
    $data_arr = $this->map->geocode($address);
    $config['center_address'] = $data_arr[2];
    $this->googlemaps->initialize($config);
    $data['map'] = $this->googlemaps->create_map();
    $this->load->view('descriptionview', $data); 
 
    // if able to geocode the address
  /*  if($data_arr){
         
        $latitude = $data_arr[0];
        $longitude = $data_arr[1];
        $formatted_address = $data_arr[2];
    }
                
    $this->load->view('descriptionview',$data_arr);*/
   
    
    
}
}
?>