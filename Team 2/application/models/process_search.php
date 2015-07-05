<?php 

class process_search extends CI_MODEL
{
	
	public function searchProperty($data)
	{
		if(isset($data["perpage"]))
		{
			$perPage=$data["perpage"];
		}
		else 
			$perPage=5;
		$this->load->helper("query_builder");
		$tableName="";
		if(!isset($data["type"]))
		{
			return "Invalid Request";
		}
		$type=$data["type"];
		if($type =="buy")
		{
			$tableName="PostSell";
		}
		else 
		if($type=="rent")
		{
			$tableName="PostRent";		
		}
		else 
		if ($type=="pg")
		{
			$tableName="PostPG";
		}
		else 
		{
			return "Invalid Request";
		}
		
		$countRequired=false;
		
		if(!isset($tpages))
		{
			$countRequired=true;
		}
		$resultQueries=buildSelectQuery($data,$tableName,$countRequired);
		
			if($resultQueries=="Invalid Request")
			{
				return "Invalid Request";
			}
			else
			{
				if($countRequired)
				{
					
					$totalRows=$this->db->query($resultQueries["countQuery"])->result();
					$totalPages = ceil($totalRows[0]->totalrows / $perPage);//total pages we going to have
					
				}
				else 
					$totalPages=$data["tpages"];
				$result= $this->db->query($resultQueries["query"])->result();
		
				$argumentsToBePassed=array("result"=>$result,"tpages"=>$totalPages);
				return $argumentsToBePassed;
			}
		}
	
}

?>