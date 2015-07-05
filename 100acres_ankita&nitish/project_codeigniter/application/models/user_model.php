<?php 

class User_model extends CI_Model 
{
	public function __construct()
	{
	        $this->load->helper('date');
	        parent::__construct();
	}
	
	/*@function:returns details of user with given email
	  @input:email of user
	  @output:row of 'users' table with same email*/
	public function get_user_details($user_id)                        
	{
		if($user_id != 0) 
		{
			$query = $this->db->get_where('users', array('user_id' => $user_id));
			return $query->row_array();
		}
	    else 
       		 return FALSE;
    }
    
    /*@function:updates details of user with modified profile data
	  @input:array containing modified user details
	  @output:true on success*/
    public function update_user_details($profile_data)
    {
    	$this->db->where('user_id',$profile_data['user_id']);
    	$profile_data['updated_on']=date('Y-m-d H:i:s',now());
    	$this->db->update('users',$profile_data);
    	return true;
    }
}
?>