<?php 

class validate{

public function validateRegister($parameters)
{
//global connectdb::$conn;
$username=$parameters['username'];
$emp_password=$parameters['p'];
$emp_cpassword=$parameters['pwd2'];
$email=$parameters['email'];
$contact=$parameters['contact'];

//$errorMsg;

//if(isset($_POST['Register'])){

$emp_name=trim($username);
$emp_email=trim($email);
$emp_contact=trim($contact);
//$emp_password=$_POST["p"];
//$emp_cpassword=$_POST["pwd2"];

//$errorMsg="true";

if($emp_name =="") {
  $errorMsg=  "error : You did not enter a name.";
  $code= "1" ;
  return $errorMsg;
}

elseif($emp_password == "") {
  $errorMsg=  "error : Please enter password.";
  $code= "2";
  return $errorMsg;
}

elseif(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/", $emp_password)){
  $errorMsg= 'error : You did not enter a valid password.';
  $code= "2";
  return $errorMsg;
}

elseif($emp_password != $emp_cpassword)
{
$errorMsg= "Error: Passwords do not match.";
$code = "2.1";
  return $errorMsg;
}

//check if email field is empty
elseif($emp_email == ""){
  $errorMsg=  "error : You did not enter a email.";
  $code= "3";
  return $errorMsg;
} //check for valid email 
  elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emp_email)){
  $errorMsg= 'error : You did not enter a valid email.';
  $code= "3";
  return $errorMsg;
}

elseif(strlen($emp_contact)<10){
  $errorMsg=  "error : Contact should be ten digits.";
  $code= "4";
  return $errorMsg;
}

else{
  $errorMsg= "true";
  return $errorMsg;
  //final code will execute here
}
 
}
}
?>
