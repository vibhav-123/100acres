<?php 

class Searchbysolrmodel extends CI_Model{
	
	public function searchsolr($url){
		$handle=curl_init($url);
		curl_setopt($handle, CURLOPT_HEADER, 0);
		curl_setopt($handle, CURLOPT_TIMEOUT, 10);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 10);

		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		$jsonstring=curl_exec($handle);
		$solrresp=json_decode($jsonstring,true);
		//print_r($solrresp);
		$solrresp=$solrresp['response'];
		return $solrresp;
	}
}

?>