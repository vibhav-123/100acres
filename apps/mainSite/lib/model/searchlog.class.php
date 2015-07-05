<?php
/**
* Searchlog
*
* It connects with the searhlog table
*/
class searchlog
{
	//Returns the parameters of the last search made by the user
	public function retSearchParam()
	{
	    $connec = Doctrine_Manager::connection();
	    $statement = $connec->prepare("SELECT * FROM searchlog order by sid desc limit 1");
	    $statement->execute();
	    $arr1[]=$statement->fetch(PDO::FETCH_ASSOC);
	    if(is_array($arr1))
	    foreach ($arr1 as $a)
	    $arr2=$a;
	    if(trim($arr2['city'])) 
	    	$arr["city"]=$arr2["city"];

	    if(trim($arr2['min_price']) && trim($arr2['max_price'])) 
	    {
	    $arr["min_price"]=$arr2["min_price"];
	    $arr["max_price"]=$arr2["max_price"];
            }

    	    if(trim($arr2['bedroom']))
	      $arr["bedroom"]=$arr2["bedroom"];

	    if(is_array($arr))
	    return $arr;
	}
	
	//search parameters are saved in the database
	public function saveSearchParam($array)
	{
		$connec = Doctrine_Manager::connection();
		$sql="INSERT INTO searchlog(city,min_price,max_price,bedroom) VALUES (:city,:min_price,:max_price,:bedroom)";
		$q=$connec->prepare($sql);
		$q->execute(array(':city'=>$array["city"],
		':min_price'=>@$array["min_price"],
		':max_price'=>@$array["max_price"],
		':bedroom'=>@$array["bedroom"]));

	}
	
}
?>
