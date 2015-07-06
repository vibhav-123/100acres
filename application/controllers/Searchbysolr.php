<?php 

class Searchbysolr extends CI_Controller{
	public function  __construct(){
		parent::__construct();
		$this->load->model('searchbysolrmodel');
	}

	public function index(){
		$this->load->view('searchbysolrview');
	}
	//function to call when searching is done from the search page
	public function solrsearch($start=0){
		$searchstring=$_GET['searchstring'];
		$strarr=str_word_count($searchstring,1);
		$url="http://localhost:8983/solr/99acres/select?start=".$start."&rows=4&wt=json&q=";
		
		foreach($strarr as $query){
			$url.=$query."+";
		}
		//echo $url;
		error_log($url);
		$solrresp=$this->searchbysolrmodel->searchsolr($url);
		if($start!=0){
			$properties=$solrresp['docs'];
			foreach($properties as $property){
				echo '<a href="/property/details/'.$property['id'].'" target="_blank">';
				echo '<div class="searchresult">';
				$imageurl='/uploads/'.$property['imageurl'];
				echo "<img src=$imageurl alt='search result image' />";
				echo "<span>Price: {$property['price']}</span>";
				echo "<span>BHK: {$property['bedroom']}</span>";
				echo "<span>Property Type: {$property['typeofproperty']}</span>";
				echo "<span>Provider: {$property['typeofowner']}</span>";
				echo "<span>City: {$property['city']}</span>";
				echo '<span class="text-content"><span>Click for More Details</span></span>';
				echo '</div></a>';
			}
			return;
		}
		$data['noofresults']=$solrresp['numFound'];
		$data['properties']=$solrresp['docs'];
		$this->load->view('solrsearchresults',$data);
	}
	//filter results based on constraints in the result page
	public function filterresults($start=0){
		$url="http://localhost:8983/solr/99acres/select?start=".$start."&rows=4&wt=json&q=";
		foreach($_GET as $key => $value){
			if($key != 'sortby')
				$url.="%2B".$key."%3A(".implode("+OR+", $value).")+";
		}
		$data['sortby']='relevance';
		if(isset($_GET['sortby'])){
			$sort=$_GET['sortby'];
			if($sort=='pricelow'){
				$data['sortby']='pricelow';
				$url.="&sort=price+asc";
			}
			if($sort=='pricehigh'){
				$data['sortby']='pricehigh';
				$url.="&sort=price+desc";
			}
		}
		//echo $url;
		foreach($_GET as $key => $value){
			$data[$key]=$value;
		}
		$solrresp=$this->searchbysolrmodel->searchsolr($url);
		if($start!=0){
			$properties=$solrresp['docs'];
			foreach($properties as $property){
				echo '<a href="/property/details/'.$property['id'].'" target="_blank">';
				echo '<div class="searchresult">';
				$imageurl='/uploads/'.$property['imageurl'];
				echo "<img src=$imageurl alt='search result image' />";
				echo "<span>Price: {$property['price']}</span>";
				echo "<span>BHK: {$property['bedroom']}</span>";
				echo "<span>Property Type: {$property['typeofproperty']}</span>";
				echo "<span>Provider: {$property['typeofowner']}</span>";
				echo "<span>City: {$property['city']}</span>";
				echo '<span class="text-content"><span>Click for More Details</span></span>';
				echo '</div></a>';
			}
			return;
		}
		$data['noofresults']=$solrresp['numFound'];
		$data['properties']=$solrresp['docs'];
		$this->load->view('solrsearchresults',$data);
	}
	
}

?>