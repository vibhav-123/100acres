<?php 

class connectdb{

public static $conn=null;
private $servername = "localhost";
private $username = "root";
private $password = "dynamite";
private $dbname = "acres100";
public function __construct()
	{

try {
    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // use exec() because no results are returned
   // echo "Database connected";
	//die();
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}

public function getRecords($limit)
{
}
}
?>
