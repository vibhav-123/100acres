<!-- Results UI -->
<?php include_partial('global/header');
include_partial('global/logout');
$user_obj=new users();
?>


<?php

foreach ($navigation as $items): ?>
<div class="search" id="div1">
<div class="inner" id="i1"  >
<?php foreach($items as $k=>$v)
		{
			if($k=='id')
				$pid=$v;
			elseif($k=='bedroom')
				$bhk=$v;
			elseif($k=='uid')
				$username=$user_obj->returnName($v);
			elseif($k=='address')
				$add=$v;
			elseif($k=='city')
				$city=$v;
			elseif($k=='property')
				$prop=$v;
			elseif($k=='price')
				$price=$v;
			elseif($k=='iurl')
				$ur=$v;

		}

 ?>
	   <a style="color:black ;" href="http://www.100acres.com/mainSite_dev.php/search/description?prop=<?php echo $pid ?>">
	   <div style="display:inline-block;vertical-align:top;background-image=url('http://www.100acres.com/images/images.png'); width:200px" >
	   <img name="image" class="top" src="<?php echo $ur?>" width="200px" height="200px">
	   </div>

	   <div style="display:inline-block;">
		<div><?php echo "Property posted by: $username"?></div>
		<div><?php echo "Property Type:  $prop"?></div>
	        <div><?php echo "Bedrooms: $bhk"?></div>
	        <div><?php echo "Address: $add"?></div>
		<div><?php echo "City: $city"?></div>
	        <div><?php echo "Price: $price"?></div>
	   </div>
  </div></a>
</div>

<?php endforeach ?>

<div  class="b15 l600 posAbs" >
<?php foreach($arrPage as $p) {?>
<?php foreach($p as $pp){ ?>
 <button class="ml5" type="button" font-size="100px" ><a style="color:black;" href="http://www.100acres.com/mainSite_dev.php/search/results?page=<?php echo $pp ?>"><?php echo $pp ?></button>

<?php }?>
<?php }?>
</div>
