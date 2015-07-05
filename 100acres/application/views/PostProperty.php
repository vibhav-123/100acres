<!DOCTYPE html>
<html>
<head>
<title>Post Property</title>
<?php include "path.php"; ?>
<script type="text/javascript" src="<?php echo $js; ?>jquery-1.11.3.min.js"></script>
<script  src="<?php echo $js; ?>login_register.js"></script>
<script  src="<?php echo $js; ?>post_property.js"></script>
<script  src="<?php echo $js; ?>fb.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>



<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="226160898258-2k38u6bu87e946on8ss1tajm452c02ou.apps.googleusercontent.com">


<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_prop.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_form_button.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_header.css">
</head>
<body style="background-image: url('<?php echo $image; ?>t1.jpg'); background-size:cover; " >

<!-- FADER -->
<!-- FADER -->
<!-- FADER -->
<div style="background-color: black;z-index:2; top:0px; opacity:0.8; width: 100%; height: 100%;position: absolute; display: none;" id="fader">
</div>


<!-- FADER ENDS-->
		
<!-- LOGIN/REGISTER DIV -->
<!-- LOGIN/REGISTER DIV -->
<!-- LOGIN/REGISTER DIV -->


<div id="loginreg1" style="opacity:0.8; background-color:#007dc1;z-index:3; display: none;margin-top:20%; position: absolute;width:69%;height: 33% ;margin-left: 17%">
</div>
<div id="loginreg2"  style="display: none;z-index: 4 ; box-shadow:0px 0px 10px 5px white;margin-top:20%; position: absolute;width:69%;height: 33% ;margin-left: 17%">
      <div>
           <button  id="closee" onclick="hideLogin1();" style="size:15px;box-shadow:0px 0px 10px 5px white;border-radius:100px ;background-color:#FFBF00 ; color: white;left:98%;top:-10px; position:absolute; border:1px solid; font-size: large;" ><b>
                X</b>
           </button>
      </div>
      <div id="Sign-Up" style="width: 50%;height: 100%;float: left;color: white;text-shadow: white;" >
            <fieldset style="width:95%;">
                <legend style="font-size: x-large;text-shadow: 1px 1px black;color: #FFBF00"><b>Register</b></legend>
                <form>
                <table border="0">
                    <tr>
						<td><b>Name</b></td>
                        <td> <input type="text" name="name" id="rname"></td>
                        <td id="s1" style="color: red;font-size:small;"></td>
                    </tr>
                    <tr>
						<td><b>Email</b></td>
                        <td> <input type="text" name="email" id="remail"></td>
                        <td id="s2" style="color: red;font-size:small;"></td>
                    </tr>
                    <tr>
						<td><b>Username</b></td>
                        <td> <input type="text" name="user" id="ruser"></td>
                        <td id="s3" style="color: red;font-size:small;"></td>
                    </tr>
                    <tr> <td>
                    	<b>Password</b></td>
                        <td> <input type="password" name="pass" id="rpass"></td>
                        <td id="s4" style="color: red;font-size:small;"></td>
                    </tr>
                    <tr> <td>
                    	<b>Confirm Password </b></td>
                        <td><input type="password" name="cpass" id="rcpass"></td>
                        <td id="s5" style="color: red;font-size:small;"></td>
                    </tr>
					<tr>
                        <td></td>
                        <td align="center"><input id="button1" class="myButton" type="button" onclick="validatereg()" value="Sign-Up"></td>
                        <td></td>
                    </tr>
                </table>
                </form>
            </fieldset>
        </div>
        <div id="Login" style="width: 50%;height: 100%;float: right;color: white;">
            <fieldset style="width: 88%;margin-left: 5%">
                <legend style="font-size:x-large;text-shadow: 1px 1px black;color: #FFBF00 ;"><b>Login</b></legend>
                <form style="width: 10%">
                <table border="0">
                    <tr>
						<td><b>Username/Email</b></td>
                        <td> <input type="text" name="username" id="luser" ></td>
                        <td id="l1" style="color: red;font-size:small;"></td>
                    </tr>
                    <tr>
						<td><b>Password</b></td>
                        <td> <input type="password" name="password" id="lpass"></td>
                        <td id="l2" style="color: red;font-size:small;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><input id="button2"  class="myButton" type="button" onclick="validateLog()" value="Login"></td>
                        <td align="center" style="font-size: small;"><p onclick="forgot()" id="forgot">Forgot Password?</p></td>
                    </tr>
					<tr>
						<td align="center"><a id="button4"  href="javascript:validateFB()"><img  src="<?php  echo $image;?>fblogin.png" height="35px" width="150px" /></a></td>
						<td align="center"><div class="g-signin2" data-onsuccess="onSignIn" data-theme="light" style="height: 33px" onclick="g_plus_click();"></div></td>
					</tr>
                </table>
                </form>
            </fieldset>
        </div>
