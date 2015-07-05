<?php 

class Additionaldetails_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->helper('chromephp');
	}

	public function postadditionaldetails($data){
		
		//ChromePhp::log($data);
		$json=json_encode($data);
		//print_r($json);
		$url="http://api.100acres.com/index.php/propertydetails/index";
		$handle=curl_init($url);
		curl_setopt($handle, CURLOPT_POST, 1);
		curl_setopt($handle, CURLOPT_POSTFIELDS, $json);
		curl_setopt($handle, CURLOPT_HEADER, 0);
		curl_setopt($handle, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: '.strlen($json)));
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_TIMEOUT, 5);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
		$result = curl_exec($handle);
		//ChromePhp::log($result);
		curl_close($handle);
		return $result;
	}
}

?>