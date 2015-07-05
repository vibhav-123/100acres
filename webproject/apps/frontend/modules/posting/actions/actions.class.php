

/*/**
 * posting actions.
 *
 * @package    PROJECT1
 * @subpackage posting
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
/*class postingActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  /*public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }
}
*/
<?php

/**
 * posting actions.
 *
 * @package    PROJECT1
 * @subpackage posting
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postingActions extends sfActions
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
 public function executePostProperty(sfWebRequest $request)
  {
      $i_am = $request->getParameter('iam');
$i_want_to = $request->getParameter('iwantto');
$type_of_property = $request->getParameter('displayValue');
$city = $request->getParameter('displayValue2');
$address=$request->getParameter('feedback');
$bedrooms = $request->getParameter('displayValue3');
$i_am = $request->getParameter('displayValue3');
$i_am = $request->getParameter('displayValue4');
$i_am = $request->getParameter('displayValue5');
$expected_price=$request->getParameter('price');
//image retrival

$target_dir = $_SERVER["DOCUMENT_ROOT"] . "/images/upload";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
/* Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
*/
/* Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
*/
/*
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
*/
/*
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
*/

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//image retrival done.

//database insertion call.
//$dataInsert= new POSTING();
//$dataInsert->updateTable($i_am, $i_want_to, $type_of_property, $city, $address, $bedrooms, $expected_price);

  }

}