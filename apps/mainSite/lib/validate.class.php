<?php 
/**
* validate
*
* Server side validation of the user registration
*/
class validate{
/**
*
* @param: User details while registration
* returns true if valid user data
*/
public function validateRegister($parameters)
{
$username=$parameters['username'];
$emp_password=$parameters['p'];
$emp_cpassword=$parameters['pwd2'];
$email=$parameters['email'];
$contact=$parameters['contact'];

$emp_name=trim($username);
$emp_email=trim($email);
$emp_contact=trim($contact);

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

elseif($emp_email == ""){
  $errorMsg=  "error : You did not enter a email.";
  $code= "3";
  return $errorMsg;
} 
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
}
 
}
}
?>
