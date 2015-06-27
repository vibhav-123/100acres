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
//    $this->forward('default', 'module');
//	$postParameters=$request->getPostParameters();
//	$prop=new property();	
//	if($postParameters)
//	$prop->postRecords($postParameters);
  }

  public function executeSubmit(sfWebRequest $request)
  {
//    $this->forward('default', 'module');
	$postParameters=$request->getPostParameters();
	$prop=new property();	
	if($postParameters)
	$prop->postRecords($postParameters);
  }
}
