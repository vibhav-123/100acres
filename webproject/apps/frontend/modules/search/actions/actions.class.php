<?php

/**
 * search actions.
 *
 * @package    PROJECT1
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
    //$this->forward('default', 'module');

    $city = $request->getParameter('Keywords');
    $minprice = $request->getParameter('MinPrize');
    $maxprice = $request->getParameter('Maxprize');
    $bedrooms = $request->getParameter('Bedrooms');
    $page=$request->getParameter("page")?$request->getParameter("page"):1;
    //$page = !isset($_GET['page'])?(int)$_GET['page']:1;
    //$echo $page
   
    //database search call.
     $dbSearchObj= new SEARCH();
     //$dataarr = $dataInsert->searchTable($city, $minprice, $maxprice, $bedrooms);
  list($this->tcount,$this->dataarr) = $dbSearchObj->search($city, $minprice, $maxprice, $bedrooms,$page);
  }
public function executeShow(sfWebRequest $request)
  {
     
  }
 public function executeDetail(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }
}
