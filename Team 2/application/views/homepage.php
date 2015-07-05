<html>	
    <head>
    	<?php 
    	include("pathfile.php");
    	?>
	    <script src=<?=$jqueryPath?>></script>
	    <script src=<?=$validationjsPath?>></script>
	    <script src=<?=$jsFunctionsPath?>></script>
	    <script src=<?=$fbLoginPath?>></script>
	    <link type="text/css" href=<?=$styleSheetsPath?> rel="stylesheet"></link>
	    <title> PG-Bungalows-Apartments-Buildings-Offices Get them exclusively at 100acres.com</title>
    </head>
    
    <body id="body" onload="bodyLoad()">
    
	
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

    		<tr style="text-align: center;" >
				<td colspan="2">
		        		<h2>Login</h2>
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
	
	<!-- - Register form ends here -->
	
	
	<div id="searchContainer"><br><br><br><br><br><br><br><br><br><br>
	
		<center>
		
			<div id="centralTab">
			
				<div id="navcontainer" border="2" style="border-color:black">
					<ul>
						<li>
							<input type="Button" class="mainPageChoiceNew" id="buttonBuyMain" value="BUY" onclick="showBuySearch()" />
						</li>
						
						<li>
							<input type="Button" class="mainPageChoiceNew" id="buttonRentMain" value="RENT"onclick="showRentSearch()"/>
						</li>
						
						<li>
							<input type="Button" class="mainPageChoiceNew" value="PG" id="buttonPGMain" onclick="showPGSearch()"/>
						</li>
					</ul>
				</div>
			</div>
		
			<br/><br/><br/>
		
			<div>
				<select class="selectCity" id="city">
				    <option value="delhi" selected="selected">Delhi</option>
				    <option>Noida</option>
				    <option>Mumbai</option>
				</select>
				<input type="text" id="location" placeholder="Enter the location" class="mainSearch">
				<input type="Button" class="mainpagesearch" value="Search" id="search" onclick="submitSearch()"/>
				<input type="Button" class="mainpagesearch" value="Advanced Search" onclick="showBuySearch()"/>
		
		
			</div>
			</center>
			
		<div style="width:250px;margin: 0  auto;  font-family:arial,tahoma;
  font-size:15px; font-weight:bold;background-color: #E74C3C;color:white;display:none" id="error_location";>Please Enter a Location</div>

	</div>

	<div id="formSearch_BuyRent" class="formSearch">
			
		<form class="searchForm" id="searchBuyForm">
			<table>
			
				<tr>
						<td>
								Property Type
						</td>

						<td>
							<select id="propTypeBuy">
								<option value="any" selected="selected">Any</option>
								<option value="bunglow">Bunglow</option>
								<option value="flat">Flat</option>
								<option value="floor">Floor</option>
								<option value="apartment">Apartment</option>
							</select>
						</td>

						<td>
								Build Type
						</td>

						<td colspan="2">
							<select id="builtTypeBuy" width="100px">
								<option value="any" selected="selected">Any</option>
								<option value="single">Single</option>
								<option value="doublex">Double</option>
								<option value="triplex">Triplex</option>
								<option value="other">Other</option>
								
							</select>
						</td>
						
						<td>
							Construction Status
						</td>

						<td>
							<select id="consStatusBuy">
								<option value="any" selected="selected">Any</option>
								<option value="readytomove"> Ready to move</option>
								<option value="underconstruction">Under Construction</option>
							</select>
						</td>
						</tr>
						<tr>
						<td></td><td></td></tr>
						<tr>
						
						
						<td>
							BHK
						</td>
				
						<td>
							<select id="bedRoomsBuy">
							  <option value="any" selected="selected">Any</option>
							  <option value="1"> 1</option>
							  <option value="2"> 2</option>
							  <option value="3"> 3</option>
							  <option value="other"> More Than 3</option>
							</select>
						</td>
						
				
						
						
						<td>
							Price Range
						</td>
						
						<td colspan="2">
							<select id="minPriceBuy" onchange="populateMax.call(this, event)">
		  						<option value="any">Any</option>
		  						<option value="1000">1k</option>
								<option value="10000">10k</option>
								<option value="20000">20k</option>
								<option value="30000">30k</option>
								<option value="40000">40k</option>
								<option value="50000">50k</option>
								<option value="60000">60k</option>
								<option value="70000">70k</option>
								<option value="80000">80k</option>
								<option value="90000">90k</option>
								<option value="100000">1lac</option>
								<option value="1000000">10lac</option>
								<option value="2000000">20lac</option>
								<option value="3000000">30lac</option>
								<option value="4000000">40lac</option>
								<option value="5000000">50lac</option>
								<option value="6000000">60lac</option>
								<option value="7000000">70lac</option>
								<option value="8000000">80lac</option>
								<option value="9000000">90lac</option>
		  					</select> <br/>to<br/>
							<select id="maxPriceBuy">
							  <option value="any">Any</option>
							  <option value="1000">1k</option>
							  <option value="10000">10k</option>
							  <option value="20000">20k</option>
							  <option value="30000">30k</option>
							  <option value="40000">40k</option>
							  <option value="50000">50k</option>
							  <option value="60000">60k</option>
							  <option value="70000">70k</option>
							  <option value="80000">80k</option>
							  <option value="90000">90k</option>
							  <option value="100000">1lac</option>
							  <option value="1000000">10lac</option>
							  <option value="2000000">20lac</option>
							  <option value="3000000">30lac</option>
							  <option value="4000000">40lac</option>
							  <option value="5000000">50lac</option>
							  <option value="6000000">60lac</option>
							  <option value="7000000">70lac</option>
							  <option value="8000000">80lac</option>
							  <option value="9000000">90lac</option>
							</select>
						</td>
						<td>
							Posted By
						</td>
						
						<td>
							<select id="posterTypeBuy">
							<option value="any" selected="selected">Any</option>
							  <option value="owner">Owner</option>
							  <option value="broker">Broker</option>
							</select>
						</td>
					
					</tr>
			
			
			</table>
		</form>
	
			
		<form id = "searchRentForm" class="searchForm">
			<table>
			
				<tr>
						<td>
								Property Type
						</td>

						<td>
							<select id="propTypeRent">
							<option value="any" selected="selected">Any</option>
								<option value="bunglow">Bunglow</option>
								<option value="flat">Flat</option>
								<option value="floor">Floor</option>
								<option value="apartment">Apartment</option>
							</select>
						</td>

						<td>
								Build Type
						</td>

						<td>
							<select id="builtTypeRent">
								<option value="any" selected="selected">Any</option>
								<option value="single">Single</option>
								<option value="doublex">Double</option>
								<option value="triplex">Triplex</option>
								<option value="other">Other</option>
								
							</select>
						</td>
						
						<td>
							Construction Status
						</td>

						<td>
							<select id="consStatusRent">
								<option value="any" selected="selected">Any</option>
								<option value="readytomove"> Ready to move</option>
								<option value="underconstruction">Under Construction</option>
							</select>
						</td>
						</tr>
						<tr>
						<td></td>
						</tr>
						<tr>
						
						
						<td>
							BHK
						</td>
				
						<td>
							<select id="bedRoomsRent">
							  <option value="any" selected="selected">Any</option>
							  <option value="1"> 1</option>
							  <option value="2"> 2</option>
							  <option value="3"> 3</option>
							  <option value="other">More Than 3</option>
							</select>
						</td>
						
				
						
						
						<td>
							Price Range
						</td>
						
						<td>
							<select id="minPriceRent" onchange="populateMax.call(this, event)">
		  						<option value="any">Any</option>
		  						<option value="1000">1k</option>
								<option value="10000">10k</option>
								<option value="20000">20k</option>
								<option value="30000">30k</option>
								<option value="40000">40k</option>
								<option value="50000">50k</option>
								<option value="60000">60k</option>
								<option value="70000">70k</option>
								<option value="80000">80k</option>
								<option value="90000">90k</option>
								<option value="100000">1lac</option>
								<option value="1000000">10lac</option>
								<option value="2000000">20lac</option>
								<option value="3000000">30lac</option>
								<option value="4000000">40lac</option>
								<option value="5000000">50lac</option>
								<option value="6000000">60lac</option>
								<option value="7000000">70lac</option>
								<option value="8000000">80lac</option>
								<option value="9000000">90lac</option>
		  					</select> 
		  					<br/>to<br/>
							<select id="maxPriceRent">
							  <option value="any">Any</option>
							  <option value="1000">1k</option>
							  <option value="10000">10k</option>
							  <option value="20000">20k</option>
							  <option value="30000">30k</option>
							  <option value="40000">40k</option>
							  <option value="50000">50k</option>
							  <option value="60000">60k</option>
							  <option value="70000">70k</option>
							  <option value="80000">80k</option>
							  <option value="90000">90k</option>
							  <option value="100000">1lac</option>
							  <option value="1000000">10lac</option>
							  <option value="2000000">20lac</option>
							  <option value="3000000">30lac</option>
							  <option value="4000000">40lac</option>
							  <option value="5000000">50lac</option>
							  <option value="6000000">60lac</option>
							  <option value="7000000">70lac</option>
							  <option value="8000000">80lac</option>
							  <option value="9000000">90lac</option>
							</select>
						</td>
						<td>
							Posted By
						</td>
						
						<td>
							<select id="posterTypeRent">
							  <option value="any" selected="selected">Any</option>
							  <option value="owner">Owner</option>
							  <option value="broker">Broker</option>
							</select>
						</td>
					
					</tr>
			
			</table>
		</form>

	
	
			
		<form class="searchForm" id="searchPGForm">
			<table>
			
				<tr>
						<td>
								Gender
						</td>

						<td>
							<select id="genderPG">
								<option value="boys">Boys</option>
								<option value="girls">Girls</option>
							</select>
						</td>

						<td>
								Sharing
						</td>

						<td>
							<select id="sharingPG">
							<option value="any" selected="selected">Any</option>
								<option value="single">Single</option>
								<option value="double">Double</option>
								<option value="triple">Triple</option>
								<option value="quadra">Quadra</option>
								<option value="other">4+</option>
							</select>
						</td>
												
						<td>
							Price Range
						</td>
						
						<td>
							<select id="minPricePG" onchange="populateMax.call(this, event)">
		  						<option value="any">Any</option>
		  						<option value="1000">1k</option>
								<option value="10000">10k</option>
								<option value="20000">20k</option>
								<option value="30000">30k</option>
								<option value="40000">40k</option>
								<option value="50000">50k</option>
								<option value="60000">60k</option>
								<option value="70000">70k</option>
								<option value="80000">80k</option>
								<option value="90000">90k</option>
								<option value="100000">1lac</option>
								<option value="1000000">10lac</option>
								<option value="2000000">20lac</option>
								<option value="3000000">30lac</option>
								<option value="4000000">40lac</option>
								<option value="5000000">50lac</option>
								<option value="6000000">60lac</option>
								<option value="7000000">70lac</option>
								<option value="8000000">80lac</option>
								<option value="9000000">90lac</option>
		  					</select> 
						<br/>
						to
						<br/>
							<select id="maxPricePG">
							<option value="any">Any</option>
							  <option value="1000">1k</option>
							  <option value="10000">10k</option>
							  <option value="20000">20k</option>
							  <option value="30000">30k</option>
							  <option value="40000">40k</option>
							  <option value="50000">50k</option>
							  <option value="60000">60k</option>
							  <option value="70000">70k</option>
							  <option value="80000">80k</option>
							  <option value="90000">90k</option>
							  <option value="100000">1lac</option>
							  <option value="1000000">10lac</option>
							  <option value="2000000">20lac</option>
							  <option value="3000000">30lac</option>
							  <option value="4000000">40lac</option>
							  <option value="5000000">50lac</option>
							  <option value="6000000">60lac</option>
							  <option value="7000000">70lac</option>
							  <option value="8000000">80lac</option>
							  <option value="9000000">90lac</option>
							</select>
						</td>
						<td>
							Posted By
						</td>
						
						<td>
							<select id="posterTypePG">
							  <option value="any" selected="selected">Any</option>
							  <option value="owner">Owner</option>
							  <option value="broker">Broker</option>
							</select>
						</td>
					
					</tr>
				
			
			</table>
		</form>
		
	</div>


    <div class="header" style="position: absolute;bottom: 0; padding:0;margin:0;background-color: rgba(0,0,0,0.5); width:100%; height:50px" >
    
	<table>
	
		<tr>
			
			<td> 
				<a class="footerLink" href="aboutUs.php">
					About Us
				</a>
			</td>
		
		
			<td width="70px">
			</td>
		
			
			<td>
				<a class="footerLink" href="tnc.html">
					Terms and Conditions
				</a>
			</td>
	
			
			<td width="70px">
			</td>
	
		
			<td>
				<div class="fb-like" data-href="https://www.facebook.com/100acresdotcom?fref=ts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true">
				</div>
			</td>
	
	
			<td width="70px">
			</td>
			
			
			<td>
				<a class="footerLink" href="Feedback.html">
					Feedback
				</a>
			</td>
			
			
			<td width="70px">
			</td>
			
			
			<td>
				 <a class="footerLink" href="Report.html">
				 	Report a problem
				 </a>
			</td>
			
			
			<td width="70px">
			</td>
			
			
			<td>
				<a class="footerLink" href="PrivacyPolicy.html">
					Privacy Policy
				</a>
			</td>
			
			<td width="70px">
			</td>
			
			
			<td>
				<div style="color:white">
					&#169;100acres.com
				</div> 
			</td>
			
		</tr>
	</table>
</div>
</body>
</html>


