<?php
/**
* users
*
* Coneects with the user table
*/
class users{
/**
*
* @param: username
* returns the id of that username
*/
public function returnId($username)
{
    $connec = Doctrine_Manager::connection();
    $statement = $connec->prepare("SELECT id FROM users WHERE username =:name");
    $statement->execute(array(':name' => $username));
    $userId=$statement->fetchColumn();
	return $userId;
}

/**
*
* @param: userid
* returns the name of that user
*/
public function returnName($userid)
{
    $connec = Doctrine_Manager::connection();
    $statement = $connec->prepare("SELECT username FROM users WHERE id =:id");
    $statement->execute(array(':id' => $userid));
    $userName=$statement->fetchColumn();
	return $userName;
}

/**
*
* @param: user details
* Puts user details in the db
*/
public function postUsers($parameters)
{
$username=$parameters['username'];
$mobile=$parameters['contact'];
$email=$parameters['email'];
$password=$parameters['p'];

$connec = Doctrine_Manager::connection();
$statement = $connec->prepare("SELECT id FROM users WHERE username =:name");
$statement->execute(array(':name' => $username));
    if( $statement->fetchColumn()) {
   	 return false;
    } else {
	$sql="INSERT INTO users(mobile,username,email,password) VALUES (:m,:usr,:eml,:pswd)";
	$q=$connec->prepare($sql);
	$q->execute(array(':m'=>$mobile,
   		 ':usr'=>$username,
	   	 ':eml'=>$email,
   		 ':pswd'=>$password,
   		 ));
	    return true;
   	 }
}

/**
*
* @param: username and password
* returns true if that user exists and password entered is correct
*/

  public function checkUser($param)
  {$connec1 = Doctrine_Manager::connection();
    $username=$param['name'];
   $password=$param['pwd'] ;
    
    $statement1 = $connec1->prepare("SELECT password FROM users WHERE username =:name");
    $statement1->execute(array(':name' => $username));
     $pwd=$statement1->fetchColumn();
    if($pwd){
   	 if($pwd==$password)
   		 return true;
   	 else{  return false;}
   	 
    }
    else {
    return false;
    }
  }
  
/**
*
* @param: userid
* returns all the details of a user
*/

  public function retUser($uid)
  {
	$connec = Doctrine_Manager::connection();
	$statement = $connec->prepare("SELECT * FROM users where id=$uid");
	$statement->execute();
	$arr1[]=$statement->fetch(PDO::FETCH_ASSOC);
	if(is_array($arr1))
        foreach ($arr1 as $a)
	$arr2=$a;
	$arr["username"]=$arr2["username"];
        $arr["email"]=$arr2["email"];
        $arr["mobile"]=$arr2["mobile"];
	if(is_array($arr))
	    return $arr;
  }
}
?>
