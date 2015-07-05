<?php 
/**
* Property
*
* It performs the function of putting records in the database and retrieving them. 
*/
class property{
/**
*
* $parameters: Details of propery
* $file: Image associated with the property
*/
public function postRecords($parameters,$file)
{
$str="http://www.100acres.com/uploads/images/";
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
if($file['error']==0)
{
	$ur=$str.$file['name'];
}
else
{
	$ur="http://www.100acres.com/uploads/images/no_image.jpg";
}
if($parameters['description'])
	$description=$parameters['description'];
else
	$description= "No other details are posted by the owner";
$sql="INSERT INTO property(iam,iwantto,bedroom,price,property,city,address,uid,iurl,description) VALUES (:iam,:want,:bed,:price,:prop,:city,:add,:uid,:url,:desc)";
$connec = Doctrine_Manager::connection();
$q=$connec->prepare($sql);
$q->execute(array(':iam'=>$iam,
		':want'=>$want,
		':bed'=>$bedrooms,
		':price'=>$price,
		':prop'=>$prop,
		':city'=>$city,
		':add'=>$addr,
		':uid'=>$uid,
		':url'=>$ur,
		':desc'=>$description));
}

/**
* @param: Property id
* returns the details of the property and of the owner of the property
*/

  public function getRecords($pid)
  {
	$connec = Doctrine_Manager::connection();
	    $statement = $connec->prepare("SELECT * FROM property where id=$pid");
	    $statement->execute();
	    $arr1[]=$statement->fetch(PDO::FETCH_ASSOC);
	    if(is_array($arr1))

	    foreach ($arr1 as $a)
	    $arr2=$a;
	    $arr["id"]=$arr2["id"];
            $arr["iam"]=$arr2["iam"];
	    $arr["iwantto"]=$arr2["iwantto"];
            $arr["bedroom"]=$arr2["bedroom"];
	    $arr["price"]=$arr2["price"];
            $arr["property"]=$arr2["property"];
	    $arr["city"]=$arr2["city"];
            $arr["address"]=$arr2["address"];
	    $arr["iurl"]=$arr2["iurl"];
	    $arr["description"]=$arr2["description"];
            $uid=$arr2["uid"];
	    $user_obj=new users();
	    // Returns the user details
	    $userData=$user_obj->retUser($uid);
	    $arr["username"]=$userData["username"];
            $arr["email"]=$userData["email"];
	    $arr["mobile"]=$userData["mobile"];	    
	    if(is_array($arr))
	    return $arr;
  }
}
?>
