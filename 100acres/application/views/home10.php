
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>100 acres</title>
<link rel="stylesheet" type="text/css" href="/public/CSS/home10.css">
<script src="/public/js/jquery-1.11.3.js" ></script>
<script type="text/javascript" src="/public/js/login.js"></script>
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


<body background="/public/images/random1.jpeg" id="main_body">
  

<!--  ========================   home page =========================================== -->

<div  id="main_div">

	<div id="header_div">
	 	<div id="logo">
	 		<img src="/public/images/100acres.jpeg"  id="header_logo">
	 	</div>
		<div id="header_right">	 
 			<div id="header_sell"><a id="s1" href="http://www.100acres.com/index.php/property">Sell/Rent Property</a></div>
 				  		<div id="header_login">
	  			<img id="login_image" src="/public/images/login.jpeg" > 
	  			<div  id="l1"    onmouseover="login_page()" onmouseout="login_page1()">Login</div>
	  		</div>
		</div>
	</div>

	<div><p id="market"><i>India's largest property marketplace covering almost the major cities and a large number of agents and developers.</i></p></div>



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
				<select name="search" >
				   <option value="Hyderabad" class="select1">Hyderabad</option>
			       <option value="kolkata" class="select1">Kolkata</option>
			       <option value="New Delhi" class="select1">New Delhi</option>
			       <option value="Mumbai" class="select1">Mumbai</option>
				</select>
			</div><br>
			<div id="dropdown1" > 
				<select name="search" >
				  <option value=0 class="select1">Min Price</option>
			  <option value=1000 class="select1">1000</option>
			  <option value="10000" class="select1">10000</option>
			  <option value="100000" class="select1">100000</option>
			  <option value="1000000" class="select1">1000000</option>
			  <option value="10000000" class="select1">10000000</option>
				</select>
			</div><br>
			<div id="dropdown1" > 
				<select name="search" >
				  
				  <option value="none" class="select1" >Max Price</option>
			  <option value="1000" class="select1" >1000</option>
			  <option value="10000" class="select1" >10000</option>
			  <option value="100000" class="select1" >100000</option>
			  <option value="1000000" class="select1" >1000000</option>
			  <option value="10000000" class="select1" >10000000</option>
				</select>
			</div><br>
			<div id="dropdown1" > 
				<select name="search" >
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
				
					<?php $this->load->helper('form');
	                $this->load->helper('url');?>
                    <?php echo form_open('http://www.100acres.com/index.php/form/submit'); ?>
					


						<table>
							<tbody>
								<tr>
							    <td ><span >*</span> Name:</td>
							    <td>
							        <input type="text	" maxlength="50" name="username"  id="uname" onblur="myFunction()" >
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
								
							        <input type="text" maxlength="50" name="email"  id='eid'  onblur="ValidateEmail()"/>
										
							    </td>
							</tr>
							<tr>
							<td></td>
								<td>
								<div id="email1" class="block">Please enter email</div>
								</td>
							</tr>
							<tr>

							    <td><span >*</span> Password:</td>
							    <td>
									<span>
										<input class="width" type="password" maxlength="50"  name="password" id='psw'  onblur="Validatepsw()">
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
										<input class="width" type="password" maxlength="50" name="confirmpassword" id='cpsw' onblur="Validatecpsw()" >
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
							      
							            <div style="width:100px;">
							                <input type="text"  name="mobileno"  id="mno" maxlength="10"  style="height:20px" onblur="Validatemob()" >
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
           		<br> <div>Not Registered..... <b><div style="float:right;margin-right:30px" onclick="document.getElementById('light').style.display='block';"><span>Click Hare</span></div></b></div><br>	
<!-- Login form starts-->
			    <form action="login/check" method="post">
			        <table >
				            <tbody><tr>
				                <td ><span>*</span> Email:</td>
				                <td><input type="text"  nameinerr="User Name" name="email" value="" errpos="right"  id="email"></td>
				            </tr>
				            <tr>
				                <td ><span>*</span> Password:</td>
				                <td >
				                        <span >
				                            <input type="password" name="password" nameinerr="Password"  value="" id="passowrd">
				                        </span>
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
				            <tr>
				            	<td>
				            		<span>----------------------</span>
				            	</td>

				            	<td>
				            		<span>------------OR--------------------------</span>

				            	</td>
				            </tr>

				            <tr>
				            	
				            	<td colspan="2">

				            		<div class="fb"><br><span>Sign up with Facebook</span></div>
				            	</td>

				            </tr>


				            </tbody>
			        </table>
			    </form>
<!-- Login form ends-->
            </div>
            
            <!--Login Layer-->
<!-- ================================================================================== -->

</body>
</html>
