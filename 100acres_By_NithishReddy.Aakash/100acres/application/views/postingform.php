<html>
<head>
<title>Basic Property Details</title>
<script type="text/javascript" src="/public/js/posting_form.js"></script>
<link rel="stylesheet" type="text/css" href="/public/CSS/p.css">
<script type="text/javascript" src="/public/js/postingformvalid.js"></script>
</head>


<body>
	<div id="header">
    <div style="float:left;margin-left:50px;margin-top:10px">100acres.com </div>
    <div style="float:right;position:relative"> 
    <div id="header_home" style="float:left;margin-top:15px;margin-right:100px"><a href="http://www.100acres.com/index.php">Home</a> </div>
      <?php

    //print_r($logged_in);
  if(isset($logged_in) && $logged_in == true)
  {?> 
        <div id="header_user" style="float:left;margin-top:5px;margin-right:50px"><p><?php echo $this->session->userdata['email'];?></p> </div>
        <div style="float:right;margin-top:15px;margin-right:40px"><a href="http://www.100acres.com/index.php/login/logout">Logout</a></div>
    
    
    <?php } 
  else
  {?> <div style="float:right;position:relative">  
        <div style="float:right;margin-top:15px;margin-right:50px"><a href="http://www.100acres.com/index.php">Login</a> </div>
    </div>
  <?php }
  ?>
</div>
  </div>
