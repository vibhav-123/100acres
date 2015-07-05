<?php
//print_r(array($count,$dataarr));



$noofpages=ceil($tcount/4);

if ($noofpages>1) {
	for ($i=1; $i<=$noofpages; $i ++) { 

	echo "<a href=\"http://www.100acres.com/frontend_dev.php/search/index?page={$i}\" > {$i}</a>" ;
	
} 
}
//$arr[0]=$this->dataarr[0];
//echo $arr[0];
if(is_array($dataarr)){
foreach($dataarr as $key=>$val)
{
		 echo "city        " .($val['city']);
		 echo "i_want_to        " .($val['i_want_to']);

		 echo "</br>";
}
}
else{
	echo "NO result found";
}


echo $tcount;
?>