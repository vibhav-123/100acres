<!DOCTYPE html>
<html>
<head>
<?php include "path.php"; ?>
<meta charset="UTF-8">
<title>Property Postings</title>


<script type="text/javascript" src="<?php echo $js; ?>jquery-1.11.3.min.js"></script>
<script  src="<?php echo $js; ?>login_register.js"></script>
<script  src="<?php echo $js; ?>activate_posting.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_posting.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_header.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_form_button.css">
</head>

<body style="padding: 0px; margin: 0px;">
<div style="background-image: url('<?php echo $image; ?>t1.jpg'); background-size:cover; height:100%; width:100%; position: fixed; z-index: -1; margin-top: -20px; "></div>


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
        <li><a href="javascript:goToRemovedPostings()">RemovedPostings</a></li>
        <li><a href="javascript:logout('u')">Logout</a></li>
    </ul>
</div>

<!-- User div ends-->
<!-- User div ends-->
<!-- User div ends-->
        



<!-- Posting div starts -->
<!-- Posting div starts -->
<!-- Posting div starts -->
<div style="position: absolute;left:20%">
<?php 
echo "<div id='headd' ><h1>Removed Properties</h1></div>";
foreach ($pg as $row) {
 echo "<div id='pg_cover'></div>
	   <div id='pg_shadow'></div>
		<div>
	   <fieldset id='ProfilePage' >
		<legend id='legnd'><b>PG/HOSTEL</b></legend>
    	<div id='LeftCol'>
        	<div id='Photo'><img src=".$row->photo_url." /></div>
        	
  	  	</div>
	
 	    <div id='Info'>
 	        
		   <p>
 	            <strong>Sharing</strong>
    	        <span class='_span'>: ";echo $row->sharing."</span>
				 <strong>Gender</strong>
       	   	     <span class='_span'>: ";
       	   	     if($row->gender=='m')
    	        		echo "Male";
    	        else 
    	        		echo "Female";
    	        echo "</span>
       	   </p>
		   <p>
 	            <strong>Furnish</strong>
    	        <span class='_span'>: ";
    	        if($row->furnish=='u')
    	        		echo "Unfurnished";
    	        else if($row->furnish=='f')
    	        		echo "Furnished";
    	        else 
    	        		echo "Semi-Furnished";
    	        echo "</span>
				<strong>Area</strong>
       	   	    <span class='_span'>: ";echo $row->area." Sq. unit</span>
       	   </p>
		   <p>
 	            <strong>On Floor</strong>
    	        <span class='_span'>: ";echo $row->on_floor."</span>
        		<strong>Total Floors</strong>
       	   	  	<span class='_span'>: ";echo $row->total_floor."</span>
       	   </p>
           <p>
       	  	   <strong>Posted on</strong>
       	   	  <span class='_span'>:";echo $row->created_on."</span>
        	   <strong>Availability</strong>
       	   	   <span class='_span'>:";echo $row->created_on."</span>
       	   </p>
           <p>
       	  	   <strong>Price</strong>
       	   	   <span class='_span'>:Rs ";echo $row->price."</span>
        	   <strong>Price per area</strong>
       	   	   <span class='_span'>:Rs ";echo $row->ppua."</span>
       	   </p>
		   <p>
 	            <strong >City</strong>
    	        <span class='_span'>: ";echo $row->city."</span>
       	   </p>
       	   <p>
       	  	   <strong>Address</strong>
       	   	  <span id='addr'>: ";echo $row->address."</span>
       	   </p>	
       	  
       	  <button id='edit' onclick='editProfile()' class='myButton' style='display:none'>Edit</button>
      	  <button id='pg' onclick='activateProp(".$row->pid.",this.id)' class='myButton' style='margin-left:80px'>Activate Property</button>	
       	  </div>
      <!-- Needed because other elements inside ProfilePage have floats -->
      <div style='clear:both'></div>		
   </fieldset>
	<br>
	<br>
  </div>";
 }
 foreach ($resi as $row) {
 	echo "
		<div id='resi_cover'></div>
	   <div id='resi_shadow'></div>
		<div>
	   <fieldset id='ProfilePage'>";
 		if($row->property_type=='rent')
			echo "<legend id='legnd'><b>RENT</b></legend>";
		else 
			echo "<legend id='legnd'><b>SELL</b></legend>";
		echo "
    	<div id='LeftCol'>
        	<div id='Photo'><img src=".$row->photo_url." /></div>
        	
  	  	</div>
 
 	    <div id='Info'>
        	<p>
       	  	   	<strong>BHK</strong>
       	  		<span class='_span'>:Rs ";echo $row->bhk."</span>
       			<strong>Washroom</strong>
       			<span class='_span'>: ";echo $row->washroom."</span>
       	   </p>
       	   <p>
       	  	   	<strong>Balcony</strong>
       	   	   	<span class='_span'>: ";echo $row->balcony."</span>
 				<strong>Area</strong>
       	   	    <span class='_span'>: ";echo $row->area." Sq. unit</span>
       	   </p>
		   <p>
 	            <strong>On Floor</strong>
    	        <span class='_span'>: ";echo $row->on_floor."</span>
        		<strong>Total Floors</strong>
       	   	  	<span class='_span'>: ";echo $row->total_floor."</span>
       	   </p>
           <p>
       	  	   <strong>Posted on</strong>
       	   	  <span class='_span'>:";echo $row->created_on."</span>
        	   <strong>Availability</strong>
       	   	   <span class='_span'>:";echo $row->created_on."</span>
       	   </p>
           <p>
       	  	   <strong>Price</strong>
       	   	   <span class='_span'>:Rs ";echo $row->price."</span>
        	   <strong>Price per area</strong>
       	   	   <span class='_span'>:Rs ";echo $row->ppua."</span>
       	   </p>";
 	       if($row->property_type=='rent'){
 	       	 echo "
       	   	  		<p>
        	   			<strong>Furnish</strong>
       	   	   			<span class='_span'>: ";if($row->furnish=='u')
    	        					echo "Unfurnished";
    	        				else if($row->furnish=='f')
    	        					echo " Furnished";
    	       					 else 
    	       				 		echo " Semi-Furnished";
    	      			  echo "</span>
       	   			</p>";
 	       }
 	       else{
 	       	echo "
       	   	   		<p>
       	  	   			<strong>Transaction  Type</strong>
       	   	   			<span class='_span'>:";if($row->transaction_type=='r')
    	        					echo " Resale";
    	       					 else 
    	       				 		echo " New Booking";
    	      			  echo "</span>
        	   			<strong>Propt. Ownership</strong>
       	   	   			<span class='_span'>:";if($row->property_ownership=='f')
    	        					echo " Freehold";
       	   	   					 else if($row->property_ownership=='l')
    	        					echo " Leasehold";
       	   	   					 else if($row->property_ownership=='c')
       	   	   					 	echo " COOP Society";
    	       					 else 
    	       				 		echo "Power of Attorney";
    	      			  echo "</span>
       	   			</p>";
 	       }
 			echo "
 	            	<p>
 	            		<strong >City</strong>
    	        		<span class='_span'>: ";echo $row->city."</span>
       	   			</p>
       	  			 <p>
       	  			   <strong>Address</strong>
       	    		   <span id='addr'>: ";echo $row->address."</span>
       	  			 </p>
       	  <button id='edit' onclick='editProfile()' class='myButton' style='display:none' >Edit</button>
      	  <button id='residential' onclick='activateProp(".$row->pid.",this.id)' class='myButton' style='margin-left:80px'>Activate Property</button>
       	  </div>
      <!-- Needed because other elements inside ProfilePage have floats -->
      <div style='clear:both'></div>
   </fieldset>
	<br>
	<br>
  </div>";
 }
 
 foreach ($comm as $row) {
 	echo "
       	<div id='comm_cover'></div>
	   <div id='comm_shadow'></div>
       <div>
	   <fieldset id='ProfilePage'>";
 	if($row->property_type=='rent')
 		echo "<legend id='legnd'><b>RENT</b></legend>";
 	else
 		echo "<legend id='legnd'><b>SELL</b></legend>";
 	echo "
    	<div id='LeftCol'>
        	<div id='Photo'><img src=".$row->photo_url." /></div>
        	
  	  	</div>
 
 	    <div id='Info'>
        	<p>
       			<strong>Washroom</strong>
       			<span class='_span'>: ";echo $row->washroom."</span>
        		<strong>Area</strong>
       	   	    <span class='_span'>: ";echo $row->area." Sq. unit</span>
       	   </p>
		   <p>
 	            <strong>On Floor</strong>
    	        <span class='_span'>: ";echo $row->on_floor."</span>
        		<strong>Total Floors</strong>
       	   	  	<span class='_span'>: ";echo $row->total_floor."</span>
       	   </p>
           <p>
       	  	   <strong>Posted on</strong>
       	   	  <span class='_span'>:";echo $row->created_on."</span>
        	   <strong>Availability</strong>
       	   	   <span class='_span'>:";echo $row->created_on."</span>
       	   </p>
           <p>
       	  	   <strong>Price</strong>
       	   	   <span class='_span'>:Rs ";echo $row->price."</span>
        	   <strong>Price per area</strong>
       	   	   <span class='_span'>:Rs ";echo $row->ppua."</span>
       	   </p>";
 	if($row->property_type=='rent'){
 		echo "
       	   	  		<p>
        	   			<strong>Furnish</strong>
       	   	   			<span class='_span'>: ";if($row->furnish=='u')
    	        					echo " Unfurnished";
    	        				else if($row->furnish=='f')
    	        					echo " Furnished";
    	       					 else 
    	       				 		echo " Semi-Furnished";
    	      			  echo "</span>
       	   			</p>";
 	}
 	else{
 		echo "
       	   	   		<p>
       	  	   			<strong>Transaction  Type</strong>
       	   	   			<span class='_span'>:";if($row->transaction_type=='r')
    	        					echo " Resale";
    	       					 else 
    	       				 		echo " New Booking";
    	      			  echo "</span>
        	   			<strong>Propt. Ownership</strong>
       	   	   			<span class='_span'>:";if($row->property_ownership=='f')
    	        					echo " Freehold";
       	   	   					 else if($row->property_ownership=='l')
    	        					echo " Leasehold";
       	   	   					 else if($row->property_ownership=='c')
       	   	   					 	echo " COOP Society";
    	       					 else 
    	       				 		echo "Power of Attorney";
    	      			  echo "</span>
       	   			</p>";
 	}
 	echo "
 	            	<p>
 	            		<strong >City</strong>
    	        		<span class='_span'>: ";echo $row->city."</span>
       	   			</p>
       	  			 <p>
       	  			   <strong>Address</strong>
       	    		   <span id='addr'>: ";echo $row->address."</span>
       	  			 </p>
       	  <button id='edit' onclick='editProfile()' class='myButton' style='display:none'>Edit</button>
      	  <button id='commercial' onclick='activateProp(".$row->pid.",this.id)' class='myButton' style='margin-left:80px'>Activate Property</button>
       	  </div>
      <!-- Needed because other elements inside ProfilePage have floats -->
      <div style='clear:both'></div>
   </fieldset>
	<br>
	<br>
  </div>";
 }
?>
</div>


<!-- Posting div ends -->
<!-- Posting div ends -->
<!-- Posting div ends -->


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
					<!-- 	<td align="center"><a id="button5"  href="javascript:validateG+()"><img  src="<?php  echo $image;?>g+login.png" height="41px" width="170px" /></a></td>-->
						<td align="center"><div class="g-signin2" data-onsuccess="onSignIn" data-theme="light" style="height: 33px"></div></td>
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

</body>
</html>