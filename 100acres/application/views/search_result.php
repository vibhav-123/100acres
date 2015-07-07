<!DOCTYPE html>
<html>
<head>
<?php include "path.php"; ?>
<meta charset="UTF-8">
<title>Insert title here</title>


<script type="text/javascript" src="<?php echo $js; ?>jquery-1.11.3.min.js"></script>
<script  src="<?php echo $js; ?>login_register.js"></script>
<script  src="<?php echo $js; ?>details_page.js"></script>
<script  src="<?php echo $js; ?>search.js"></script>
<script>
$(document).ready(function()
		{

	      <?php 
	     		
						echo "
									$('#search_city').val('".$city."');
									$('#search_locality').val('".$address."')
									$('#prop_type_dropdown').val('".$search_property_type1."');
								";
						if($search_type=='pg'){
									echo"
									$('#search_pg_min_price').val(".$selected_pg_min_price.");
									$('#search_pg_max_price').val(".$selected_pg_max_price.");
									$('#search_pg_gender').val('".$selected_pg_gender."');
	      							$('#search_pg_sharing').val('".$selected_pg_sharing."');
									$('#search_pg_person').val('".$selected_pg_person."');
									$('#pg').show('1');
									$('#buy').hide('1');
    								$('#rent').hide('1');
									";
									
						}else if($search_type=='sell'){
									if($search_property_type1=='residential'){
										echo "$('#search_buy_bhk').val(".$selected_bhk.");
											$('#buy_residential').show('1');";
									}elseif ($search_property_type1=='commercial'){
										echo "$('#search_buy_washroom').val(".$selected_washroom.");
											$('#buy_residential').hide('1'); 
											$('#buy_commercial').show('1');";
									}
									echo"
									$('#search_buy_min_price').val(".$selected_min_price.");
									$('#search_buy_max_price').val(".$selected_max_price.");
									$('#search_buy_person').val('".$selected_person."');
									$('#search_buy_area').val(".$selected_area.");
									$('#buy').show('1');
									$('#pg').hide('1');
    								$('#rent').hide('1');
									
									";
						}else if($search_type=='rent'){
									if($search_property_type1=='residential'){
										echo "$('#search_rent_bhk').val(".$selected_bhk.");
											$('#rent_residential').show('1');";
									}elseif ($search_property_type1=='commercial'){
										echo "$('#search_rent_washroom').val(".$selected_washroom.");
											$('#rent_residential').hide('1'); 
											$('#rent_commercial').show('1'); ";
									}
									echo"
									$('#search_rent_min_price').val(".$selected_min_price.");
									$('#search_rent_max_price').val(".$selected_max_price.");
									$('#search_rent_person').val(".$selected_person.");
									$('#search_rent_area').val(".$selected_area.");
									$('#rent').show('1');
									$('#buy').hide('1');
    								$('#pg').hide('1');
									";
							
						}
				
		
			?>
	    });
</script>

<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_search_result.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_side_search.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_header.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>style_form_button.css">
</head>

<body style="background-image: url('<?php echo $image; ?>t1.jpg'); background-size:cover;">

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

 <div class="side_search_back"></div>
<div class="side_search_div">


<!-- Search div starts -->
<!-- Search div starts -->
<!-- Search div starts -->



