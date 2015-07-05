<?php 

class property{

public function __construct()
	{
		//$obj = new connectdb;
	}


public function postRecords($parameters,$file)
{
$str="http://www.100acres.com/uploads/images/";
//global connectdb::$conn;
$cook_obj=new cookie1;
$uid=$cook_obj->retId();
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

if($file['name'])
{
		
	$ur=$str.$file['name'];
}
else
{
	$ur=null;
}
$sql="INSERT INTO property(iam,iwantto,bedroom,price,property,city,address,uid,iurl) VALUES (:iam,:want,:bed,:price,:prop,:city,:add,:uid,:url)";
$connec = Doctrine_Manager::getInstance()->getCurrentConnection()->getDBh();
$q=$connec->prepare($sql);
$q->execute(array(':iam'=>$iam,
		':want'=>$want,
		':bed'=>$bedrooms,
		':price'=>$price,
		':prop'=>$prop,
		':city'=>$city,
		':add'=>$addr,
		':uid'=>$uid,
		':url'=>$ur));
}
}
?>
