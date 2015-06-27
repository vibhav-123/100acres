<?php 

class property{

public function __construct()
	{
		//$obj = new connectdb;
	}


public function postRecords($parameters)
{
//global connectdb::$conn;
$iam=$parameters['iam'];
$want=$parameters['iwantto'];
$prop=$parameters['property'];
$city=$parameters['city'];
$addr=$parameters['address'];
$bedrooms=$parameters['bedrooms'];
$crores=$parameters['crores'];
$lakhs=$parameters['lakhs'];
$thousands=$parameters['thousands'];
$price=$crores*10000000+$lakhs*100000+$thousands*1000;
$sql="INSERT INTO property(iam,iwantto,bedroom,price,property,city,address) VALUES (:iam,:want,:bed,:price,:prop,:city,:add)";
$connec = Doctrine_Manager::connection();
$q=$connec->prepare($sql);
$q->execute(array(':iam'=>$iam,
		':want'=>$want,
		':bed'=>$bedrooms,
		':price'=>$price,
		':prop'=>$prop,
		':city'=>$city,
		':add'=>$addr));
}
}
?>