<form method="POST" action="http://www.100acres.com/index.php/welcome/search_main" onsubmit="return main_search_func()">
<div style="position: absolute;height: 30%;width: 100%;opacity:.95;">

    <div style="height: 40px;border-top: solid black 2px;">
        <div  style="width:33.3333%;height:100%;float: left;text-align: center;">
            <font  class="myButton1" id="buy_button" style="background-color:<?php if($search_type=='sell'){echo "#007dc1";}else echo "#ededed";?>;width: 100%;height: 100%;padding-left: 0;padding-right: 0;padding-bottom: 0;" onclick="showbuy();">
                BUY
            </font>
        </div>
        <div style="width:33.3333%;height:100%;float: left;text-align: center;">
            <font class="myButton1" id="rent_button" style="background-color:<?php if($search_type=='rent'){echo "#007dc1";}else echo "#ededed";?>;width: 100%;height: 100%;padding-left: 0;padding-right: 0;padding-bottom: 0;" onclick="showrent()">
                RENT
            </font>
        </div>
        <div style="width:33.3333%;height:100%;float: left;text-align: center;">
            <font class="myButton1" id="pg_button" style="background-color:<?php if($search_type=='pg'){echo "#007dc1";}else echo "#ededed";?>; width: 100%;height: 100%;padding-left: 0;padding-right: 0;padding-bottom: 0;" onclick="showpg()">
                PG/HOSTEL
            </font>
        </div>
    </div>
    <div style="display:none;"><input type="text"  name="search_type" id="search_type" value="sell"></div>

    <div style="width:100%;height: 60px;z-index: 2;position: absolute;">
        <div  style="width:30%;height:100%;background-color: #007dc1;float: left;text-align: center;">
            <font id="prop_type_head" style="font-family: sans-serif;font-size: small;" ><b>Property Type</b></font><br>
            <select id="prop_type_dropdown"  class="myButton3" style= "width: 80%;height:46%;" name="search_property_type" onchange="changeProperty()" >
                <option value="residential">Residential</option>
                <option value="commercial">Commercial</option>
            </select>
        </div>
        <div style="width:30%;height:100%;background-color: #007dc1;float: left;text-align: center;">
            <input id="search_city" name="search_city" type="text" style="width: 80%;height:60%; position: relative;top: 9px;" placeholder="Enter city">
        </div> 
        <div style="width:40%;height:100%;background-color: #007dc1;float: left;text-align: center;">
            <input id="search_locality" name="search_locality" type="text" style="width: 80%;height:60%; position: relative;top: 9px;" placeholder="Enter locality to search">
        </div>
        
    </div>

    <div id="buy" style="width: 100%;height: 60px;z-index: 1;position: absolute;top: 100px; <?php if($search_type=='sell'){echo "";}else echo " display:none";?>">
        <div style="width:60%;height:100%;background-color: #ededed;float: left;text-align: center ;padding-top: 6px">
            Price<br>
            <select  class="myButton3" style="width: 40%;" name="search_buy_min_price" id="search_buy_min_price">
                <option selected="selected" value="0">Min</option>
                <option value="500000">  5 Lakhs</option>
                <option value="1000000">10 Lakhs</option>
                <option value="1500000">15 Lakhs</option>
                <option value="2000000">20 Lakhs</option>
                <option value="2500000">25 Lakhs</option>
                <option value="3000000">30 Lakhs</option>
                <option value="4000000">40 Lakhs</option>
                <option value="5000000">50 Lakhs</option>
                <option value="6000000">60 Lakhs</option>
                <option value="7500000">75 Lakhs</option>
                <option value="9000000">90 Lakhs</option>
                <option value="10000000">1 Crores</option>
                <option value="15000000">1.5 Crores</option>
                <option value="20000000">2 Crores</option>
                <option value="30000000">3 Crores</option>
                <option value="50000000">5 Crores</option>
                <option value="200000000">20 Crores</option>
                <option value="300000000">30 Crores</option>
                <option value="400000000">40 Crores</option>
                <option value="above">50+ Crores</option>
            </select>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <select class="myButton3" style="width: 40%" name="search_buy_max_price"  id="search_buy_max_price">
            <option selected="selected" value="400000000">Max</option>
                <option value="500000">5 Lakhs</option>
                <option value="1000000">10 Lakhs</option>
                <option value="1500000">15 Lakhs</option>
                <option value="2000000">20 Lakhs</option>
                <option value="2500000">25 Lakhs</option>
                <option value="3000000">30 Lakhs</option>
                <option value="4000000">40 Lakhs</option>
                <option value="5000000">50 Lakhs</option>
                <option value="6000000">60 Lakhs</option>
                <option value="7500000">75 Lakhs</option>
                <option value="9000000">90 Lakhs</option>
                <option value="10000000">1 Crores</option>
                <option value="15000000">1.5 Crores</option>
                <option value="20000000">2 Crores</option>
                <option value="30000000">3 Crores</option>
                <option value="50000000">5 Crores</option>
                <option value="200000000">20 Crores</option>
                <option value="300000000">30 Crores</option>
                <option value="400000000">40 Crores</option>
                <option value="above">50+ Crores</option>
            </select>
        </div>
 <div style="width:40%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px">
            Built-up Area<br>
            <select class="myButton3" style="width: 45%" name="search_buy_area"  id="search_buy_area">
                <option selected="selected" value="0">Any</option>
                <option value="5">500-1000</option>
                <option value="10">1000-1500</option>
                <option value="15">1500-2000</option>
                <option value="20">2000-2500</option>
                <option value="25">2500-3000</option>
                <option value="30">3000-3500</option>
                <option value="35">3500-4000</option>
                <option value="40">4000-4500</option>
                <option value="45">4500-5000</option>
                <option value="50">5000-5500</option>
                <option value="55">5500-6000</option>
                <option value="60">6000-6500</option>
                <option value="65">6500-7000</option>
                <option value="70">7000-7500</option>
                <option value="75">7500-8000</option>
                <option value="80">8000-8500</option>
                <option value="85">8500-9999</option>
            </select>
            In sq. ft.
        </div>
       <div id="buy_residential" style="width:50%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px">
 			BHK
          	<br>
            <select class="myButton3" style="width: 75%" name="search_buy_bhk"  id="search_buy_bhk">
                <option selected="selected" value="any">Any</option>
                <option value="1" >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5+</option>
            </select>
        </div>
        <div id="buy_commercial" style="width:50%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px;display: none;">
 			Washroom<br>
            <select class="myButton3" style="width: 75%" name="search_buy_washroom"  id="search_buy_washroom">
                <option selected="selected" value="any">Any</option>
                <option value="1" >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5+</option>
            </select>
        </div>
        <div style="width:49.7%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px;">
            Posted By<br>
            <select  class="myButton3" style="width: 75%" name="search_buy_person"  id="search_buy_person">
                <option selected="selected" value="any">Any</option>
                <option value="owner" >Owner</option>
                <option value="builder">Builder</option>
                <option value="broker">Broker</option>
            </select>
        </div>
       
    </div>

    <div id="rent" style="width: 100%;height: 60px;z-index: 1;position: absolute;top: 100px; <?php if($search_type=='rent'){echo "";}else echo " display:none";?>">
        <div style="width:60%;height:100%;background-color: #ededed;float: left;text-align: center ;padding-top: 6px">
            Rent<br>
            <select class="myButton3" style="width: 40%" name="search_rent_min_price"  id="search_rent_min_price">
                <option selected="selected" value="0">Min</option>
                <option value="5000">5000</option>
                <option value="10000">10000</option>
                <option value="15000">15000</option>
                <option value="20000">20000</option>
                <option value="25000">25000</option>
                <option value="30000">30000</option>
                <option value="40000">40000</option>
                <option value="50000">50000</option>
                <option value="60000">60000</option>
                <option value="70000">75000</option>
                <option value="90000">90000</option>
                <option value="100000">1 Lakhs</option>
                <option value="150000">1.5 Lakhs</option>
                <option value="200000">2 Lakhs</option>
                <option value="500000">5 Lakhs</option>
                <option value="1000000">10 Lakhs</option>
                <option value="above">10 Lakhs+</option>
            </select>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <select class="myButton3" style="width: 40%" name="search_rent_max_price"  id="search_rent_max_price">
                <option selected="selected" value="1000000">Max</option>
                <option value="5000">5000</option>
                <option value="10000">10000</option>
                <option value="15000">15000</option>
                <option value="20000">20000</option>
                <option value="25000">25000</option>
                <option value="30000">30000</option>
                <option value="40000">40000</option>
                <option value="50000">50000</option>
                <option value="60000">60000</option>
                <option value="70000">75000</option>
                <option value="90000">90000</option>
                <option value="100000">1 Lakhs</option>
                <option value="150000">1.5 Lakhs</option>
                <option value="200000">2 Lakhs</option>
                <option value="500000">5 Lakhs</option>
                <option value="1000000">10 Lakhs</option>
            </select>
        </div>
         <div style="width:40%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px">
        Built-up Area<br>
            <select class="myButton3" style="width: 45%" name="search_rent_area"  id="search_rent_area">
                <option selected="selected" value="0">Any</option>
                <option value="5">500-1000</option>
                <option value="10">1000-1500</option>
                <option value="15">1500-2000</option>
                <option value="20">2000-2500</option>
                <option value="25">2500-3000</option>
                <option value="30">3000-3500</option>
                <option value="35">3500-4000</option>
                <option value="40">4000-4500</option>
                <option value="45">4500-5000</option>
                <option value="50">5000-5500</option>
                <option value="55">5500-6000</option>
                <option value="60">6000-6500</option>
                <option value="65">6500-7000</option>
                <option value="70">7000-7500</option>
                <option value="75">7500-8000</option>
                <option value="80">8000-8500</option>
                <option value="85">8500-9999</option>
            </select>
            In sq. ft.
        </div>
         <div id="rent_residential" style="width:50%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px">
 			BHK
          	<br>
            <select class="myButton3" style="width: 75%" name="search_rent_bhk"   id="search_rent_bhk">
                <option selected="selected" value="any">Any</option>
                <option value="1" >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5+</option>
            </select>
        </div>
        <div id="rent_commercial" style="width:50%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px;display: none;">
 			Washroom<br>
            <select class="myButton3" style="width: 75%" name="search_rent_washroom"  id="search_rent_washroom">
                <option selected="selected" value="any">Any</option>
                <option value="1" >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5+</option>
            </select>
        </div>
        <div style="width:49.7%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px;">
            Posted By<br>
            <select  class="myButton3" style="width: 75%" name="search_rent_person"  id="search_rent_person">
                <option selected="selected" value="any">Any</option>
                <option value="owner" >Owner</option>
                <option value="builder">Builder</option>
                <option value="broker">Broker</option>
            </select>
        </div>
       
    </div>

    <div id="pg" style="width: 100%;height: 60px;z-index: 1;position: absolute;top: 100px; <?php if($search_type=='pg'){echo "";}else echo " display:none;";?>">
        <div style="width:60%;height:100%;background-color: #ededed;float: left;text-align: center ;;padding-top: 6px">
            Rent<br>
            <select class="myButton3" style="width: 40%" name="search_pg_min_price"  id="search_pg_min_price">
                <option selected="selected" value="0">Min</option>
                <option value="5000">5000</option>
                <option value="10000">10000</option>
                <option value="15000">15000</option>
                <option value="20000">20000</option>
                <option value="25000">25000</option>
                <option value="30000">30000</option>
                <option value="40000">40000</option>
                <option value="50000">50000</option>
                <option value="60000">60000</option>
                <option value="70000">75000</option>
                <option value="90000">90000</option>
                <option value="100000">1 Lakhs</option>
                <option value="150000">1.5 Lakhs</option>
                <option value="200000">2 Lakhs</option>
                <option value="500000">5 Lakhs</option>
                <option value="1000000">10 Lakhs</option>
                <option value="above">10 Lakhs+</option>
            </select>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <select class="myButton3" style="width: 40%" name="search_pg_max_price"  id="search_pg_max_price">
                <option selected="selected" value="1000000">Max</option>
                <option value="5000">5000</option>
                <option value="10000">10000</option>
                <option value="15000">15000</option>
                <option value="20000">20000</option>
                <option value="25000">25000</option>
                <option value="30000">30000</option>
                <option value="40000">40000</option>
                <option value="50000">50000</option>
                <option value="60000">60000</option>
                <option value="70000">75000</option>
                <option value="90000">90000</option>
                <option value="100000">1 Lakhs</option>
                <option value="150000">1.5 Lakhs</option>
                <option value="200000">2 Lakhs</option>
                <option value="500000">5 Lakhs</option>
                <option value="1000000">10 Lakhs</option>
            </select>
        </div>
        <div style="width:40%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px">
            Gender<br>
            <select class="myButton3" style="width: 60%" name="search_pg_gender"  id="search_pg_gender">
                <option selected="selected" value="any">Any</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
            </select>
        </div>
        <div style="width:100%;height:100%;background-color: #ededed;float: left;text-align: center;padding-top: 6px">
 			Sharing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Posted By<br>
            <select class="myButton3" style="width: 35%" name="search_pg_sharing"  id="search_pg_sharing">
                <option selected="selected" value="any">Any</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select  class="myButton3" style="width: 35%" name="search_pg_person"  id="search_pg_person">
                <option selected="selected" value="any">Any</option>
                <option value="owner" >Owner</option>
                <option value="builder">Builder</option>
                <option value="broker">Broker</option>
            </select>
        </div>
        
    </div>
    <div style="width:80%;height:100%;background-color: #007dc1;float: left;text-align: center;z-index: 100;">
            <button class="myButton2"id="search_main" type="submit" style="height: 50%;width: 50%;position: absolute;top: 250px ;left:120px; z-index: 100;">
                Search
            </button>
        </div>

