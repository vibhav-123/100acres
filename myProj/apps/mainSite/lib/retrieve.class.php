<?php
class retrieve
{
	public function getParam($param)
	{
		$array["city"]=$param['keyword'];

		if(trim($param['min_price']) && trim($param['max_price']))
		{
		$array["min_price"]=$param['min_price'];
		$array["max_price"]=$param['max_price'];
		}

		if($param['bedrooms'])
			$array["bedroom"]=$param['bedrooms'];

		$connec = Doctrine_Manager::getInstance()->getCurrentConnection()->getDBh();
		$sql="INSERT INTO searchlog(city,min_price,max_price,bedroom) VALUES (:city,:min_price,:max_price,:bedroom)";
		$q=$connec->prepare($sql);
		$q->execute(array(':city'=>$array["city"],
		':min_price'=>@$array["min_price"],
		':max_price'=>@$array["max_price"],
		':bedroom'=>$array["bedroom"]));
		$solr_obj= new solrHandling(); 
		$res=$solr_obj->query($array,1);
		return $res;

		
	}
}

?>
