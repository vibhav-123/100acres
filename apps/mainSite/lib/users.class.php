<?php 

class users{

public function postUsers($parameters)
{
//global connectdb::$conn;
$username=$parameters['username'];
$mobile=$parameters['contact'];
$email=$parameters['email'];
$password=$parameters['p'];

$connec = Doctrine_Manager::connection();

$sql="INSERT INTO users(mobile,username,email,password) VALUES (:m,:usr,:eml,:pswd)";
$q=$connec->prepare($sql);
$q->execute(array(':m'=>$mobile,
		':usr'=>$username,
		':eml'=>$email,
		':pswd'=>$password,
		));
}

public function checkUser($param)
{$connec = Doctrine_Manager::connection();
	$username=$param['name'];
	$password=$param['p'];
	$statement = $connec->prepare("select password from users where username = :name");
	$statement->execute(array(':name' => $username));
	$pwd = $statement->fetchColumn();
	if($pwd==$password)
	return true;
	else return false;
		
}
}
?>
