<?php
/**
 * login actions.
 *
 * @package	mysite
 * @subpackage login
 * @author 	Your name here
 * @version	SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {	
	$uri = $request->getAttribute('Uri');
	$this->act=$uri;
  }

public function executeLog(sfWebRequest $request)
  {
   // $this->forward('default', 'module');

    
   	 $postParameters=$request->getPostParameters();
   	 $usr=new users();
   	 if($usr->checkUser($postParameters))
   	 {
		$user = $request->getParameter('name');
		$act = $request->getParameter('act');
		$pass = $request->getParameter('p');
	
		$uid=$usr->returnId($user);
		$encrypted_uid= crypt($uid,'$1$str$');

		if( $uid && $encrypted_uid ) {

			setcookie("authorization",$uid, time()+3600,"/");
			setcookie("e_authorization",$encrypted_uid,time() + (86400 * 30), "/");
			/*if($act=="http://www.100acres.com/mainSite_dev.php/form")
			header("Location: http://www.100acres.com/mainSite_dev.php/form"); 
			else
			header("Location: http://www.100acres.com/mainSite_dev.php/home"); */
			
		}
		
   		 $result=1;
		print_r($result);
   		 
   	 }
   	 else
   	 {
   		 $result=0;print_r($result);
   	 }
   	 
   
  }



  public function executeRegister(sfWebRequest $request)
  {

	
  	  $postParameters=$request->getPostParameters();
  	  $validate=new validate();
  	  if($postParameters)
  	  {
   	 $err=$validate->validateRegister($postParameters);
		  if($err=="true")
   		 {
   		 $prop=new users();    
   		 if($prop->postUsers($postParameters)){
   			 $result="You have been successfully registered.";
   			 //echo "registration successful\n";
   			 header("Location: http://www.100acres.com/mainSite_dev.php/home");
   			 echo "<script type='text/javascript'>alert('$result');</script>";
			 exit();
   		 }
   		 else {
   			 
   			 echo "<script type='text/javascript'>alert('This username already exists. Please choose a different one.');</script>";
   		 }
   		 }
   	 else{
   	 $result= "Server side validation failed. $err";
   	 $response = json_encode($result);
         	echo "<script type='text/javascript'>alert('$response');</script>";}

  	  }
    
 }
public function executeLogout(sfWebRequest $request)
  {
	unset($_COOKIE['authorization']);
	setcookie('authorization','',time()-3600,'/');
	unset($_COOKIE['e_authorization']);
	setcookie('e_authorization','',time()-3600,'/');
  }




}
?>

