<?php
class solrHandling
{
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
//var_dump($str);die;
	$st=($pageno-1)*4;
	$u = "localhost:8983/solr/select";
        $p = "q=*:*&wt=phps&".$str;
        $p.= "&start=".$st."&rows=4";
	$sendRequest_obj=new SendRequest();
//echo $u."?".$p;die;
        $o = $sendRequest_obj->sendCurlPostRequest($u,$p);
        $o = unserialize($o);
	return $o["response"];
	}
}

?>

