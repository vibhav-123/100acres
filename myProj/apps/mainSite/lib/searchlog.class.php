<?php
class searchlog
{
	public function retSearchParam()
	{
	    $connec = Doctrine_Manager::getInstance()->getCurrentConnection()->getDBh();
	    $statement = $connec->prepare("SELECT * FROM searchlog order by sid desc limit 1");
	    $statement->execute();
	    $arr1[]=$statement->fetch(PDO::FETCH_ASSOC);
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
	    return $arr;
	}
	
}
?>
