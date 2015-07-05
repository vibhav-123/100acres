
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>100 acres</title>
<link rel="stylesheet" type="text/css" href="/public/CSS/home.css">
<script src="/public/js/jquery-1.11.3.js" ></script>
<script type="text/javascript" src="/public/js/login.js"></script>
<script type="text/javascript" src="/public/js/home.js"></script>
<script>
$(document).ready(function(){
    $("#find").click(function(){
        $("#find").hide();
	$("#show_search").show();
    });
$("#search1").click(function(){
      
	$("#find").show();
        $("#show_search").hide();
	
    });
});
function dropdown(d)
{
	var a= document.getElementById(d).selectedIndex;
	if(a == 0)
		alert("hai");
}
</script>


<title>LIGHTBOX EXAMPLE</title>
 

</head>


<body background="/public/images/bc_image.jpg" id="main_body">
  

<!--  ========================   home page =========================================== -->


<div  id="main_div">

	<div id="header_div">
	 	<div id="logo">
	 		<img src="/public/images/logo2.gif"  id="header_logo">
	 	</div>
	 	<?php

	 	//print_r($logged_in);
	if(isset($logged_in) && $logged_in == true)
	{?>
		<div id="header_right">	 
 			<div id="header_sell"><a href="http://www.100acres.com/index.php/property">Sell/rent property</a> </div>
	  		<div id="header_user"><p><?php echo $this->session->userdata['email'];?></p><a href="http://www.100acres.com/index.php/login/logout" style="color: #CC0000">Logout</a> </div>
		</div>
	<?php } 
	else
	{?> 
<div id="header_right">	 
 			<div id="header_sell"><a href="http://www.100acres.com/index.php/property">Sell/rent property</a> </div>
	  		<div id="header_login"><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';">Login</a> </div>
		</div>

<?php	}
	?>
	</div>

	<div >
		 <div id="buy"><span>BUY</span> </div>
		 <div id="buy"><span>SELL</span></div>
		 <div id="buy"><span>RENT</span> </div>
	</div> 
	<div>
	</div>

<div class="search" id="search" style="visibility: hidden">
<form action="http://www.100acres.com/index.php/search" method="get">
<font color="white">FIND A PROPERTY</font><br>
<!--<select name="keyword" >
<option value="keyWord" selected="selected">keyword1</option>
<option>keyword2</option>
</select>
<select name="minprize" >
<option>minprize1</option>
</select>
<select name="maxprize" >
<option>maxprize</option>
</select>   -->
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('city').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="mumbai">Mumbai</option>
   <option value="hyderabad">Hyderabad</option>
   <option value="delhi">Delhi</option>
</select>
<input name="city" placeholder="City" id="city" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<br>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('minprice').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="1000">1000</option>
   <option value="10000">10000</option>
   <option value="100000">100000</option>
</select>
<input name="minprice" placeholder="Minimum Price" id="minprice" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<br>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('maxprice').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="10000">10000</option>
   <option value="100000">100000</option>
   <option value="1000000">1000000</option>
</select>
<input name="maxprice" placeholder="Maximum Price" id="maxprice" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<br>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('bedrooms').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
</select>
<input name="bedrooms" placeholder="BHK" id="bedrooms" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<div class="search12" id="search12" style="visibility: hidden">
<input type="submit" color="black" value="Search"><br>
</div>

</form>
</div>
</div>
<div class="findproperty" id="findproperty" onclick="klikaj('search','findproperty','search12')">
<font color="red">FIND A PROPERTY</font><br>
</div>
</div>
<!--  ========================   home page  End=========================================== -->




<!--  ========================   Registration page =========================================== -->


   <div id="light" class="white_content"><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>


<div>
	<?php $this->load->helper('form');
	 $this->load->helper('url');?>
<?php echo form_open('http://www.100acres.com/index.php/form/submit'); ?>


<table>
<tbody>
	<tr>
    <td ><span >*</span> Name:</td>
    <td>
        <input type="text" maxlength="50" name="username"  id="uname" onblur="myFunction()" required='true' >
	 </td>
</tr>
<tr>
<td></td>
	<td>
	<div id="uname1" class="block">Please enter your name</div>
	</td>
