<?php
class property_model extends CI_Model
 
{
/* we will use the function get_property */
  function get_property($city,$bedrooms,$minprice,$maxprice,$sellorrent,$sort,$page)
  {
   
    
    $results_per_page=4;
    $start=(($page-1)*$results_per_page);
    /*if($sellorrent!='NULL')
    $this->db->where('intention',$sellorrent);
    if($city!='NULL')
    $this->db->where('city',$city);
    if($bedrooms!='NULL')
    $this->db->where('bedroom',$bedrooms);
    if($minprice!='' && $maxprice!='')
    $this->db->where("expected_price BETWEEN $minprice AND $maxprice");
    $this->db->select("SQL_CALC_FOUND_ROWS address",FALSE);
    $this->db->select("address");
    $this->db->select('expected_price');
    $this->db->select('imagepath');*/
    //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
    
    //$this->db->where('b.intention',$sellorrent);
    

    if($sellorrent!='NULL')
    $this->db->where('b.intention',$sellorrent);
    if($city!='NULL')
    $this->db->where('b.city',$city);
    if($bedrooms!='NULL')
    $this->db->where('b.bedroom',$bedrooms);
    if($minprice!='' && $maxprice!='')
    $this->db->where("b.expected_price BETWEEN $minprice AND $maxprice");
    $this->db->select("SQL_CALC_FOUND_ROWS b.address as address ",FALSE);
    //$this->db->select("b.address");
    $this->db->select('b.expected_price as expected_price');
    $this->db->select('b.imagepath as imagepath');
    $this->db->select('a.Name as Name');
    $this->db->select('a.Email as Email');
    $this->db->from('User a');
    $this->db->join('property b', 'b.User_id = a.User_id'); 
    $this->db->limit($results_per_page,$start);
    if($sort!='NULL')
    {
        $this->db->order_by('b.expected_price','asc');
       // echo $sort;die();
    }    
    $q = $this->db->get()->result_array(); 
   //echo $this->db->last_query();die;
    $query = $this->db->query('SELECT FOUND_ROWS() AS `Count`');
    $data["totalres"] = $query->row()->Count;
    
    if(count($q) > 0)
    {
      
      $data['result']=$q;    
      return $data;
    }
  }
}