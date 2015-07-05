<?php
class property_model extends CI_Model
 
{
/* we will use the function get_property */
  function get_property($city,$bedrooms,$minprice,$maxprice,$sellorrent,$page)
  {
   
    
    $results_per_page=4;
    $start=(($page-1)*$results_per_page);
    if($sellorrent!='NULL')
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
    $this->db->select('imagepath');
    $this->db->limit($results_per_page,$start);
    $q = $this->db->get('property')->result_array(); 
    $query = $this->db->query('SELECT FOUND_ROWS() AS `Count`');
    $data["totalres"] = $query->row()->Count;
    if(count($q) > 0)
    {
      
      $data['result']=$q;    
      return $data;
    }
  }
}