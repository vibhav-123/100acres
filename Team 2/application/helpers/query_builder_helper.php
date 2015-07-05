<?php 

	function buildSelectQuery($data,$table,$countRequired)
	{
		
		$query="Select postID,title,year,imageURL,description,userID,CREATED_ON,price,area from ".$table;
		$countQuery="";
		if($countRequired==true)
		{
			$countQuery="Select count(*) as totalrows from ".$table;
		}
		if(isset($data["city"]))
		{	
			$city=$data["city"];
			$query=$query." where city='$city' AND";
			if($countRequired)
			{
				$countQuery.=" where city='$city' AND";
			}
		}
		else 
			return "Invalid Request";
		
		if(isset($data["location"]))
		{
			$location=$data["location"];
			$query=$query." address like '%$location%'";
			if($countRequired)
			{
				$countQuery.= " address like '%$location%'";
			}
		}
		else
			return "Invalid Request";
		
		if(isset($data["minprice"]))
		{
			if(isset($data["maxprice"]))
			{
				$minprice=$data["minprice"];
				$maxprice=$data["maxprice"];
				$query=$query." AND price BETWEEN $minprice AND $maxprice";
				if($countRequired)
				{
					$countQuery.= " AND price BETWEEN $minprice AND $maxprice";
				}
			}
			else 
			{
				$minprice=$data["minprice"];
				$query=$query." AND price >= $minprice";
				if($countRequired)
				{
					$countQuery.= " AND price >= $minprice";
				}
			}
		}
		else if(isset($data["maxprice"]))
		{
			$maxprice=$data["maxprice"];
			$query=$query." AND price <= $maxprice";
			if($countRequired)
			{
				$countQuery.= " AND price <= $maxprice";
			}		
		}
		
		if(isset($data["ownership"]))
		{
			$ownership=$data["ownership"];
			$query=$query." AND ownership='$ownership'";
			if($countRequired)
			{
				$countQuery.= " AND ownership='$ownership'";
			}
			
		}
		
		if($data["type"]=="pg" && isset($data["sharing"]))
		{
			$sharing=$data["sharing"];
			$query=$query." AND sharing='$sharing'";
			if($countRequired)
			{
				$countQuery.= " AND sharing='$sharing'";
			}		
		}
		
		if($data["type"]=="pg" && isset($data["gender"]))
		{
			$gender=$data["gender"];
			$query=$query." AND gender='$gender'";
			if($countRequired)
			{
				$countQuery.= " AND gender='$gender'";
			}
		
		}
		
		if($data["type"]=="rent" || $data["type"]=="sell")
		{
			if(isset($data["propType"]))
			{
				$propType=$data["propType"];
				$query=$query." AND propType='$propType'";
				if($countRequired)
				{
					$countQuery.= " AND propType='$propType'";
				}
			}
			
			if(isset($data["builtType"]))
			{
				$builtType=$data["builtType"];
				$query=$query." AND builtType='$builtType'";
				if($countRequired)
				{
					$countQuery.= " AND builtType='$builtType'";
				}
			}
			
			if(isset($data["consStatus"]))
			{
				$consStatus=$data["consStatus"];
				$query=$query." AND consStatus='$consStatus'";
				if($countRequired)
				{
					$countQuery.= " AND consStatus='$consStatus'";
				}
			}
			
			if(isset($data["bedrooms"]))
			{
				$bedrooms=$data["bedrooms"];
				$query=$query." AND bedrooms='$bedrooms'";
				if($countRequired)
				{
					$countQuery.= " AND bedrooms='$bedrooms'";
				}
			}
		}	
		
		if(isset($data["type"])=="rent")
		{
			if(isset($data["furniture"]))
			{
				$furniture=$data["furniture"];
				$query=$query." AND furniture='$furniture'";
				if($countRequired)
				{
					$countQuery.= " AND furniture='$furniture'";
				}
			}
		}
		
		$perpageDefault=5;
		
		if(isset($data["page"]))
		{
			if(isset($data["perpage"]))
			{
				$offset=$data["perpage"]*($data["page"]-1);
				$query=$query." LIMIT $offset,".$data["perpage"];
			}
			else
				return "Invalid Request";
		}
		else
			if(isset($data["perpage"]))
				$query.=" LIMIT 0,".$data['perpage'];
		else 
			$query.=" LIMIT 0,$perpageDefault";
		return array("query"=>$query,"countQuery"=>$countQuery);
	}
?>