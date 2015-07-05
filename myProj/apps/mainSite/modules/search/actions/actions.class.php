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
   // $this->forward('default', 'module');
  }
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
//print_r($results);die;
		
	}
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
		$this->arrPage = @$arrPage;
	
  }
}
