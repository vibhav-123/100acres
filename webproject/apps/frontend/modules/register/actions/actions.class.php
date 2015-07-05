<?php

/**
 * register actions.
 *
 * @package    PROJECT1
 * @subpackage register
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class registerActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
	 $this->name=$request->getParameter("name");
   $this->mobile=$request->getParameter("mobile");  
   if($request->getAttribute("email"))
     { $this->err=1;}
     // echo $this->err;}
   else
   {
    
    $this->err=0;
   //echo $this->err;
   }
    //$this->forward('default', 'module');
  }
public function executeHello(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }
public function executeWebservice(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
 $ch=curl_init();					
		$name=$request->getParameter('name');				
		$mobile=$request->getParameter('mobile');				
		$email=$request->getParameter('email');				
		$pwrd=$request->getParameter('password');	
		//echo "$name $uname $email $pwrd";
	
		//$pwrdHash= md5($pwrd);	

			
		$data=array('name'=>$name,'mobile'=>$mobile,'email'=>$email,'pwd'=>$pwrd);				
		$json_encoded= json_encode($data);				
		$url = 'http://localhost:8080/api/webapi/register/price/';	
					
		curl_setopt($ch, CURLOPT_URL,$url);				
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);				
    		curl_setopt($ch, CURLOPT_HEADER, 0);				
		curl_setopt($ch, CURLOPT_POST, true);				
	        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type: application/json'));					
	        curl_setopt($ch,CURLOPT_POSTFIELDS, $json_encoded);					
               $result = curl_exec($ch);
  //header("Location: http://www.100acres.com/frontend_dev.php/");
$array = json_decode($result, TRUE);
      $name1= $array['name'];
//echo $name;
      //echo "passis". $array['pwd']";
       $msg=$array['msg'];
      //echo $msg;
     if($msg)
    {    $name= $array['name'];
      setcookie('usernaam', $name,0,"/","");
     setcookie('email',$email,0,"/","");
     //$thisis->redirect('http://www.100acres.com/frontend_dev.php/register/profile
     $this->redirect('home/index');}
    // if(false)
     else
    {  
      $request->setAttribute("email",1);
      $this->forward("register","index");
    }
  //dosomething(); }
?>

 <!--<script >
function dosomething()
{alert("Error: Already registered email")
//print 'document.getElementById("password").focus()';
 history.back()}
//echo 'document.getElementById("email").focus()';
</script>-->

  <?php  
//setcookie("usernaam", $name);
//echo $_COOKIE["usernaam"];



  }

public function executeProfile(sfWebRequest $request)
  {//$this->jyotidgr8=1;
    //$this->forward('default', 'module');

  //$value = $this->getUser()->getAttribute('logged_in',$data);

  }
}
