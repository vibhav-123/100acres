<?php
	include("pathfile.php");
	?>


<html>
	<head>
		<link type='text/css' href='http://www.100acres.com/styles/styleSheetPropertyDetail.css' rel='stylesheet'>
		
		
		<script src=<?=$jqueryPath?>>
		</script>
<script src=<?=$jqueryPath?>>
		</script>
		
		<script src=<?="http://www.100acres.com/js/jsFunctionsProperty.js"?>>
		</script>
				
	    <script src=<?=$validationjsPath?>>
	    </script>
	    
	    <script src=<?=$jsFunctionsPath?>>
	    </script>
	    
	    <script src=<?=$fbLoginPath?>>
	    </script>
	    
	    
	    
		<title>
			Advertisement Details		
		</title>
	
	</head>
	
	<body background="http://www.100acres.com/images/bg14.jpg">
	
		<div id="fb-root">
		</div>
		
		<script>(function(d, s, id)
			{
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	
		<div id="cover">
		</div>
		
<!------------------ Temp Register div starts here -------------- -->		
		
    <div id="tempRegister">
<table id="tempRegisterTable" >
	<tr>
		<td colspan="2">
			<input type="button" value="X" class="cross" onclick="hideAllTemp()">
		</td>
	</tr>
	<tr style="text-align: center;">
		<td colspan="2">
			<h2>Welcome to 100 Acres</h2>
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			Please provide the details to view number
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			<input type="text" placeholder=" Email " id="email_temp" class="inputText">
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			<input type="text" placeholder=" name" id="name_temp" class="inputText">
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			<input type="text" placeholder=" contact" id="contact_temp" class="inputText">
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			<button type="button" value="View Number" onclick="submitTempRegister()" id="submitTemp" class="button">View Number </button>
		</td>
	</tr>
</table>
</div>
   
   <!------------------ Temp Register div ends here -------------- -->
    
    <div class="header" style="position: absolute;top: 0;z-index:0; background-color: rgba(0,0,0,0.3); width:100%; height:40px;">
		
		<div style="position:absolute;left:0;top:0;" ><a id="a1" href=<?=$homePath?> >100Acres</a>
		</div>
		
		<div id="headerInformation" style="position:absolute;right:0px;top:0;height:100%;width:400px">	
		
			<div id="buySell" style="position: absolute;top:10px;">
				<a id="postPropertyLink" href='javascript:MyFunc()'>Sell/Rent Property </a>
			</div>
    	
    		<?php
    		if(isset($this->session->userdata["name"]))
    		{
    		?>
				<div id="WelcomeDiv" class="WelcomeDiv" style="position:absolute;top:4px;right:10px;color:white">Welcome
				
					<button id="nameButton" onclick="showProfileOptions()" class="button" style="background-color: inherit"> 
	            			<?=$this->session->userdata["name"]?>&#9662;
	            	</button>
            			
            			<ul id="dropdown" style="list-style-position:inside;position:absolute;right:10px">
	                		<li >
	                		<button width="40px" onclick="location.href='<?=$viewProfilePath?>'" class="nameButton">
	                				View Profile
	                		</button>
	                		</li>
	                		<li >
	                		<button width="40px" onclick="location.href='http://www.100acres.com/index.php/user/logout'" class="nameButton">
	                				Logout
	                			</button>
	                		</li>
            			</ul>
        		
    			</div></div></div>
    			<?php }
				else
				{
			    	?>
			   		<input type="button" id="regLog" onclick="showAll()" value="Login/Register"  style="position:absolute; right:0px; top:0" class="LoginButton">
			    		</div>
			    	</div>

			    	<?php
				}
		    	?>
				
		<br><br><br>
		
		<div id="cover"></div>
		<div id="pidDiv" style="display:none"><?=$_GET["postID"]?></div>
	<div id="modeDiv" style="display:none"><?=$_GET["mode"]?></div>
		<div id="loginReg" >

		<!-- The pop up div of login and register starts here -->

	    	<table  id="main" style="display:none">
	        	<tr>
				<td colspan="2">
			        	<input type="button" value="X" class="cross" onclick="hideAll()">
				</td>
			</tr>
	        	<tr style="text-align: center;">
				<td colspan="2">
			        	<h2>Welcome to 100 Acres</h2>
        			</td>
			</tr>
	    		<tr style="text-align: center;">
				<td  colspan="2">
		    			<input type="button" value= "" onclick="loginFacebook()" class="fbLoginButton">
        			</td>
			</tr>
	    		<tr style="text-align: center;">
				<td  colspan="2">
		              		<input type="submit" value ="Continue with Google"  >
		        	</td>
			</tr>
	        	<tr style="text-align: center;table-layout: fixed">
				<td>
					<input type="button" value="Login" onclick="showLogin()" class="button">
		              	</td>
		              	<td>	
		              		<input type="button" value="Register" onclick="showRegister()" class="button">
				</td>
            		</tr>
		</table>


		<!-- Forgot password div starts here   -->
		
		<table  id="forgotPassword" style="border:2;border-style:solid;">
        		<tr>
				<td colspan="2">
			        	<input type="button" value="X" class="cross" onclick="hideAll()">
				</td>
			</tr>
	
        		<tr style="text-align: center;">
				<td colspan="2">
			        	<h2 >Forgot Passowrd</h2>
		        	</td>
			</tr>
		       	
			<tr style="text-align: center;">
				<td  colspan="2" id="forgotChangable" style="text-align: center">
					Please Enter Your Registered Email-Id
				</td>
			</tr>
	
	        	<tr >
				<td style="text-align: center;" colspan="2">
		    			<input type="text" placeholder="Enter your registered email id" class="inputText" id="email_forgot">
        			</td>
			</tr>

	    		<tr >
				<td style="text-align: center;">
			   		<input type="button" value="Reset Password" class="ResetPasswordButton" onclick="forgotSubmit()" 						id="reset_password">
		   		</td>

		   		<td style="text-align: center;">
			        	<input type="button" value="Back" onclick="showLogin()" class="button" id="back_forgot">
			        </td>
			 </tr>
	        </table>

        <!-- Table for register and forgot password div ends here -->

		            

        <!-- Table for login div starts here -->    

	   <form id="login_form" name="login_form" action="" >
	   
       <table id="login" >

    		<tr style="text-align: center;">
				<td colspan="2">
		        		<h2>Login</h2>
				</td>
				<td>
		        		<input type="button" value="X" class="cross" onclick="hideAll()">
				</td>
			</tr>

			
			<tr style="text-align: center;">
				<td colspan="2">
			            	<input type="text" placeholder ="Enter Email" id="email_login" name="email_login" class="inputText" onkeydown="">
        			</td>
			</tr>

	        	<tr height="2px">
				<td colspan="2">
					<div class="errorBox" id="email_error_log" name="email_error_log">
					</div>
				</td>
			</tr>
	
	        	<tr style="text-align: center;">
				<td colspan="2">
					<div >
				              	<input type="password" placeholder ="Enter Password" id="pwrd_login" name="pwrd_login" 							class="inputPwrd"><br><br>
					              	<div class="errorBox" id="pwrd_error_log" name="pwrd_error_log">
							</div><br>
							<a href="javascript:showForgot()" class="fpwrd" >
								<font  >Forgot Password?</font>
							</a>
					</div>
		              </td>
			</tr>

		         <tr height="2px">
				<td>
				</td>
		         </tr>

       		         <tr style="text-align: center;">
				<td>
	    	  			<input type="button" value="Login" name="login_submit" class="button" onclick="LogSubmit('<?=$userControllerValidateLoginPath?>')">
    	  			</td>
        			<td>
		              		<input type="button" value="Back" onclick="showMain()" class="button">
              			</td>
	                  </tr>


                <tr height="40px">
	     		<td colspan=2>
			</td>
		</tr>

	        </table>
		</form>

		<!-- Login table ends here -->

		
		<!-- Register table starts here -->
	
		
		<form id="register_form" name="register_form" action="">
		
		    <table id="register" >
	
			    <tr style="text-align: center;">
					<td colspan="2">
					    <h2>Register</h2>
					    <input type="button" value="X" class="cross" onclick="hideAll()">
					</td>
				</tr>

				
		    	<tr style="text-align: center;">
		    		<td colspan="2">
		        		<input type="text" placeholder ="Enter Your Name" name="name_reg" id="name_reg" class="inputText">
		    		</td>
		    	</tr>
		    	
		    	
		    	<tr>
		    		<td colspan="2">
		    			<div class="errorBox" id="name_error_reg" name="name_error_reg">
		    			</div>
		    		</td>
		    	</tr>
		    	
		    	
		    	<tr style="text-align: center;">
		    		<td colspan="2">
		        		<input type="text" placeholder ="Enter Email" name="email_reg" id="email_reg" class="inputText">
		    		</td>
		    	</tr>
		    	
		    	
		   		<tr>
		   			<td colspan="2">
		   				<div class="errorBox" id="email_error_reg" name="email_error_reg">
		   				</div>
		   			</td>
		   		</tr>
		   		
		   		
		    	<tr style="text-align: center;">
		    		<td colspan="2">
		        		<input type="password" placeholder ="Enter Password" name="pwrd_reg" id="pwrd_reg" class="inputPwrd">
		    		</td>
		    	</tr>
		    	
		    	<tr>
		    		<td colspan="2">
		    			<div class="errorBox" id="pwrd_error_reg" name="pwrd_error_reg">
		    			</div>
		    		</td>
		    	</tr>
		    	
		    	<tr style="text-align: center;">
		    		<td colspan="2">
		        		<input type="password" placeholder ="Re-enter Password" name="repwrd_reg" id="repwrd_reg" class="inputPwrd">
		   			</td>
		   		</tr>
		   		
		   		
		    	<tr>
		    		<td colspan="2">
		    			<div class="errorBox" id="repwrd_error_reg" name="repwrd_error_reg">
		    			</div>
		    		</td>
		    	</tr>
		    	
		    	<tr style="text-align: center;">
		    		<td colspan="2">
		    			<input type="text" placeholder ="Enter Your Contact Number" name="contact_reg" id="contact_reg" class="inputText">
		   			</td>
		   		</tr>
		   		
		   		<tr>
		   			<td colspan="2">
		   				<div class="errorBox" id="contact_error_reg" name="contact_error_reg">
		   				</div>
		   			</td>
		   		</tr>
		   			
			 
			    <tr style="text-align: center;">
			    	<td colspan="2">
		        		<select id="select_type" name="select_type">
								<option id="buyer" selected="true" value="buyer">buyer</option>
								<option id="seller" value="seller">seller</option>
								<option id="broker" value="broker">broker</option>
						</select>
		    		</td>
		    	</tr>

		    	
				<tr style="text-align: center;">
					<td>
				   		<input type="button" value="Submit" class="button" onclick="RegSubmit('<?=$userControllerRegisterUserPath?>')">
		   			</td>
		   			<td>
		        		<input type="button" value="Back" onclick="showMain()" class="button">
		        	</td>
		    	</tr>
		    
		    </table>
		
		</form>	
	</div>
	
	<!-- - Register form ends here -->
		
		<div id='result1' class='results' >
		
			<div id='headerResult1' class='resultHeader' >
			</div>
		
			
			<div id='middleDiv1' class='middleDiv'>
			
				<div id='imageContainer' class='imageContainer'>
					<a>
						<img src="<?=$propertyDetails[0]->imageURL?>" class='resultImage'>
					</a>
				</div>
			
				
				<div id='resultDescription1' class='resultDescription'>
		
				<fieldset >
		
					<legend > Property ID --  <?=$propertyDetails[0]->postID?></legend>
		
						<table>
								<tr></tr>
								
									<?php 
									if(isset($propertyDetails[0]->title))
									{
								?>
								<tr><td><b>Title for the advertised property</b></td> <td><?=$propertyDetails[0]->title?></td></tr>
								<?php 
									}
								?>
								
								
								<?php 
									if(isset($propertyDetails[0]->propType))
									{
								?>
								<tr><td><b> Property Type</b></td> <td><?=$propertyDetails[0]->propType?></td></tr>
								<?php 
									}
								?>
								
									<?php 
									if(isset($propertyDetails[0]->builtType))
									{
								?>
								<tr><td><b> Build Type</b></td> <td><?=$propertyDetails[0]->builtType?></td></tr>
								<?php 
									}
								?>
								<?php 
									if(isset($propertyDetails[0]->consStatus))
									{
								?>
								<tr><td><b>Construction Status</b></td> <td><?=$propertyDetails[0]->consStatus?></td></tr>
								<?php 
									}
								?>
								
								<?php 
								if(isset($propertyDetails[0]->year))
									{
								?>
								<tr><td><b> COnstruction Year</b></td> <td><?=$propertyDetails[0]->year?></td></tr>
								<?php 
									}
								?>
								
								
									<?php 
									if(isset($propertyDetails[0]->bedrooms))
									{
								?>
								<tr><td><b>BHK</b></td> <td><?=$propertyDetails[0]->bedrooms?></td></tr>
								<?php 
									}
								?>
							
							
								
									<?php 
									if(isset($propertyDetails[0]->address))
									{
								?>
								<tr><td><b>Address</b></td> <td><?=$propertyDetails[0]->address?></td></tr>
								<?php 
									}
									
									
								?>
								<?php 
									if(isset($propertyDetails[0]->area))
									{
								?>
								<tr><td><b>Area covered</b></td> <td><?=$propertyDetails[0]->area?> sq m</td></tr>
								<?php 
									}
								?>
								
									<?php 
									if(isset($propertyDetails[0]->price))
									{
								?>
								<tr><td><b>Price</b></td> <td>Rs.<?=$propertyDetails[0]->price?> </td></tr>
								<?php 
									}
								?>
								
										<?php 
									if(isset($propertyDetails[0]->parking))
									{
								?>
								<tr><td><b> Parking</b></td> <td><?=$propertyDetails[0]->parking?></td></tr>
								<?php 
									}
								?>
								
								<?php 
								if(isset($propertyDetails[0]->furniture))
									{
								?>
								<tr><td><b>Furniture Status</b></td> <td><?=$propertyDetails[0]->furniture?></td></tr>
								<?php 
									}
								?>
								
								<?php 
								if(isset($propertyDetails[0]->gender))
									{
								?>
								<tr><td><b>Gender</b></td> <td><?=$propertyDetails[0]->gender?></td></tr>
								<?php 
									}
								?>
								
								<?php 
								if(isset($propertyDetails[0]->sharing))
									{
								?>
								<tr><td><b>Sharing</b></td> <td><?=$propertyDetails[0]->sharing?></td></tr>
								<?php 
									}
								?>
									<?php 
									if(isset($propertyDetails[0]->ownership))
									{
								?>
								<tr><td><b>Ownership</b></td> <td><?=$propertyDetails[0]->ownership?></td></tr>
								<?php 
									}
								?>
								
										<?php 
									if(isset($propertyDetails[0]->description))
									{
								?>
								<tr><td><b>Property Description</b></td> <td><?=$propertyDetails[0]->description?></td></tr>
								<?php 
									}
								?>
							
								
										<?php 
									if(isset($propertyDetails[0]->CREATED_ON))
									{
								?>
								<tr><td><b> Posted on</b></td> <td><?=$propertyDetails[0]->CREATED_ON?></td></tr>
								<?php 
									}
								?>
								
								
								
						</table>
					</fieldset>
				</div>
			</div>
		
			<div id='footerResult1' class='resultDescription2'>
			
				<fieldset >
		
				<legend > Details of the advertiser </legend>
				<table width="100%" style="table-layout: fixed;float:center">
					<tr>
						<td><b>Name</b></td><td><?=$userDetails[0]->name?></td>
						<td><b>Ownership</b></td><td><?=$propertyDetails[0]->ownership?></td>
						<td><b>Member Since</b></td><td><?=$userDetails[0]->CREATED_ON?>
					</tr>
				</table>
		</fieldset>	
				<br>
				
				<table width='100%' style='table-layout: fixed'>
					<tr >
						<td style='text-align: center'>
							<input type='button' value='View Phone Number' style="<?php if(!isset($_GET["mode"])) echo "display:none"; ?>" class='button' onclick='viewPhoneNumber(<?= $_GET["postID"]?>,"<?= $_GET["mode"] ?>")'>
							
						</td>
					
						<td style='text-align: center'>
							<input type='button' value='Contact Advertiser' class='button' onclick='location.href='http://www.100acres.com/property/propertyDetail/<?=$propertyDetails[0]->postID?>''>
						</td>
					
						<td style='text-align: center'>
							<a href='http://www.100acres.com/report/<?=$result[1]->postID?>'>
								<font color='red'>
									Report a problem
								</font>
							</a>
						</td>
						
						<td style='text-align: center'>
							<a href='javascript:shortlist(<?=$result[1]->postID?>)'>
								<img src='http://www.100acres.com/images/unfilled_star.png' height='25px' width='25px'>
									<font color='green'>
										Shortlist
									</font>
							</a>
						</td>
						
					</tr>
					
				</table>
			</div>
			
		</div>
		
    <div class="header" style="position: absolute;bottom: 0; padding:0;margin:0;background-color: rgba(0,0,0,0.3); width:100%; height:50px" >
    
	<table>
	
		<tr>
			
			<td> 
				<a class="footerLink" href="aboutUs.php">
					About Us
				</a>
			</td>
		
		
			<td width="50px">
			</td>
		
			
			<td>
				<a class="footerLink" href="tnc.html">
					Terms and Conditions
				</a>
			</td>
	
			
			<td width="50px">
			</td>
	
		
			<td>
				<div class="fb-like" data-href="https://www.facebook.com/100acresdotcom?fref=ts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true">
				</div>
			</td>
	
	
			<td width="50px">
			</td>
			
			
			<td>
				<a class="footerLink" href="Feedback.html">
					Feedback
				</a>
			</td>
			
			
			<td width="50px">
			</td>
			
			
			<td>
				 <a class="footerLink" href="Report.html">
				 	Report a problem
				 </a>
			</td>
			
			
			<td width="50px">
			</td>
			
			
			<td>
				<a class="footerLink" href="PrivacyPolicy.html">
					Privacy Policy
				</a>
			</td>
			
			<td width="50px">
			</td>
			
			
			<td>
				&#169;100acres.com 
			</td>
			
		</tr>
	</table>
</div>
		
	</body>
</html>
