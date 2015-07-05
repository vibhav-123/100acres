<?php
class cookie1
{
				public function retId()
				{
				$cookie_name1 = 'authorization';
				if(!isset($_COOKIE[$cookie_name1])) {
				  //print 'Cookie with name "' . $cookie_name1 . '" does not exist...';
				} else {
				  $cookie_val1=$_COOKIE[$cookie_name1];
				}
				$cookie_name2 ='e_authorization';
				if(!isset($_COOKIE[$cookie_name2])) {
				  //print 'Cookie with name "' . $cookie_name2 . '" does not exist...';
				} else {
				  $cookie_val2=$_COOKIE[$cookie_name2];
				}
				$en_val = @crypt($cookie_val1,'$1$str$');
				if(@$cookie_val2==$en_val)
				{
					return $cookie_val1;
					
				}
					return null;
				}

}
?>

