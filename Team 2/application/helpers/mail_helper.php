<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function sendMailToUser($to,$userID,$hash,$task)
{
	$message="";
	if($task=="verify")
		$message=" verify your email id";
	else 
		$message=" reset your password";
	if ( mail( $to, 'Welcome to 100Acres', "Welcome to 100Acres.com. Please follow the link to". $message." : \r\n" ."http://www.100acres.com/index.php/user/".$task."/".$hash."/".$userID) ) {
		echo "Mail sent successfully!<br>\n";
	} 
	else {
    	echo "Mail sending failed :( \n";
    }
}
    
?>