<div class="main">
			<div style="color:#FF0000" background="#FF0000">
			  <h3>Basic Property Details</h3>
			</div> 

			<form name="myForm" method="post" enctype="multipart/form-data" id="form1">
			

		<div class="pad">
			<div class="left">I am:</div>
			<div class="right" style="margin-right:30px">
			 <input type="radio" name="type" value="owner" checked="checked" >Owner
			<input type="radio" name="type" value="broker">Broker
			<input type="radio" name="type" value="builder">Builder
			</div><br>
		</div>

		<div class="pad">
			<div class="left">I want to:</div>
			<div class="right" style="margin-right:75px">
			 <input type="radio" name="type1" value="sell" checked="checked">Sell
			<input type="radio" name="type1" value="rent">Rent/Lease Out<br>
			</div>
		</div><br>

		<div class="pad">
			<div class="left">Type of Property :</div>
			<div class="right" style="margin-right:50px">
			<select
			            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
			         onChange="df.togglePropertyType(this,  this.value);"  onblur="df.togglePropertyType(this,  this.value);"  name="type2" required='true' id='TypeId' succ='true' autocomplete="off" style="width:auto"; >
						<option selected="selected" value="0" disabled >Select</option>
						
							
						<optgroup value='' class='boldclass' disabled  label='Residential'></optgroup>
							<option value="Residential Apartment" rescom='R' >Residential Apartment </option><option value="Residential Land" rescom='R' >Residential Land </option><option value="Independent House/Villa " rescom='R' >Independent House/Villa </option><option value="Independent/Builder Floor" rescom='R' >Independent/Builder Floor </option><option value="Farm House" rescom='R' >Farm House </option><option value="Studio Apartment " rescom='R' >Studio Apartment </option><option value="Serviced Apartments" rescom='R' >Serviced Apartments </option><option value="Other" rescom='R' >Other </option>
							
						<optgroup value='' class='boldclass'  disabled label='Commercial'></optgroup>
										<option value="Commercial Office/Space " rescom='C'>Commercial Office/Space </option>
										<option value="Commercial Shops" rescom='C'>Commercial Shops </option>
										<option value="Commercial Land/Inst. Land " rescom='C'>Commercial Land/Inst. Land </option>
										<option value="Commercial Showrooms " rescom='C'>Commercial Showrooms </option>
										<option value="Agricultural/Farm Land " rescom='C'>Agricultural/Farm Land </option>
										<option value="Industrial Lands/Plots " rescom='C'>Industrial Lands/Plots </option>
										<option value="Factory" rescom='C'>Factory </option>
										<option value="Ware House" rescom='C'>Ware House </option>
										<option value="Office in IT Park" rescom='C'>Office in IT Park </option>
										<option value="Hotel/Resorts" rescom='C'>Hotel/Resorts </option>
										<option value="Guest-House/Banquet-Halls" rescom='C'>Guest-House/Banquet-Halls </option>
										<option value="Space in Retail Mall" rescom='C'>Space in Retail Mall </option>
										<option value="Office in Business Park" rescom='C'>Office in Business Park </option>
										<option value="Business center" rescom='C'>Business center </option>
										<option value="Manufacturing" rescom='C'>Manufacturing </option>
										<option value="Cold Storage" rescom='C'>Cold Storage </option>
										<option value="Time Share" rescom='C'>Time Share </option>
										<option value="Other" rescom='C'>Other </option>
							
							
						
							

					</select>

					</div>
		</div><br>

		<div class="pad">
					<div class="left">City:</div>
					<div class="right" style="margin-right:185px">
					<select
			            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
			         onChange="df.togglePropertyType(this,  this.value);"  onblur="df.togglePropertyType(this,  this.value);"  name="type3" required='true' id='city' succ='true' autocomplete="off" style="width:auto"; >
						<option selected="selected" value="0" disabled >Select</option>
						
							
					
							<option value="Delhi" >Delhi</option><option value="Mumbai">Mumbai</option><option value="UP" rescom='R' > UP</option><option value="Punjab">Punjab</option><option value="Haryana" >Haryana</option><option value="J&K" >J&K</option>
							<option value="Hyderabad">Hyderabad</option><option value="Pune">Pune</option><option value="Kolkata">Kolkata</option>
					</select> 
					</div>
		</div><br>


		<div class="pad">
					<div>Address: </div><br>
					<div>
					<textarea style="width:380px" id="address" required='true' name="address"></textarea></select><br>
					</div>
		</div>

		<div class="pad">
						<div class="left">Bedrooms:</div>
						<div class="right" style="margin-right:190px">
						<select name="type5" required='true' id='bedroom' succ='true' autocomplete="off" style="width:auto"; >
						<option selected="selected" value="0" disabled >Select</option>
					    <option value="1">1</option>
					    <option value="3">2</option>
					    <option value="2">3</option>
					    <option value="4">4</option>
					    <option value="5">5</option>
					    <option value="6">5+</option>
						</select>
						</div> 
		</div><br>


	<div class="pad">				<div>Expected Price:</div><br>
					<div> 
			 		<label>Crores</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label>Lacs</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label>Thousands</label><br>
			 		<select  id="cr" 
			            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
			         onchange="changetextbox();getSelectedValue(this.value);" onblur="df.togglePropertyType(this,  this.value);"  required='true' name="type6"  succ='true' autocomplete="off" style="width:auto";  >
			      <option selected="selected" value="100" disabled>Select</option>
			      
			        
			            <?php
			            for ($i=0;$i<=99; $i++)
			            {
			            ?>
			             <option value="<?php echo $i;?>"><?php echo $i;?></option>
			            <?php
			             }
			             ?>

			             <option value="99+">99+</option>
			            
			</select> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

			<select id="la" 
			            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
			         onchange="getSelectedValuelacs(this.value)" onblur="df.togglePropertyType(this,  this.value);"  required='true' name="type7" id='lacs' succ='true' autocomplete="off" style="width:auto"; >
			      <option selected="selected" value="100" disabled>Select</option>
			      
			        
			    
			         <?php
			            for ($i=0;$i<=99; $i++)
			            {
			            ?>
			             <option value="<?php echo $i;?>"><?php echo $i;?></option>
			            <?php
			             }
			             ?>
			</select> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select id="th" 
			            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
			         onchange="getSelectedValuethousands(this.value)"  onblur="df.togglePropertyType(this,  this.value);"  required='true' name="type8" id='thousands' succ='true' autocomplete="off" style="width:auto"; >
			      <option selected="selected" value="100" disabled>Select</option>
			      
			        
			    
			       <?php
			            for ($i=0;$i<=99; $i++)
			            {
			            ?>
			             <option value="<?php echo $i;?>"><?php echo $i;?></option>
			            <?php
			             }
			             ?>

			</select> </div>
	</div>
	<br>
	<div class="pad">		<div class="left">Price per unit area:</div><div class="right" style="margin-right:50px"><input type="text" name="type10" required='true' id="ppa"></div>
	</div><br>

	<div class="pad">
			   <div class="left" > Select image to upload:</div><br><br>	
			   <div >
			    <input type="file" name="fileToUpload" id="fileToUpload">
			<!--     <input type="submit" value="Upload Image" name="submit">
			 -->
			
			</div>
		
	</div>
	<div class="pad">
					<div>About Property: </div><br>
					<div>
					<textarea style="width:380px" id="description" required='true' name="description"></textarea></select><br>
					</div>
		</div>
	
	
			<input type="submit" value="Submit"/>

			</form>



</div>
<div id="sellimage" >
	<img src="/public/images/sell.jpg"/>
	<div>
</body>
</html>

