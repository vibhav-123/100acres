<?php

/**
 * search actions.
 *
 * @package    mysite
 * @subpackage search
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class searchActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	
  public function executeIndex(sfWebRequest $request)
  {
  }

//Get search results
  public function executeResults(sfWebRequest $request)
  {


	$postParameters=$request->getPostParameters();

	if($postParameters)
	{
		$retrieve_obj=new retrieve();
 		$results=$retrieve_obj->getParam($postParameters);
		
	}
	else
	{
		$pageno = isset( $_GET['page'] ) ? $_GET['page'] : null;
		$searchlog_obj=new searchlog();
		$arr=$searchlog_obj->retSearchParam();
		$solr_obj= new solrHandling(); 
		$results=$solr_obj->query($arr,$pageno);
	}
	if($results)
	{
		foreach($results as $k=>$v)
		{
			if($k=='numFound')
			{$items=$v;
			$pages=ceil($items/4);}
			//var_dump("Item in action ".$items);
		}
		for($p=1;$p<=$pages;$p++)
		{
			$arrPage[]=array($p);
		}
		
		$this->navigation = $results['docs'];
		if($pages!=0)
		$this->arrPage = $arrPage;
	}
	else
	{
		header("Location: http://www.100acres.com/mainSite_dev.php/search/noResult");
		die;	
	}
  }

//No results page
  public function executeNoResult(sfWebRequest $request)
  {
  }
  
//Description of a property
  public function executeDescription(sfWebRequest $request)
  {
	$pid = isset( $_GET['prop'] ) ? $_GET['prop'] : null;
	$prop_obj=new property();
	$desc=$prop_obj->getRecords($pid);
	if($desc)
	{
		$this->desc=$desc;
	}
	
  }

//Get the property id and email id
  public function executeEmail(sfWebRequest $request)
  {
	$pid = isset( $_GET['pid'] ) ? $_GET['pid'] : null;
	$email = isset( $_GET['eid'] ) ? $_GET['eid'] : null;
	$this->email=$email;
	$this->pid=$pid;
  }

//Send email to the owner
  public function executeEmailPosted(sfWebRequest $request)
  {
	$to=$request->getParameter('to');
	$from=$request->getParameter('from');
	$subject=$request->getParameter('subject');
	$message=$request->getParameter('message');
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
	$pid = isset( $_GET['pid'] ) ? $_GET['pid'] : null;
	$this->pid=$pid;
  }
}
