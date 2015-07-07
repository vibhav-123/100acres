<?php
class property_model extends CI_Model
{
/* we will use the function get_property */
  function get_property($city,$bedrooms,$minprice,$maxprice,$sellorrent,$sort,$page)
  {
    
        $results_per_page=4;                    //results to be displayed per page
        $start=(($page-1)*$results_per_page);   //starting result to be displayed on a given page
        //If any of the search constraint is not NULL then apply where clause 
        if($sellorrent!='NULL')
        $this->db->where('b.intention',$sellorrent);
        if($city!='NULL')
        $this->db->where('b.city',$city);
        if($bedrooms!='NULL')
        $this->db->where('b.bedroom',$bedrooms);
        if($minprice!='' && $maxprice!='')
        $this->db->where("b.expected_price BETWEEN $minprice AND $maxprice");
        //display Address and price of a property based on above constraints
        $this->db->select("SQL_CALC_FOUND_ROWS b.address as address ",FALSE); 
        $this->db->select('b.expected_price as expected_price');
        $this->db->select('b.imagepath as imagepath');
        $this->db->select('a.Name as Name');       //select Name and Email of person who has posted that respective property
        $this->db->select('a.Email as Email');
        $this->db->from('User a');
        $this->db->join('property b', 'b.User_id = a.User_id'); 
        $this->db->limit($results_per_page,$start);
        if($sort!='NULL')                       //if sort by is applied then sort it according to price in ascending order
        {
          $this->db->order_by('b.expected_price','asc');
        }    
        $q = $this->db->get()->result_array(); 
        $query = $this->db->query('SELECT FOUND_ROWS() AS `Count`');
        $data["totalres"] = $query->row()->Count;
        if(count($q) > 0)
        {
          $data['result']=$q;    
          return $data;
        }
     

  }
}