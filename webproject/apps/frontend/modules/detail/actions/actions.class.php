<?php

/**
 * detail actions.
 *
 * @package    PROJECT1
 * @subpackage detail
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class detailActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   
$email=$request->getParameter("email");
$dbdetail= new DETAIL();
     //$dataarr = $dataInsert->searchTable($city, $minprice, $maxprice, $bedrooms);
  $this->dataarr = $dbdetail->detail($email);






  }
}
