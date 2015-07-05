
<html>
<head>


</head>


<body id="body">
<?php	
$i=0;
foreach($dataarr as $key=>$val)
{
		/* echo "city        " .($val['city']);
		 echo "i_want_to        " .($val['i_want_to']);

		 echo "</br>";
		 */

		 $city[$i]=$val['city'];
		 $proptype[$i]=$val['type_of_property'];
		 $add[$i]=$val['address'];
		 $availfor[$i]=$val['i_want_to'];
		 $email[$i]=$val['email'];
		 $i ++;

}?>

	<form action="http://www.100acres.com/frontend_dev.php/search/index" method="POST">
<div id="main">
	<div id="header">
	 	<div style="float:left;margin-left:10px;margin-top:10px">100acres.com </div>
		<div style="float:right;position:relative">	 
 			<div style="float:left;margin-right:100px;margin-top:15px;"><a href="http://www.100acres.com/frontend_dev.php/login/index">Sell/rent property</a> </div>
	  		<div style="float:right;margin-top:15px;margin-right:10px"><a href="http://www.100acres.com/frontend_dev.php/login/index">Login</a> </div>
		</div>
	</div>

<!--   Search page  -->	
<div id="searchnew">
	<div id="searchnew1">
		<div id="place">
			<div><font color="white">Place</font></div>
			<div style="position:relative;width:100px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="Noida">Noida</option>
   <option value="Faridabad">Faridabad</option>
   <option value="Gurgaon">Gurgaon</option>
</select>
<input name="Keywords" placeholder="Keywords" id="displayValue" style="position:absolute;top:0px;left:0px;width:83px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
		</div>
		
			<div id="price">
				<div ><font color="white">Min Price</font></div>

				<div style="position:relative;width:100px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue2').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="10000">10000</option>
   <option value="00000">100000</option>
   <option value="1000000">1000000</option>
</select>
<input name="MinPrize" placeholder="MinPrize" id="displayValue2" style="position:absolute;top:0px;left:0px;width:83px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
			</div>
		
		<div id="price">
			<div><font color="white">Max Price</font></div>	
			<div style="position:relative;width:100px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue3').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="10000">10000</option>
   <option value="00000">100000</option>
   <option value="1000000">1000000</option>
</select>
<input name="Maxprize" placeholder="Maxprize" id="displayValue3" style="position:absolute;top:0px;left:0px;width:83px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
		</div>
		
		<div id="price">
			<div><font color="white">Bedroom</font>
			</div>
			
			<div style="position:relative;width:100px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:100px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue4').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
</select>
<input name="Bedrooms" placeholder="Bedrooms" id="displayValue4" style="position:absolute;top:0px;left:0px;width:83px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
		</div>
		
	</div>

	<div style="float:left;margin-top:10px;margin-left:250px;"> 
		<div style="float:left;margin-left:250px">
			
		</div>
		
		<div style="float:left;margin-left:130px">
			<button type="submit" >Search</button>
		</div>
	</div>
</div>


<!--   image and description  -->



<div id="first_img">
<img src="http://www.100acres.com/simg/image.jpeg" style="height:150px;width:320px"/>

		    <h4>Location:  <?php echo $city[0];?> <h4>
			<h4>Property:  <?php echo $proptype[0];?> </h1> 
			<h4>Available For:  <?php echo $availfor[0];?></h4> 
			<h4>Address:  <?php echo $add[0];?> </h4>
			<?php echo "<a href=\"http://www.100acres.com/frontend_dev.php/detail/index?email={$email[0]}\" >Description</a>" ;?>
	

</div>
<div id="second_img">

<img src="http://www.100acres.com/simg/image.jpeg" style="height:150px;width:320px"/>
			<h4>Location:  <?php echo $city[1];?> </h4> 
			<h4>Property:  <?php echo $proptype[1];?></h4> 
			<h4>Available For:  <?php echo $availfor[1];?></h4> 
			<h4>Address:  <?php echo $add[1];?> </h4>
			<?php echo "<a href=\"http://www.100acres.com/frontend_dev.php/detail/index?email={$email[1]}\" >Description</a>" ;?>
</div>


<div id="third_img">
<img src="http://www.100acres.com/simg/image.jpeg" style="height:150px;width:320px"/>
	        <h4>Location:  <?php echo $city[2];?></h4> 
			<h4>Property:  <?php echo $proptype[2];?></h4> 
			<h4>Available For:  <?php echo $availfor[2];?></h4> 
			<h4>Address:  <?php echo $add[2];?> </h4>
			<?php echo "<a href=\"http://www.100acres.com/frontend_dev.php/detail/index?email={$email[2]}\" >Description</a>" ;?>
	
</div>


<div id="forth_img">
<img src="http://www.100acres.com/simg/image.jpeg" style="height:150px;width:320px"/>

			<h4>Location:  <?php echo $city[3];?></h4> 
			<h4>Property:  <?php echo $proptype[3];?></h4> 
			<h4>Available For:  <?php echo $availfor[3];?></h4> 
			<h4>Address:  <?php echo $add[3];?> </h4>
			<?php echo "<a href=\"http://www.100acres.com/frontend_dev.php/detail/index?email={$email[3]}\" >Description</a>" ;?>
		
</div>	

</form>

<div align="center">
<?php

$noofpages=ceil($tcount/4);

if ($noofpages>1) {
	for ($i=1; $i<=$noofpages; $i ++) { 

	echo "<a href=\"http://www.100acres.com/frontend_dev.php/search/index?page={$i}\"  target=\"_blank\" > {$i}</a>" ;
	echo "&nbsp";
	echo "&nbsp";
	
} 
}
//$arr[0]=$this->dataarr[0];
//echo $arr[0];


echo "</br>";


echo "Total " .$tcount. "Results Found";
?>
</div>
</body>

</html>
