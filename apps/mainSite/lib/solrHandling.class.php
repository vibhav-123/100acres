<?php
/**
* solrHandling
*
* @param: search parameters and page number
*/
class solrHandling
{
	//executes the query and return the result
	public function query($array,$pageno)
	{
		foreach($array as $k=>$v)
		{
			if($k=='city')
				$arr1[] = "fq=city:($v)";
			elseif($k=='bedroom')
				$arr1[] = "fq=bedroom:($v)";
			elseif($k=='min_price')
				$arr1[] = "fq=price:[$v $array[max_price]]";				
		}
	if(is_array($arr1))
	$str = implode("&",$arr1);
	$st=($pageno-1)*4;
	$u = "localhost:8983/solr/select";
        $p = "q=*:*&wt=phps&sort=id desc&".$str;
        $p.= "&start=".$st."&rows=4";
	$sendRequest_obj=new SendRequest();
        $o = $sendRequest_obj->sendCurlPostRequest($u,$p);
        $o = unserialize($o);
	if($o["response"]["numFound"]!=0)
	return $o["response"];
	else
	return false;
	}
}

?>

