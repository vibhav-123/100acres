<?php
error_reporting(E_ALL);
include("conn2.php");
//connection 
$db_connect = new UserModel();
$db_connect->saveUserData();
//$db_connect->close_connection();
function _p($data){
	echo "<pre>";
	print_r($data, true);
	echo "</pre>";

}
// define variables and set to empty values
$nameErr = $emailErr = $PErr = $mErr = "";
$Name = $Email = $Mobile = $Password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["Name"])) {
     $nameErr = "Name is required";
   } 
   else {
    $Name = test_input($_POST["Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
   }

   if (empty($_POST["Email"])) {
     $emailErr = "Email is required";
   } 
   else {
     $Email = test_input($_POST["Email"]);
     // check if e-mail address is well-formed
     if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["Mobile"])) {
     $mErr = "Mobile no. is required";
   } else {
     $Mobile = test_input($_POST["Mobile"]);
      if (!preg_match("/^[0-9\_]{7,20}/",$Mobile)) {
      $mErr = "Invalid mobile number"; 
   }

  }
  if (empty($_POST["Password"])) {
     $PErr = "Password is required";
   } else {
     $Password = test_input($_POST["Password"]);
   }
if($nameErr =="" &&  $emailErr =="" && $PErr =="" && $mErr == ""){
header('Location: test123.php?msg=Account Created');

 }   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
