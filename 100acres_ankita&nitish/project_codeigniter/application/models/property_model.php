<?php 

class Property_model extends CI_Model {
	public function __construct()
	{
	    parent::__construct();
	}
	
    /*@function:adds details of posted property  to DB table 'property'
	  @input:array of value of fields entered in sell/rent property form
	  @output:true(if success) otherwise false*/
	public function add_property($data)                        
	{
        if($data)
        {
	        $this->db->set('posted_on', 'NOW()', FALSE);
			$this->db->insert('property',$data);
			return true;
	    }
    	else
    		return false;
	}

	/*@function:fetches details of property from DB table 'property' with given pid
	  @input:pid
	  @output:row from table with matched pid, otherwise false*/
	public function get_by_pid($pid)
	{
		if($pid)
		{
		     $query = $this->db->get_where('property', array('pid' => $pid));
		     return $query->row_array();
        }
		else 
			 return FALSE;
	}
    

	/*@function:fetches details of properties posted by logged in user
	  @input:posted_by,limit,offset
	  @output:row from table with matched email, otherwise false*/
	public function get_properties_posted_by_user($posted_by,$limit,$offset)
	{
		if($posted_by)
		{
			$query_records = $this->db->get_where('property', array('user_id' => $posted_by),$limit,$offset);
			$query_count = $this->db->get_where('property', array('user_id' => $posted_by));
			if($query_records->num_rows()>0)
			{

				$data["properties"]= $query_records->result_array();
				$data["count_properties"]=$query_count->num_rows();
				return $data;
			}
			else
				return false;
		}		
	}

	/*@function:returns total no. of rows returned by property search query
	  @input:purpose,locality,city,bedroom,minprice,maxprice(fields entered in search bar)
	  @output:count of rows*/
	public function find_count($search_inputs)
	{
		if($search_inputs['purpose']!='')
		{
			if($search_inputs['purpose']=='buy')
				$this->db->where('purpose','sell');
			else
            	$this->db->where('purpose','rent');
		}
		if($search_inputs['type']!='')
			$this->db->where('type',$search_inputs['type']);
		if($search_inputs['city']!='')
        	$this->db->where('city',$search_inputs['city']);    
		if($search_inputs['minprice']!='' AND $search_inputs['maxprice']!='')
			 $this->db->where("price BETWEEN $minprice AND $maxprice");
		if($search_inputs['bedroom']!='')
			$this->db->where('bedroom',$search_inputs['bedroom']);  
		if($search_inputs['locality']!='')
			$this->db->where('locality',$search_inputs['locality']);
		$count1 = $this->db->count_all_results('property');
		return $count1;
	}

    /*@function:searches requested property in table to display search results
	  @input:purpose,locality,city,bedroom,minprice,maxprice(fields entered in search bar) and limit,offset
	  @output:search results otherwise false*/
	public function find_property($search_inputs,$no,$start)
	{
		if($search_inputs['type']!='NULL' AND $search_inputs['type']!='NULL')
		{
			$this->db->where(array('type' => $search_inputs['type']));
			if($search_inputs['purpose']=='buy')
		        $this->db->where(array('purpose' => 'sell'));
		    else
				 $this->db->where(array('purpose' => 'rent'));
			if($search_inputs['city']!='')
				$this->db->where('city',$search_inputs['city']);
			if($search_inputs['minprice']!='' AND $search_inputs['maxprice']!='')
				 $this->db->where("price BETWEEN $minprice AND $maxprice");
            if($search_inputs['bedroom']!='')
			    $this->db->where('bedroom',$search_inputs['bedroom']);
			if($search_inputs['locality']!='')
			    $this->db->where('locality',($search_inputs['locality']));	
			
			$query = $this->db->get('property',$no,$start);
            if($query->num_rows()>0)
			{
			    
			    $data["properties"]= $query->result_array();
			    return $data;
			}

			else
			    return false;
	   }
    }		
}