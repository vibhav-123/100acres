
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>100 acres</title>
<link rel="stylesheet" type="text/css" href="/public/CSS/home10.css">
<script src="/public/js/jquery-1.11.3.js" ></script>
<script type="text/javascript" src="/public/js/login.js"></script>
<script type="text/javascript" src="/public/js/f.js"></script>
<!-- <script type="text/javascript" src="/public/js/home.js"></script> -->
<script>

$(document).ready(function(){
    $("#find").click(function(){
    	 if($('#show_search').is(':hidden')){
             $('#show_search').slideDown('slow');
         }
         else{
             $('#show_search').slideUp('slow');

         }
      
        
    });
});

$(document).ready(function () { 
  $('#dropdown1').hover(function () {
  $('ul', this).slideDown(350); //show its submenu
  }, function () {
    $('ul', this).slideUp(350); //hide its submenu
  });
});

</script>

<title>LIGHTBOX EXAMPLE</title>
 

</head>


<body background="/public/images/background_image.jpg" id="main_body">
  

<!--  ========================   home page =========================================== -->


<div  id="main_div">

	<div id="header_div">
	 	<div id="logo">
	 		<img src="/public/images/100acres.jpeg"  id="header_logo">
	 	</div>
	 	<?php

	 	//print_r($logged_in);
	if(isset($logged_in) && $logged_in == true)
	{?>
		<div id="header_right">	 
 			<div id="header_sell"><a href="http://www.100acres.com/index.php/property" style="color:white">Sell/rent property</a> </div>
	  		<div id="l1"  onmouseover="login_page()" onmouseout="login_page1()"><?php echo $this->session->userdata['email'];?><a href="http://www.100acres.com/index.php/login/logout" style="color: #CC0000">Logout</a> </div>
		</div>
	<?php } 
	else
	{?> 
<div id="header_right">	 
 			<div id="header_sell"><a href="http://www.100acres.com/index.php/property" style="color:white">Sell/rent property</a> </div>
	  		<div id="l1"  onmouseover="login_page()" onmouseout="login_page1()">Login </div>
		</div>

<?php	}
	?>
	</div>

	<div >
		 <div id="buy1" onmouseover="show('buy1')"  onmouseout="show1('buy1')">BUY</div>
			 <div id="buy2" onmouseover="show('buy2')" onmouseout="show1('buy2')">SELL</div>
		 <div id="buy3" onmouseover="show('buy3')" onmouseout="show1('buy3')">RENT</div>
		 
	</div> 
	

<?php $this->load->helper('form');
		$this->load->helper('url');
		?>
<form action="http://www.100acres.com/index.php/search" method="get">
<div id="show_search">
			
			<div id="dropdown">
			<div id="dropdown1" > 
				<select name="city" >
				   <option value="Hyderabad" class="select1">Hyderabad</option>
			       <option value="kolkata" class="select1">Kolkata</option>
			       <option value="New Delhi" class="select1">New Delhi</option>
			       <option value="Mumbai" class="select1">Mumbai</option>
				</select>
			</div><br>
			<div id="dropdown1" > 
				<select name="minprice" >
				  <option value=0 class="select1">Min Price</option>
			  <option value=1000 class="select1">1000</option>
			  <option value="10000" class="select1">10000</option>
			  <option value="100000" class="select1">100000</option>
			  <option value="1000000" class="select1">1000000</option>
			  <option value="10000000" class="select1">10000000</option>
				</select>
			</div><br>
			<div id="dropdown1" > 
				<select name="maxprice" >
				  
				  <option value="none" class="select1" >Max Price</option>
			  <option value="1000" class="select1" >1000</option>
			  <option value="10000" class="select1" >10000</option>
			  <option value="100000" class="select1" >100000</option>
			  <option value="1000000" class="select1" >1000000</option>
			  <option value="10000000" class="select1" >10000000</option>
				</select>
			</div><br>
			<div id="dropdown1" > 
				<select name="bedrooms" >
				 <option value="none" class="select1" >Bed Rooms</option>
			  <option value="1" class="select1" >1</option>
			  <option value="2" class="select1" >2</option>
			  <option value="3" class="select1" >3</option>
			  <option value="4" class="select1" >4</option>
				</select>
			</div><br>
			<div>
				<input type="submit"  id="submit_query" value="Search">
			</div>
		</div>
		
</div>
	
	<div id="find" >FIND A PROPERTY</div>	

</form>

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
</div>


<!--  ========================   Login and page =========================================== -->

    	<div id="login_visibility" onmouseover="l1()" onmouseout="l2()" >
           		<br> <div>Not Registered..... <b><div style="float:right;margin-right:30px" onclick="document.getElementById('light').style.display='block';"><span>Click Here</span></div></b></div><br>	
<!-- Login form starts-->
   <?php echo form_open('login/check'); ?>
   				 <table >
				            <tbody>
				            	<tr>
                <td ><span>*</span> Email:</td>
                <td><input type="text"  nameinerr="User Name" name="email" value="" errpos="right"  id="email"></td>
                </tr>

                <tr>
                <td ><span>*</span> Password:</td>
                <td ><span ><input type="password" name="password" nameinerr="Password"  value="" id="password"></span></td>
                </tr>
                   
                <tr id="login_layer_error">
                <td>&nbsp;</td>
                <td><div><span id="invald">Entered Username / Password is not valid</span></div></td>
                </tr>
            
                <tr>
                <td>&nbsp;</td>
                <td><button type="button" value="Login" id='login_submit'>Login</button></td>
                </tr>
				            	
				            	


				            </tbody>
			        </table>

    </form>


<!-- Login form ends-->
               
            <!--Login Layer-->

        </div>


    

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