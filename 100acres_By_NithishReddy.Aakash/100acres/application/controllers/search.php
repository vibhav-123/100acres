<?php 

class Search extends CI_Controller{


  public function  __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('searchmodel');
    $this->load->library('session');
    

  }

  public function index(){
    $post['city']=(empty($this->input->get('city')))? NULL : $this->input->get('city');
    $post['minprice']=(empty($this->input->get('minprice')))? NULL : $this->input->get('minprice');
    $post['maxprice']=(empty($this->input->get('maxprice')))? NULL : $this->input->get('maxprice');
    $post['bedrooms']=(empty($this->input->get('bedrooms')))? NULL : $this->input->get('bedrooms');
    
    //print_r($post);
    
    $query=$this->searchmodel->search_property($post);

    //$this->load->view('searchview');
    /*if($query != null){*/
    $data['result']=$query;
    $data['postparams']=$post;
    $data['logged_in']=$this->session->userdata('logged_in');
   
$this->load->view('searchview',$data);
   
  /*}
  else
    echo "<h1>No results to display</h1>";*/
}

  public function getitems($offset,$limit){
    $post['city']=(empty($this->input->get('city')))? NULL : $this->input->get('city');
    $post['minprice']=(empty($this->input->get('minprice')))? NULL : $this->input->get('minprice');
    $post['maxprice']=(empty($this->input->get('maxprice')))? NULL : $this->input->get('maxprice');
    $post['bedrooms']=(empty($this->input->get('bedrooms')))? NULL : $this->input->get('bedrooms');
    
    /*print_r($post);
    print_r($offset."sjhsjkfdfk");
    print_r($limit);
    die;*/

    $query=$this->searchmodel->search_property($post,$offset,$limit);
    //$this->load->view('searchview');
   
    if($query != null){
        $data['result']=$query;
        $data['postparams']=$post;
        $this->load->view('searchresults',$data);
    } else {
             echo "No results found.";
    }
    
  }


  public function getDescription($id = ''){

    $query=$this->searchmodel->getDetails($id);
    if($query != null){
        $data['result']=$query;
        //$data['postparams']=$post;
        $city=$data['result'][0]->city;
        $address=$data['result'][0]->address;
       
        //print_r('http://maps.google.com/maps/api/geocode/json?address=noida,+'.$city.'&sensor=false');
        
        $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$city.'&sensor=false');

$output= json_decode($geocode);

$lat = $output->results[0]->geometry->location->lat;
$long = $output->results[0]->geometry->location->lng;
$this->load->library('googlemaps');

$config['center'] = "$lat,$long";
$config['zoom'] = 'auto';
$config['places'] = TRUE;
$config['placesLocation'] = "$lat,$long";
$config['placesRadius'] = 100; 
$this->googlemaps->initialize($config);
$data['map'] = $this->googlemaps->create_map();
$data['logged_in']=$this->session->userdata('logged_in');
        $this->load->view('descriptionview',$data);
    } else {
             
             echo "No result found";
    }
  }

}

?>