</div>
        
<!-- FORGOT PASSWORD DIV -->
<!-- FORGOT PASSWORD DIV -->
<!-- FORGOT PASSWORD DIV -->
        <div id="forgotdiv1" style="opacity:0.8;position: absolute;z-index:5;display: none;margin-top:20%; position: absolute;width:35%;height: 25% ;margin-left: 34% ;background-repeat:no-repeat; ;background-image:url(<?php echo $image;?>`fgt2`.jpg);background-size:contain;opacity:.8 ">
        </div>
        <div id="forgotdiv2" style="position: absolute;z-index:6;display:none;box-shadow:0px 0px 10px 5px white; none;margin-top:20%; position: absolute;width:35%;height: 22% ;margin-left: 34% ; border: thin;">
        	<h2 style="color: #FFBF00; margin-left: 45%;text-shadow: 1px 1px black;">FORGOT PASSWORD</h2>
        	<form style="text-align: right;">
        		<b style="color:white;text-shadow: 1px 1px black; ">Enter Username</b>
        		<input type="text" name="fname" id="f_name"> <br>
        		<label id="f_error" style="color: red; font-size: small;">  </label><br>
        		<input id="button3" class="myButton" type="button" onclick="forgotPassword()" value="Forgot Password" ">
        	</form>
        	<div>
                <button  id="closee2" onclick="hideLogin2();" style="border-radius:100px ;background-color:#FFBF00; box-shadow:0px 0px 10px 5px white; color: white;left:98%;top:-10px; position:absolute; border:1px solid; font-size: large;" ><b>X</b></button>
            </div>
        </div>
<!-- FORGOT PASSWORD DIV ENDS-->
<!-- FORGOT PASSWORD DIV ENDS-->
<!-- FORGOT PASSWORD DIV ENDS-->
        
        
<!-- LOGIN/REGISTER DIV ENDS-->
<!-- LOGIN/REGISTER DIV ENDS-->
<!-- LOGIN/REGISTER DIV ENDS--> 






<!-- Header div start-->
<!-- Header div start-->
<!-- Header div start-->

<div style="position: absolute;left: 20px">
        <a href="javascript:goToHome()"><img alt="Contact" src="<?php echo $image;?>100acres.png" style="height: 70px;width: 130px;"></a>
</div>
<div class="nav1" >
    <ul>
    	<li><a href="javascript:goToHome()">&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</a></li>
        <li><a href="javascript:goToSell()">&nbsp;&nbsp;&nbsp;Sell/Rent Property&nbsp;&nbsp;&nbsp;</a></li>
        <li><a href="javascript:goToHire()">&nbsp;&nbsp;&nbsp;We are Hiring&nbsp;&nbsp;&nbsp;</a></li>
        <li style=""><a href="javascript:goToContact()">&nbsp;&nbsp;&nbsp;Contact&nbsp;</a> <img alt="Contact" src="<?php echo $image;?>phone.png" style="height: 15px;width: 15px;">&nbsp;&nbsp;&nbsp;</li>
        <?php 
		if(isset($this->session->userdata['email'])){
		//echo "<button style='float: right' name='login' onclick='logout();'>hi1 ".$this->session->userdata['name']." logout </button>";
	 		echo "<li style:'width: 50%;'>&nbsp;&nbsp;&nbsp;<a href='javascript:showDetailDiv()' id='logge_user' >Welcome ".$this->session->userdata['name']."</a>&nbsp;&nbsp;&nbsp;</li>";
		}else{
	 		echo "<li>&nbsp;&nbsp;&nbsp;<a href='javascript:showLogin()'>Login&nbsp;</a> <img alt='Login' src='".$image."logwhite.png' style='height: 15px;width: 15px'>&nbsp;&nbsp;&nbsp;</li>";
      	}
		?>
   </ul>
</div>
        
<!-- Header div ends-->
<!-- Header div ends-->
<!-- Header div ends-->


<!-- USer div starts-->
<!-- User div starts-->
<!-- User div starts-->

<div id="userdetail" class="nav2" style="display: none;">
    <ul style=" list-style: none;">
        <li><a href="#"><?php echo $this->session->userdata['name'];?></a></li>
        <li><a href="#"><?php echo $this->session->userdata['email'];?></a></li>        
        <li><a href="javascript:goToProfile()">Profile</a></li>         
        <li><a href="javascript:goToPostings()">Postings</a></li>
        <li><a href='javascript:logout()'>Logout</a></li>
    </ul>
</div>