</tr>

<tr>
    <td ><span >*</span> Email (Your Username):</td>
    <td>
	
        <input type="text" maxlength="50" name="email"  id='eid'  onblur="ValidateEmail()" required='true'/>
			
    </td>
</tr>
<tr>
<td><div id="email1" class="block">Please enter valid email</div></td>
	<td>
	<div id="email2" class="block">Please enter email</div>
	</td>
</tr>
<tr>

    <td><span >*</span> Password:</td>
    <td>
		<span>
			<input class="width" type="password" maxlength="50" name="password" id='psw'  onblur="Validatepsw()" required='true'>
		</span>
    </td>
</tr>
<tr>
<td></td>
	<td>
	<div id="psw1" class="block">Please enter password</div>
	</td>
</tr>
<tr>
    <td ><span c>*</span> Confirm Password:</td>
    <td c>
		<span >
			<input class="width" type="password" maxlength="50" name="confirmpassword" id='cpsw' onblur="Validatecpsw()" required='true' >
		</span>
    </td>
</tr>
<tr>
<td></td>
	<td>
	<div id="cpsw1" class="dnw2">password and confirm password not match</div>
	</td>
</tr>

<tr id="mobileDiv1">
    <td><span >*</span> Primary Phone number:</td>
    <td>
      
            <div >
                <input type="text"  name="mobileno"  id="mno" maxlength="10"   onblur="Validatemob()"  required='true'>
            </div>
    </td>
</tr>
<tr>
<td></td>
	<td>
	<div id="mno1" class="dnw2">please enter valid mobile no</div>
	</td>
</tr>

<tr>
    <td >&nbsp;</td>
    <td >
        <input type="submit" id="submitform1"  value="Register Now">
    </td>
</tr>

</tbody>
</table>
</form>
</div>



<!--  ========================   Login and page =========================================== -->

<div id="login_visibility" >

            <!-- Separator-->
            <div class="vOR rel lf">
                <div class="vORcir f12 b">OR</div>
            </div>

            <!-- Separator-->

            <!--Login Layer-->
            <div class="lf">
                <div id="login_div_html">
                    <div class="vm10 f16"><b>Existing user,</b> <span class="f13"> Please Login to your account</span></div>
<!-- Login form starts-->
    	
   <?php echo form_open('login/check'); ?>
   <?php //echo Module::run('Login/check'); ?>
        <table >
            <tbody><tr>
                <td ><span>*</span> Email:</td>
                <td><input type="text"  nameinerr="User Name" name="email" value="" errpos="right"  id="email"></td>
            </tr>
            <tr>
                <td ><span>*</span> Password:</td>
                <td >
                        <span >
                            <input type="password" name="password" nameinerr="Password"  value="" id="password">
                        </span>
                </td>
            </tr>
            <tr>
                <td >&nbsp;</td>
                <td >
                    <a  href="http://www.99acres.com/property/forgotpassword.php">Forgot password?</a>
                </td>
            </tr>



            <tr id="login_layer_error">
                <td>&nbsp;</td>
                <td>
                <div>
                  <span id="invald">Entered Username / Password is not valid</span>
                </div>
                </td>
            </tr>
            

            <tr>
                <td >&nbsp;</td>
                <td >
                    <button type="button" value="Login" id='login_submit'>Login</button>
                                    </td>
            </tr>
            </tbody></table>
    </form>


<!-- Login form ends-->
               </div>
            </div>
            <!--Login Layer-->

        </div>
</div>

    <div id="fade" class="black_overlay"></div>

</body>
</html>
<Script>
$("#login_submit").click(function(){
	$email = $("#email").val();
	$password = $("#password").val();
	if($email == "" || $password == ""){
		alert("Please fill both details..!!");
		return;
	} 
	
	var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
     if (!reg.test($email)){
     	alert("Invalid Email ..!!");
     	return;
     }
     

	// email validation
	var data = "email="+$email+"&password="+$password;
		
	$.post("<?php echo base_url()?>login/check",data,function($response){

		if( $.trim($response) == "success"){
			window.location.href = "<?php echo base_url()?>login/success";
		} else {
			alert("Invalid login details");
		}
	});

});
</script>