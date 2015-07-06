<html>

<head>
<title>Register Property</title>
<link rel="stylesheet" type="text/css" href="http://100acres.com/css/styles_register_property.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div id="header">
	<div id="headerbackground"></div>
	<?php 
	if($this->session->has_userdata('useremail')){
		echo '<a href="/user/logout"><div class="loginbtn">Logout</div></a>';
		echo '<a href="/home"><div class="loginbtn">Home</div></a>';
	}
	?>
	
	<div id="logo">
		<figure>
		<img src="http://100acres.com/images/newlogo.png" alt="99acres logo">
		<figcaption>India's No:1 Property Portal</figcaption>
		</figure>
	</div>
	<div class="clear"></div>
</div>
<div id="container">
	<div id="formdiv">
	<?php 
	$attr=array('id'=>'postform');
	echo form_open_multipart('registerproperty/register',$attr);
	 ?>
	
	<h2>Basic Property Details</h2>
	<?php echo form_error('typeofowner'); ?>

	<div class="radio"><label for="typeofowner">I am:</label>
		<span class="inputfields1">
		<input type="radio" name="typeofowner" value="owner" <?php echo  set_radio('typeofowner', 'owner', TRUE);?>>Owner 
		<input type="radio" name="typeofowner" value="broker" <?php echo  set_radio('typeofowner', 'broker');?>>Broker 
		<input type="radio" name="typeofowner" value="builder" <?php echo  set_radio('typeofowner', 'builder');?>>Builder 
		</span>
	</div>

	<?php echo form_error('intention'); ?>
	<div class="radio"><label for="typeofintention">I want to:</label>
		<span class="inputfields2">
		<input type="radio" name="intention" value="buy" <?php echo  set_radio('intention', 'sell',TRUE);?>>Sell 
		<input type="radio" name="intention" value="rent" <?php echo  set_radio('typeofowner', 'rent');?>>Rent/Leaseout 
		</span>
	</div>
	<?php echo form_error('typeofproperty'); ?>
	<div><label for="typeofproperty">Type of Property:</label>
	
		<span class="inputfields3">
	<select name="typeofproperty">
		
		<option value="independent" <?php echo  set_select('typeofproperty', 'independent'); ?>>Independent House</option>
		<option value="apartment" <?php echo  set_select('typeofproperty', 'apartment'); ?>>Residential Apartment</option>
		<option value="flat" <?php echo  set_select('typeofproperty', 'flat'); ?>>Colony Flat</option>
		<option value="normal" <?php echo  set_select('typeofproperty', 'normal'); ?>>Resident House</option>
		
	</select>
	</span>
	</div>
	<?php echo form_error('city'); ?>
	<div><label for="city">City:</label>
	<span class="inputfields4">
	<select name="city">
		<option value="chennai" <?php echo  set_select('city', 'chennai'); ?>>Chennai</option>
		<option value="mumbai" <?php echo  set_select('city', 'mumbai'); ?>>Mumbai</option>
		<option value="bangalore" <?php echo  set_select('city', 'bangalore'); ?>>Bangalore</option>
		<option value="hyderabad" <?php echo  set_select('city', 'hyderabad'); ?>>Hyderabad</option>
		<option value="delhi" <?php echo  set_select('city', 'delhi'); ?>>Delhi</option>
	</select>
	</span>
	</div>
	<?php echo form_error('address'); ?>
	<div><label for="address">Address:</label>
		<span class="inputfields5">
		<input type="text" size="20" name="address" <?php echo set_value('address'); ?>>
	</span >
	</div>
	<div><label for="noofbeds">Number of Beds:</label>
	<?php echo form_error('noofbeds'); ?>
	<span class="inputfields6">
	<select name="noofbeds">
		<option value="1BHK" <?php echo  set_select('noofbeds', "1BHK"); ?>>1 BHK</option>
		<option value="2BHK" <?php echo  set_select('noofbeds', "2BHK"); ?>>2 BHK</option>
		<option value="3BHK" <?php echo  set_select('noofbeds', "3BHK"); ?>>3 BHK</option>
		<option value="4BHK" <?php echo  set_select('noofbeds', "4BHK"); ?>>4 BHK</option>
	</select>
	</span >
	</div>
	<?php echo form_error('price'); ?>
	<div><label for="price">Expected Price:</label>
		<span class="inputfields7">
		<input type="number" name="price" <?php echo set_value('price'); ?>>
	</span>
	</div>
	<?php if(isset($error)){echo $error;}?>
	<div><label for="uploadfile">Upload Photos</label>
		<span class="inputfields8">
		<input type="file" name="uploadfile" size="20">
		</span>
	</div>

	<div class ="submit_button"><input type="submit" name="submit" value="Register Now"></div>
	</form>
</div>
</div>
<div class="clear"></div>
</body>
</html>