<!-- User div ends-->
<!-- User div ends-->
<!-- User div ends-->
        
<!-- SELL Property Form Starts -->
<!-- SELL Property Form Starts -->
<!-- SELL Property Form Starts -->
<!-- SELL Property Form Starts -->
<div id="form_back" style="width: 60%; height:874px; position: absolute;left: 21%; background-color: #007dc1; opacity:0.9; box-shadow:0px 0px 10px 5px white; margin-bottom: 20px;"></div>

<form action="<?php echo $welcome; ?>handlePostings" method="post" onsubmit="return validateForm( '<?php 
		if(isset($this->session->userdata['email'])){
		//echo "<button style='float: right' name='login' onclick='logout();'>hi1 ".$this->session->userdata['name']." logout </button>";
	 		echo "set";
		}else{
	 		echo "notset";
      	}
		?>')" enctype="multipart/form-data">
<div id="form_div" style="width: 60%; position: absolute;left: 21%;" >

	<div class="register_head" style="text-align: center;">
		<b><h1>REGISTER PROPERTY DETAILS AND PROFILE</h1></b>
		Start posting your Property and add Property Features
	</div>
	<hr>
	<div class="register_head" style="text-align: left;">
		<font size="5px"><b>Basic Property Details</b></font>  
	</div>

	<hr>

	<div>
		<div class="_prop">
			<font color="red" style="text-shadow: 1px 1px black">*</font> <font color="white"><b>I am:</b></font>
		</div>
		<input type="radio" name="owner" value="owner" checked="checked">Owner
		<input type="radio" name="owner" value="broker">Broker
		<input type="radio" name="owner" value="builder">Builder
	</div>

	<br>

	<div>
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>I want to:</b></font>
		</div>
		<input type="radio" name="purpose" value="sell" onchange="show();" checked="checked">Sell
		<input type="radio" name="purpose" value="rent" onchange="show();">Rent
		<input type="radio" name="purpose" value="pg" onchange="show();">PG/HOSTEL
	</div>

	<br>

	<div id="property_type">
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>Property Type:</b></font>
		</div>
		<select id="property" name="ptype" onchange="show()">
			<option value="residential" selected="selected">Residential</option>
			<option value="commercial">Commercial</option>
		</select>
		<font id="property_error" size="2px" style="color: red;text-shadow: 1px 1px black"></font>
		<br>
		<br>
	</div>

	<div>
		<div class="_prop">
			<font color="red">*</font><font color="white"><b>City:</b></font>
		</div>
		<select id="city" name="city">
			<option selected disabled>Select</option>
			<option value="Lucknow">Lucknow</option>
			<option value="Kanpur">Kanpur</option>
			<option value="Varanasi">Varanasi</option>
			<option value="Allahabad">Allahabad</option>
			<option value="noida">Noida</option>
			<option value="delhi">Delhi</option>
			<option value="gurgaon">Gurgaon</option>
			<option value="bathinda">Bathinda</option>
			<option value="jalandhar">Jalandhar</option>
			<option value="moga">Moga</option>
			<option value="bangalore">Bangalore</option>
			<option value="shimla">Shimla</option>
		</select>
		<font id="city_error" size="2px" style="color: red;text-shadow: 1px 1px black"></font>
	</div>

	<br>

	<div>
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>Address:</b></font>
		</div>
		<input type="text" id="address" name="address" placeholder="Enter Address">
		<font id="address_error" style="color: red;text-shadow: 1px 1px black" size="2px"></font>
	</div>
	
	<hr>
	<br>

	<div id="residential_fields">
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>BHK:</b></font>
		</div>
		<select id="bhk" name="bhk">
			<option selected disabled>Select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5+</option>
		</select>
		<font id="bhk_error" size="2px" style="color: red;text-shadow: 1px 1px black"></font>
		<font color="red" style="position: absolute;left:320px;">*</font>
		<font style="position: absolute;left:330px;color: white;" ><b>Washroom</b></font> 
		<select id="wash_resi" name="washroom_resi" style="position: absolute;left:410px;">
			<option selected disabled>Select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5+</option>
		</select>
		<font id="wash_error_resi" size="2px" style="color: red;position: absolute;left:475px;text-shadow: 1px 1px black"></font>
		<font color="red" style="position: absolute;left:550px;">*</font>
		<font style="position: absolute;left:560px;color: white;"><b>Balcony</b></font> 
		<select id="balcony" name="balcony" style="position: absolute;left:620px;">
			<option selected disabled>Select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5+</option>
		</select>
		<font id="balcony_error" size="2px" style="color: red;position: absolute;left:690px;text-shadow: 1px 1px black"></font>
		<hr>
		<br>
	</div>
	
	
	<div id="commercial_fields" style="display: none">
		<div class="_prop">	
			<font color="red" >*</font><font style="color: white;" ><b>Washroom:</b></font> 
		</div>
		<select id="wash_comm" name="washroom_comm">
			<option selected disabled>Select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5+</option>
		</select>
		<font id="wash_error_comm" size="2px" style="color: red;text-shadow: 1px 1px black"></font>
		<hr>
		<br>
	</div>
	
	
	<div id="sell_fields">
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>Transaction Type:</b></font>
		</div>
		<input type="radio" name="transaction" value="r"  checked="checked">Resale
		<input type="radio" name="transaction" value="n">New Booking
		<hr>
		<br>
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>Propt. Ownership:</b></font>
		</div>
		<input type="radio" name="prop_ownership" value="f"  checked="checked">Freehold
		<input type="radio" name="prop_ownership" value="l" >Leasehold
		<input type="radio" name="prop_ownership" value="c"  checked="checked">Co-operative Society
		<input type="radio" name="prop_ownership" value="p">Power of Attorney
		<hr>
		<br>
	</div>
	
	
	
	
	<div id="pgdiv" style="display: none;">
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>Sharing:</b></font>
		</div>
		<select id="sharing" name="sharing">
			<option selected disabled>Select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4+</option>
		</select>
		<font id="sharing_error" size="2px" style="color: red;text-shadow: 1px 1px black"></font>
		
		<font color="red" style="position: absolute;left:320px;">*</font>
		<font style="position: absolute;left:330px;color: white;"><b>Gender</b></font> 
		<select id="gender" name="gender" style="position: absolute;left:410px;">
			<option selected disabled>Select</option>
			<option value="m">Male</option>
			<option value="f">Female</option>
		</select>
		<font id="gender_error" size="2px" style="color: red;position: absolute;left:475px;text-shadow: 1px 1px black"></font>
		<hr>
		<br>
	</div>
	

	<div id="rent_fields" style="display: none;">
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>Furnishing:</b></font>
		</div>
		<input type="radio" name="furnishing" value="f">Fully
		<input type="radio" name="furnishing" value="s">Semi
		<input type="radio" name="furnishing" value="u" checked="checked">No
		<hr>
		<br>
	</div>
	<div>
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>Built-up Area:</b></font>
		</div>
		<input type="text" id="area" name="area" placeholder="Enter Area"> 
		<font id="area_error" style="color: red;text-shadow: 1px 1px black" size="2px"></font>
	</div>
	<hr>	
	<br>
	<div>
		<div class="_prop">
			 <font color="red">*</font> <font color="white"><b>Price:</b></font>
		</div>
		<input type="text" id="exp_price" name="price" placeholder="Enter price">
		<font id="exp_price_error" style="color: red;text-shadow: 1px 1px black" size="2px"></font>
	</div>	
	<br>
	<div>	
	</div>
	<br>
	<div>
		<div class="_prop">
			 <font color="white"><b>Price per Unit Area</b></font>
		</div>
		<input type="text" id="unit_price" name="ppua" >
	</div>
	<hr>
	<br>
	<div>
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>Property on Floor:</b></font>
		</div>
		<select id="onfloor" name="onfloor">
			<option selected disabled>Select</option>
			<option value="0">Ground</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
		<font id="onfloor_error" size="2px" style="color: red;text-shadow: 1px 1px black"></font>
		
		<font color="red" style="position: absolute;left:320px;">*</font>
		<font style="position: absolute;left:330px;color: white;"><b>Total Floors in Building</b></font> 
		<select id="totalfloor" name="tfloor" style="position: absolute;left:500px;">
			<option selected disabled>Select</option>
			<option value="0">Ground</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
		<font id="totalfloor_error" size="2px" style="color: red;position: absolute;left: 575px;text-shadow: 1px 1px black"></font>
	</div>
	
	<hr>
	<br>
	
	<div>
		<div class="_prop">
			<font color="red">*</font> <font color="white"><b>Available From:</b></font>
		</div>
		<input id="date" type="date" name="date">
		<font id="date_error" size="2px" style="color: red;text-shadow: 1px 1px black"></font>
		<hr>
		<br>
	</div>
	
	<div class="_prop">
			<font color="white">*</font> <font color="white"><b>Upload Picture:</b></font>
	</div>
	<input type="file" name="property_pic" id="ppic" size="350"/>
	
	<div style="text-align: center;">
	<input class="myButton" type="submit" id="b1" value="Submit"/>
	</div>
	
</div>
</form>


<!-- SELL Property Form Ends -->
<!-- SELL Property Form Ends -->
<!-- SELL Property Form Ends -->
<!-- SELL Property Form Ends -->


</body>
</html>


