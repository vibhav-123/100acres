<?php
/**
* Retrieve
*
* It takes takes the seach parameters, stores them in an array and pass that array to solr for search.
*/
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
		
		//The search parameters are saved in the database for future reference
		$searchlog_obj=new searchlog();
		$searchlog_obj->saveSearchParam($array);

		//@param: search parameters and page number 1
		$solr_obj= new solrHandling(); 
		$res=$solr_obj->query($array,1);
		if($res)
		return $res;
		else
		return false;

		
	}
}

?>
