<?php 
class Autocomplete_city_model extends CI_Model {
	public function __construct()
	{
	        parent::__construct();
	}

	/*@function:fetches city names from DB table 'property' resembling passed city
	  @input:value entered in city column of search bar
	  @output:city names from table */
	  public function get_city($q)
	{
		$this->db->select('city');
        $this->db->distinct();
	    $this->db->like('city', $q);
	    $query = $this->db->get('property');
	    if($query->num_rows > 0)
	    {
	    	foreach ($query->result_array() as $row){
	        $row_set[] = htmlentities(stripslashes($row['city']));
	      }
	      echo json_encode($row_set); 
  		}
  	}
}