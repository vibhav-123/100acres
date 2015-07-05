<html>
	<head>
	<?php 
		include("pathfile.php");
		if(!isset($this->session->userdata["userID"]))
		{
			header('Location: http://www.100acres.com/');
		}
	?>
		<title>
		Personal Homepage
		</title>
	 <script src=<?=$jqueryPath?>></script>
	    <script src=<?=$validationjsPath?>></script>
	    <script src=<?=$jsFunctionsPath?>></script>
	    <script src=<?=$fbLoginPath?>></script>
	    <link type="text/css" href=<?=$styleSheetsPath?> rel="stylesheet"></link>
	</head>
	
	<body id="body1">
	
		<div id="fb-root"></div>
			<script>(function(d, s, id)
			{
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			</script>
		
		
    <div id="cover"></div>
    
<!--    <div id="back"></div> -->
    
    <!-----------------------------------------------------------------------------------  -->
    
    
    
    <div class="header" style="position: absolute;top: 0;z-index:0; background-color: rgba(0,0,0,0.3); width:100%; height:40px;">
		<div style="position:absolute;left:0;top:0;" ><a id="a1" href=<?=$homePath?> >100Acres</a>
		</div>
		
		<div id="headerInformation" style="position:absolute;right:0px;top:0;height:100%;width:400px">	
			<div id="buySell" style="position: absolute;top:10px;font-size: 14px;">
				<a href=<?=$propertyControllerPostadvertFuncPath?> style="color: white;">Sell/Rent Property </a>
			</div>
    	
    		<?php
    		if(isset($this->session->userdata["name"]))
    		{
    		?>
				<div id="WelcomeDiv" class="WelcomeDiv" style="position:absolute;right:10;top:10;color:white">Welcome
				 
    			
        		
            			<button id="nameButton" onclick="showProfileOptions()" class="button" style="background-color: inherit"> 
            			
            				<?=$this->session->userdata["name"]?>&#9662;
            			
            			</button>
            			
            			<ul id="dropdown" style="list-style-position:inside;">
	                		<li>
	                		<button onclick="location.href='http://www.100acres.com/index.php/user/viewUserProfile'" class="nameButton">
	                				View Profile
	                		</button>
	                		</li>
	                		<li>
	                		<button onclick="location.href='http://www.100acres.com/index.php/user/logout'" class="nameButton">
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
					<input type="button" value="Login" onclick="showLogin()" class="button2">
		              	</td>
		              	<td>	
		              		<input type="button" value="Register" onclick="showRegister()" class="button2">
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
			        	<input type="button" value="Back" onclick="showLogin()" class="button2" id="back_forgot">
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
			            	<input type="text" placeholder ="Enter Email" id="email_login" name="email_login" class="inputText"  							onkeydown="">
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
	    	  			<input type="button" value="Login" name="login_submit" class="button2" onclick="LogSubmit('<?=$userControllerValidateLoginPath?>')">
    	  			</td>
        			<td>
		              		<input type="button" value="Back" onclick="showMain()" class="button2">
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
				   		<input type="button" value="Submit" class="button2" onclick="RegSubmit('<?=$userControllerRegisterUserPath?>')">
		   			</td>
		   			<td>
		        		<input type="button" value="Back" onclick="showMain()" class="button2">
		        	</td>
		    	</tr>
		    
		    </table>
		
		</form>	
	</div>
    
    
    
    
	<!-----------------------------------------------------------------------------------  -->
	<!---------------------------- Main Div Started ------------------------------>
	<br><br><br><br><br><br>
		<div id="mainDiv" style="margin: 0 auto;background-color:rgba(255,255,255,0.8);width:80%">
		<br>
			<div id="heading" style="width:100%;text-align: center;color:darkgreen;">
				<h1> Profile Page</h1>
			</div>
			
			
			
			<div id="mainDivProfile">
				<!---------------------------- Personal Information Div Started ------------------------------>
			
			<div id="personal info1" style="width:50%;color:black;border-width:medium;margin: 0 auto;">
				<fieldset >
				
					<legend style="color: black;float:center;"> Personal Information </legend>
				<?php
					   
					echo "<table style='width: 500px;table-layout: fixed; left:50 ;margin: 0 auto;cell-spacing:5px; '>";
					echo "<tr><td>Name</td><td>".$personalInformation[0]->name."</td></tr>";
					echo "<tr><td>Email</td><td>".$personalInformation[0]->email."</td></tr>";
					echo "<tr><td>Contact Number</td><td>".$personalInformation[0]->contact."</td></tr>";
					echo "<tr><td>Account Created On</td><td>".$personalInformation[0]->CREATED_ON."</td></tr>";
					echo "<tr><td>Account Updated On</td><td>".$personalInformation[0]->MODIFIED_ON."</td></tr>";
					echo "<tr>
						<td  >
							<input type='button' id='editPersonal' value='Edit Information' class='profileButton'>
						</td>
						<td  style='text-align: left'>
							<input type='button' id='editPersonal' value='Change Password' class='profileButton'>
						</td>
						</tr>";
					echo "</table>";  
				?> 
				</fieldset>
			</div>
			<!----------------------- Personal Information Div Ended---------------- -->
				<br> <br><br>
				
				<!----------------------- My Postings Div Starts---------------- -->
				<div id="myAdvts" style="color:black;border-width:medium;width:90%;margin: 0 auto;">
				<fieldset style="padding:10px ">
					<legend style="text-align: center">  Posted Advertisements for properties </legend>
				<?php			
						
					if(!empty($postedAds["resultForSeller"]))
					{
						$sno=1;
						echo"<div><b>Properties to Sell</b></div>";
						echo "<table style='width: 100%;   color:darkgreen; cellspacing=5px'>";
						echo "<tr>
						<th width=20px >Serial No.</th>
						<th> Posting Title </th>
						<th> Address </th>
						<th> Total Views </th>
						<th > Created On </th>
						</tr><tr></tr><tr></tr>";
						
						
						foreach($postedAds["resultForSeller"] as $row)
						{
							echo "<tr>";
							echo "<td width=20px style='text-align:center'>".$sno."</td>";
							echo "<td style='text-align:center'>".$row->title."</td>";
							echo "<td style='text-align:center'>".$row->address."</td>";
							echo "<td style='text-align:center'>1100</td>";
							echo "<td style='text-align:center'>".$row->CREATED_ON."</td>";
							$str="http://www.100acres.com/index.php/property_c/viewPropertyDetails?postID=$row->postID&"."mode=sell";
							echo "<td><a href='$str' class='a_profile'>View Details</a></td>";
							echo "<td><a href='http://www.100acres.com' class='a_profile'> Edit Details</a></td>";
							echo "</tr>";
							$sno=$sno+1;
							
						}					
						echo "</table><br>";
					}
					
					if(!empty($postedAds["resultForRental"]))
					{
						$sno=1;
						echo"<div><b>Properties to Rent</b></div>";
						echo "<table style='width: 100%;   color:darkgreen; cellspacing=5px'>";
						echo "<tr>
						<th width=20px >Serial No.</th>
						<th> Posting Title </th>
						<th width=10px> Address </th>
						<th> Total Views </th>
						<th > Created On </th>
						</tr><tr></tr><tr></tr>";
						
						
						foreach($postedAds["resultForRental"] as $row)
						{
							echo "<tr>";
							echo "<td width=20px style='text-align:center'>".$sno."</td>";
							echo "<td style='text-align:center'>".$row->title."</td>";
							echo "<td style='text-align:center'>".$row->address."</td>";
							echo "<td style='text-align:center'>1100</td>";
							echo "<td style='text-align:center'>".$row->CREATED_ON."</td>";
							$str="http://www.100acres.com/index.php/property_c/viewPropertyDetails?postID=$row->postID&"."mode=rent";
							echo "<td><a href='$str' class='a_profile'>View Details</a></td>";
							echo "<td><a href='http://www.100acres.com' class='a_profile'> Edit Details</a></td>";
							echo "</tr>";
							$sno=$sno+1;
						}					
						echo "</table><br>";					
					}

					if(!empty($postedAds["resultForPG"]))
					 {
						$sno=1;
						echo"<div><b>Properties For PG</b></div>";
						echo "<table style='width: 100%;   color:darkgreen; cellspacing=5px'>";
						echo "<tr>
						<th width=10px>Serial No.</th>
						<th> Posting Title </th>
						<th width=10px> Address </th>
						<th> Total Views </th>
						<th > Created On </th>
						</tr><tr></tr><tr></tr>";
						
						
						foreach($postedAds["resultForPG"] as $row)
						{
							echo "<tr>";
							echo "<td width=20px style='text-align:center'>".$sno."</td>";
							echo "<td style='text-align:center'>".$row->title."</td>";
							echo "<td style='text-align:center'>".$row->address."</td>";
							echo "<td style='text-align:center'>1100</td>";
							echo "<td style='text-align:center'>".$row->CREATED_ON."</td>";
							$str="http://www.100acres.com/index.php/property_c/viewPropertyDetails?postID=$row->postID&"."mode=rent";
							echo "<td><a href='$str' class='a_profile'>View Details</a></td>";
							echo "<td><a href='http://www.100acres.com' class='a_profile'> Edit Details</a></td>";
							echo "</tr>";
							$sno=$sno+1;
						}					
						echo "</table><br>";					
}
					     
?>

								
				</fieldset>
				<br><br><br>
			</div>
			
		</div>
		</div>
	<!---------------------------- Main Div Ended ------------------------------>

	
	
		
		</body>
</html>
