<?php

/**
 * login actions.
 *
 * @package    PROJECT1
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
  {//$this->jyotidgr8=1;
    //$this->forward('default', 'module');
  }
 public function executeLogin_api(sfWebRequest $request)
  {
//$email=$_POST["email"];				
//		$pwrd=$_POST["password"];	

		//$pwrdHash= md5($pwrd);
$ch=curl_init();					
		//$name=$_POST["name"];				
		//$uname=$_POST["uname"];				
		$email=$_POST["email"];				
		$pwrd=$_POST["password"];	

		//$pwrdHash= md5($pwrd);	

			
		$data=array('email'=>$email,'pwd'=>$pwrd);				
		$json_encoded= json_encode($data);				
		$url = 'http://localhost:8080/api/webapi/register/email';	
					
		curl_setopt($ch, CURLOPT_URL,$url);				
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);				
    		curl_setopt($ch, CURLOPT_HEADER, 0);				
		curl_setopt($ch, CURLOPT_POST, true);				
	        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));					
	        curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);					
               	$result = curl_exec($ch);
$array = json_decode($result, TRUE);
      
      $msg=$array['msg'];
      //echo $msg;
      if($msg)
      {
        $name= $array['name'];
      setcookie('usernaam', $name,0,"/","");
     setcookie('email',$email,0,"/","");
    // $this->redirect("login/profile"); 
     $this->redirect("home/index"); 
   }
   else
   { ?>

 <script >
alert("Error: invalid email or password!")
//print 'document.getElementById("password").focus()';
 history.back()
//echo 'document.getElementById("email").focus()';
</script>
//echo "Invalid email or password!!!";
//$this->redirect('login/index');
//$this->load('');
//alert("Error: invalid email or password!"); 
  ; //return false;
  <?php  }
      //if()	
//$email=$request->getParameter('email');
//$password=$request->getParameter('pwrd');
			
//		$data=array('email'=>$request->getParameter('email'),'password'=>$request->getParameter('pwrd'));

//echo $_COOKIE['email'];
//$this->redirect("login/profile");	
//echo $data['email'];
//echo $data['password'];
 /*$this->getUser()->setAttribute('logged_in',$data);*/ 
                                  
//$this->jyotidgr8=1;
    //$this->forward('default', 'module');
  }
 public function executeProfile(sfWebRequest $request)
  {//$this->jyotidgr8=1;
    //$this->forward('default', 'module');

  //$value = $this->getUser()->getAttribute('logged_in',$data);

  }
public function executeFacebook(sfWebRequest $request)
  {//$this->jyotidgr8=1;
    //$this->forward('default', 'module');

  //$value = $this->getUser()->getAttribute('logged_in',$data);

  }
public function executeLogout(sfWebRequest $request)
  {//$this->jyotidgr8=1;
    //$this->forward('default', 'module');
setcookie ("usernaam", "",0,"/");
setcookie ("email", "",0,"/");

  //$value = $this->getUser()->getAttribute('logged_in',$data);

  }
}
?>