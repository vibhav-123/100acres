<!-- Description page UI -->
<?php include_partial('global/header');?>

  <div class="inner_desc" id="i1"  >
  <?php foreach($desc as $k=>$v)
		{
			if($k=='iwantto')
				$iwantto=$v;
			elseif($k=='id')
				$pid=$v;
			elseif($k=='bedroom')
				$bhk=$v;
			elseif($k=='username')
				$username=$v;
			elseif($k=='iam')
				$obb=$v;
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
			elseif($k=='description')
				$description=$v;
			elseif($k=='email')
				$email=$v;
			elseif($k=='mobile')
				$mobile=$v;

		}

 ?>
	   <div style="display:inline-block;vertical-align:top;background-image=url('http://www.100acres.com/images/images.png'); width:560px" >
	   <img name="image" class="top" src="<?php echo $ur?>" width="500px" height="420px">
	   </div>

	   <div style="display:inline-block;margin-top:15px">
	        <div><?php echo "PROPERTY DETAILS  ::"?></div><br>
		<div><?php echo "Property Posted By: $username"?></div>
		<div><?php echo "Property Type:  $prop"?></div>
		<div><?php echo "Property Is For: $iwantto"?></div>
	        <div><?php echo "Bedrooms: $bhk"?></div>
	        <div><?php echo "Address: $add"?></div>
		<div><?php echo "City: $city"?></div>
		<div><?php echo "Add posted by: $obb"?></div>
	        <div><?php echo "Price: $price"?></div>
		<div style="width:320px"><?php echo "Other Details: $description"?></div>
		<br><br><br>
	        <div><?php echo "OWNER DETAILS  ::"?></div><br>
		<div><?php echo "Name: $username"?></div>
	        <div><?php echo "Email: $email"?></div>
	        <div><?php echo "Mobile No.: $mobile"?></div><br>
		
		<button type="button" value="email-button"><a style="color:black;" href="http://www.100acres.com/mainSite_dev.php/search/email?eid=<?php echo $email ?>&pid=<?php echo $pid ?>">Send an email to owner</button>
		</a>

	   </div>
  </div>

