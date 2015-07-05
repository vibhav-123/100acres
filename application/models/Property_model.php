<?php 

class Property_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function property_details($propertyid){
		$url="http://api.100acres.com/index.php/propertydetails/index?pid=".$propertyid;
		//error_log($url);
		//error_log("http://hemanth");
		$handle=curl_init($url);
		curl_setopt($handle, CURLOPT_HEADER, 0);
		curl_setopt($handle, CURLOPT_TIMEOUT, 5);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);

		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		$jsonstring=curl_exec($handle);
		//echo "Output from webservice ".$jsonstring;die();	
		//$row=json_decode($jsonstring,true);
		
		//ChromePhp::log('Hello   '.print_r($row));
		curl_close($handle);
		$row=json_decode($jsonstring,true);
		//ChromePhp::log($row);*/
		return $row;
	}
}

?>