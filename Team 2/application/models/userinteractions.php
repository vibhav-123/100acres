<?php

class Userinteractions extends CI_Model
{

	public function submitInteractions($data,$userID)
	{		
		$dataToBeSent=array();		
		if(isset($data["postID"]))
			$dataToBeSent["postID"]=$data["postID"];
		else
			return "Error";
		if(isset($data["mode"]))
			$dataToBeSent["mode"]=$data["mode"];
		else
			return "Error";
		$dataToBeSent["userID"]=$userID;
		
		if($this->db->insert("Interactions",$dataToBeSent))
			return $this->db->insert_id();
		else
			return "Error";
		
	}
}

?>