</div>
</form>

<!-- Search div ends -->
<!-- Search div ends -->
<!-- Search div ends -->       

</div>

<!-- RESULT div starts -->
<!-- RESULT div starts -->
<!-- RESULT div starts -->
<?php 
echo "<div id='headd' ><h1>RESULTS</h1></div>";

foreach ($res as $row) {
 echo "<div >
		<div class='back_cover'></div>
		    </table>
           <div id='".$row->pid."' class='contact'>
            <form>
                <table  border='0'>
                    <tr>
						<td><b>Name</b></td>
                        <td> <input type='text' name='name' id='cname".$row->pid."' style='border-color:gray'></td>
                    </tr>
                    <tr>
						<td><b>Email</b></td>
                        <td> <input type='text' name='email' id='cemail".$row->pid."' style='border-color:gray'></td>
                    </tr>
                    <tr>
						<td><b>Contact</b></td>
                        <td> <input type='text' name='phone' id='cphone".$row->pid."' style='border-color:gray'></td>
                    </tr>
				</table>
				<table style='width:100%'>
					<tr>
						<td align='center'><input id='submit".$row->pid."'  style='height:25px;width:60px;background-color: #FFBF00' type='button' onclick=\"validatecontact(".$row->pid.",'".$search_property_type1."','".$search_type."')\" value='Submit'></td>
                        <td align='center'><input id='cancel".$row->pid."' style='height:25px;width:60px;background-color: #FFBF00' type='button' onclick='cancel(".$row->pid.")' value='Cancel'></td>
                    </tr>
            	</table>
           		</form>
      </div>
	  <div id='info".$row->pid."' class='contact'>
            <form>
                <table  border='0'>
                    <tr>
						<td><b>Name</b></td>
                        <td> <label id='infoname".$row->pid."'></label></td>
                    </tr>
                    <tr>
						<td><b>Email</b></td>
                        <td> <label id='infoemail".$row->pid."'></label></td>
                    </tr>
                    <tr>
						<td><b>Contact</b></td>
                        <td> <label id='infophone".$row->pid."' ></label></td>
                    </tr>
				</table>
				<table style='width:100%'>
					<tr>
						<td align='center'><input id='okay".$row->pid."'  style='height:25px;width:60px;background-color: #FFBF00' type='button' onclick='closeinfo(".$row->pid.")' value='Done'></td>
                    </tr>
                </table>
           </form>
      </div> 		
	  <div class='ProfilePage'>
			
					<div class='heading'>
						<p><h1>".$row->price."/-Rs  in  ".$row->city."</h1></p>
					</div>
			
	    	<div class='LeftCol'>
	        	<div class='Photo'><img class = 'photo_img' src=".$row->photo_url."  /></div>
	        	<div class='ProfileOptions'><br></div>
	  	  	</div>
		
	 	    <div class='Info'>
	 	        <p>
	 	            <strong >Address</strong>
	    	        <span>:".$row->address."</span>
	       	   </p>
	       	   <p>
	       	  	   <strong>Area</strong>
	       	   	  <span>:".$row->area."</span>
	       	   </p>
			   <p>
	 	            <strong>Posted by</strong>
	    	        <span>:".$row->person."</span>
	       	   </p>
	       	   <p>
	       	  	   <strong>Posted On</strong>
	       	   	  <span>:".$row->created_on."</span>
	       	   </p>
			
	       	  <font  align='center' class='cont' id='b".$row->pid."' onclick='get_contact(".$row->pid.",this.id)' style='background-color: #FFBF00;width: 30%;height: 12%;padding-left: 0;padding-right: 0;padding-bottom: 0;'>
                Get Contact
            </font>
	      	  <button  onclick=\"show_property_details(".$row->pid.",'".$search_type."','".$search_property_type1."')\" class='myButton' style='margin-left:80px'>Details</button>
		 	
	         </div> 
	      <!-- Needed because other elements inside ProfilePage have floats -->
	      <div style='clear:both'></div>
	   </div>
	</div><br><br>";
	 }
 //}
 
