<?php

/**
 * form actions.
 *
 * @package    mysite
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }

//Submits property
 public function executeSubmit(sfWebRequest $request)
  {
	$postParameters=$request->getPostParameters();
	$file=@$request->getFiles('file_upload');
	if($file['name'])
	{
		$img=new imagecheck();
		$img->check($file);
	}
	$prop=new property();	
	if($postParameters)
	$prop->postRecords($postParameters,$file);
	header("Location: http://www.100acres.com/mainSite_dev.php/form/posted");
	die;
  }
 
//post success
public function executePosted(sfWebRequest $request)
  {
	
  }
}
