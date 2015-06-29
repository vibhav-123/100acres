<?php
/**
 * login actions.
 *
 * @package    mysite
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
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
    //$this->forward('default', 'module');
  }

public function executeLog(sfWebRequest $request)
  {
   // $this->forward('default', 'module');
	if(($request->getMethod())=="POST")
	{
		$postParameters=$request->getPostParameters();
		$usr=new users();
		if($usr->checkUser($postParameters))
		{
			header("Location: http://www.100acres.com/mainSite_dev.php/home"); /* Redirect browser */
			$result="You have successfully logged in";
			exit();
		}
		else
		{
			$result="Invalid username or password";
		}
		
	}
	else $result="Error, invalid method in form";
	
	$response = json_encode($result);
 	//print_r($response);
	echo "<script type='text/javascript'>alert('$response');</script>";

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
			$prop->postUsers($postParameters);
			$result="You have been successfully registered.";
			echo "registration successful\n";
			header("Location: http://www.100acres.com/mainSite_dev.php/home");
			exit("bye");
			}
		else{
		$result= "Server side validation failed. $err";
		$response = json_encode($result);
	         echo "<script type='text/javascript'>alert('$response');</script>";}

   	 }
	 
 }
}
?>