?>


<!-- RESULT div ends -->
<!-- RESULT div ends -->
<!-- RESULT div ends -->




<!-- FADER -->
<!-- FADER -->
<!-- FADER -->
<div style="background-color: black;z-index:2; top:0px; opacity:0.8; width: 100%; height: 100%;position: absolute; display: none;" id="fader">
</div>

		
<!-- LOGIN/REGISTER DIV -->
<!-- LOGIN/REGISTER DIV -->
<!-- LOGIN/REGISTER DIV -->


<div id="loginreg1" style="opacity:0.8; background-color:#007dc1;z-index:3; display: none;margin-top:20%; position: absolute;width:69%;height: 33% ;margin-left: 17%">
</div>
<div id="loginreg2"  style="display: none;z-index: 4 ; box-shadow:0px 0px 10px 5px white;margin-top:20%; position: absolute;width:69%;height: 33% ;margin-left: 17%">
      <div>
           <button  id="closee" onclick="hideLogin1();" style="size:15px;box-shadow:0px 0px 10px 5px white;border-radius:100px ;background-color:#007dc1 ; color: white;left:98%;top:-10px; position:absolute; border:1px solid; font-size: large;" ><b>
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
						<td align="center"><div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" style="height: 33px"></div></td>
					</tr>
                </table>
                </form>
            </fieldset>
        </div>
</div>
        
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
                <button  id="closee2" onclick="hideLogin2();" style="border-radius:100px ;background-color:#007dc1; box-shadow:0px 0px 10px 5px white; color: white;left:98%;top:-10px; position:absolute; border:1px solid; font-size: large;" ><b>X</b></button>
            </div>
        </div>

<!-- LOGIN/REGISTER DIV ENDS-->
<!-- LOGIN/REGISTER DIV ENDS-->
<!-- LOGIN/REGISTER DIV ENDS--> 

        


</body>
</html>