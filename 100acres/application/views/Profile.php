<!DOCTYPE html>
<html>
<head>
<?php include "path.php"; ?>
<meta charset="UTF-8">
<title>User Profile</title>


<script type="text/javascript" src="<?php echo $js; ?>jquery-1.11.3.min.js"></script>
<script  src="<?php echo $js; ?>login_register.js"></script>
<script  src="<?php echo $js; ?>profile.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_header.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_form_button.css">
</head>

<body style="background-image: url('<?php echo $image; ?>t1.jpg'); background-size:cover; ">

<!-- Profile div starts -->
<!-- Profile div starts -->
<!-- Profile div starts -->
<div style="position: absolute;left: 21.8%;top: 30%;background-color:#007dc1;height: 56%;width: 753px;opacity:0.8"></div>
<div style="position: absolute;left: 22%;top: 30%;box-shadow:0px 0px 5px 5px white;">
	<div id="headd"><h1>User Profile</h1></div>
	<div id="ProfilePage">
    	<div id="LeftCol">
        	<div id="Photo"> <img class="photo_img" src="<?php echo $image;?>avatar.png"></div>
  	  	</div>
	
 	    <div id="Info">
 	        <p>
 	            <strong>Name</strong>
    	        <span>:<?php echo $name?> </span>
       	   </p>
       	   <p>
       	  	   <strong>Email</strong>
       	   	  <span>:<?php echo $email?></span>
       	  </p>
       	  <p>
       	  	   <strong>Username</strong>
     	       <span>:<?php echo $username?></span>
       	  </p>
       	  <p id="password">
       	       <strong>Password</strong>
       	       :<input type="text" id="pass_val" value="<?php echo $password;?>" disabled="disabled">
       	  </p>
       	  <p id="enterPassword" style="display:none;">
       	  	   <strong>Enter new password</strong>
     	       :<input type="text" id="newPassword" placeholder="Enter New Password">
     	       <font id="pass_error" color="red" style="font-size: small;"></font>
       	  </p>
       	  <p id="mobile">
       	       <strong>Phone no</strong>
       	       :<input id="mob_val" type="text" value="<?php echo $mob;?>" disabled="disabled">
       	  </p>
       	   <p id="enterMobile" style="display: none;">
       	  	   <strong>Enter new Number</strong>
     	       :<input type="text" id="newMobile" placeholder="Enter Mobile Number">
     	       <font id="mob_error" color="red" style="font-size: small;"></font>
       	  </p>
       	  <p id="age">
       	       <strong>Age</strong>
       	       :<input id="age_val" type="text" value="<?php echo $age;?>" disabled="disabled">
       	  </p>
       	  <p id="enterAge" style="display: none;">
       	  	   <strong>Enter Age</strong>
     	       :<input type="text" id="newAge" placeholder="Enter Age">
     	       <font id="age_error" color="red" style="font-size: small;"></font>
       	  </p>
       	  
       	  <p id="address">
       	       <strong>Address</strong>
       	       :<input id="add_val" type="text" value="<?php echo $address;?>" disabled="disabled">
       	  </p>
       	   <p id="enterAddress" style="display: none;">
       	  	   <strong>Enter new Address</strong>
     	       :<input type="text" id="newAddress" placeholder="Enter Address">
       	  </p>
       	  <p>
       	  		<span></span>
       	  </p>
       	  </div>
       	  <button id="edit" onclick="editProfile()" class="myButton" style="position: absolute;left:50%;top:90%;">Edit</button>
      	  <button id="save" onclick="saveProfile()" class="myButton" style="position: absolute;left:71%;top:90%;" disabled="disabled" >Save</button>
      
      <!-- Needed because other elements inside ProfilePage have floats -->
      <div style="clear:both"></div>
   </div>
</div>

<!-- Profile div ends -->
<!-- Profile div ends -->
<!-- Profile div ends -->



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
        <li><a href="javascript:logout('u')">Logout</a></li>
    </ul>
</div>

<!-- User div ends-->
<!-- User div ends-->
<!-- User div ends-->
        

</body>
</html>