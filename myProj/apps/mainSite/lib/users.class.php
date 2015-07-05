<?php

class users{

public function returnId($username)
{
    $connec = Doctrine_Manager::getInstance()->getCurrentConnection()->getDBh();
    $statement = $connec->prepare("SELECT id FROM users WHERE username =:name");
    $statement->execute(array(':name' => $username));
    $userId=$statement->fetchColumn();
	return $userId;
}

public function returnName($userid)
{
    $connec = Doctrine_Manager::getInstance()->getCurrentConnection()->getDBh();
    $statement = $connec->prepare("SELECT username FROM users WHERE id =:id");
    $statement->execute(array(':id' => $userid));
    $userName=$statement->fetchColumn();
	return $userName;
}

public function postUsers($parameters)
{
//global connectdb::$conn;
$username=$parameters['username'];
$mobile=$parameters['contact'];
$email=$parameters['email'];
$password=$parameters['p'];

$connec = Doctrine_Manager::getInstance()->getCurrentConnection()->getDBh();
$statement = $connec->prepare("SELECT id FROM users WHERE username =:name");
$statement->execute(array(':name' => $username));
    if( $statement->fetchColumn()) {
     	// row not found, do stuff...

   	 return false;
    } else {
    	// do other stuff...
    
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

public function checkUser($param)
{$connec1 = Doctrine_Manager::getInstance()->getCurrentConnection()->getDBh();
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
    	// do other stuff...
    return false;
    
    }

}
}
?>
