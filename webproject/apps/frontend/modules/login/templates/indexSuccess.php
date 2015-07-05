<html>
<head>
	<style>
.errmes{color:red;display:none;}
.showerr{display:block;}

    .menuheader{
   
   height: 30px;
   margin: 42px 0 0;
   width: 530px;
   position:relative;
   color:white;
   left: 800px;
top:0px;
   }
   .menuheader a{
   color: #EEEEEE;
   font-size: 15px;
   font-weight: bold;
   padding: 8px 12px;
   }  
.menuheader a:hover{
   background: #1E90FF url(hover-menu-items.png) repeat-x;
}
.fb
{
   top:200px;
   left: 650px;
   position: absolute;
   background-color: blue;
   border:none;
   color:white;
   -webkit-border-radius:0px 3px 3px 0px;
   cursor:pointer;
   height: 50px;
   text-transform: uppercase;
   width: 250px;
}
div.table1{
	position: relative;
	top:50px;
}
   </style>
	</head>
<body>
	<div class="dandi" id="dandi">
<img src="http://www.100acres.com/images/dandifinal.png" width=1293px />
</div>
<div  class="menuheader"><font color="white">
         <a href="http://www.100acres.com/frontend_dev.php/"><font color="black">Home</font></a>
         <a href="http://www.100acres.com/frontend_dev.php/home/about"><font color="black">About Us</font></a>
       
         <a href="http://www.100acres.com/frontend_dev.php/home/contact"><font color="black">Contact Us</font></a></font>
      </div>
<div class="icon" id="icon">
<b>100acres.com</b><br>
</div>
<div class="icon2" id="icon2">
India's No 1 Property Portal
</div>
<?php //echo "HEllo";?>
<?php if(@$email=$_COOKIE['email']) { //echo $email; ?>
<center><h1><?php echo "WELCOME ";?>
<?php  echo  strtoupper($_COOKIE["usernaam"]);?></h1></center>

<?php $email=$_COOKIE["email"]; ?>
<div class="button" id="button" align="center">
<h1><a href="http://www.100acres.com/frontend_dev.php/posting/index"><font color="brown">Sell/Rent A property FREE</font></a></h1>

<div class="login" id="login">

<a href="http://www.100acres.com/frontend_dev.php/login/logout"><img src="http://www.100acres.com/images/logout.png" height="60px" width="60px" align="right"/></a>
</div><?php } else { //echo "not set"; ?>
<div class="login" id="login">

<a href="http://www.100acres.com/frontend_dev.php/login/index"><img src="http://www.100acres.com/images/login.jpg" height="60px" width="60px" align="right"/></a>
</div>
<?php }?>
<form action="http://www.100acres.com/frontend_dev.php/login/login_api" method="POST" id="form2" onSubmit="return Validate()" >
<div class="loginform" id="loginform">
<h1>Login</h1>
<label>
<span><font color="red">*</font>Email(your username):</span><br><input id="email" type="text" name="email" />
<span id="err_email" class="errmes">Enter username</span>
</label>
<br>
<label>
<span><font color="red">*</font>Password:</span><br><input id="password" type="password" name="password" />
<span id="err_password" class="errmes">Enter password</span>
</label>
<br>
<div class="buttonsubmit" id="buttonsubmit" >
<center><input type="submit" value="Submit"></center>
</div>
<h1>OR</h1>
<h1>New User</h1><a href="http://www.100acres.com/frontend_dev.php/register/index">Click Here to register</a>
</div>
<!--<div class="buttonfb" id="buttonfb" >
<center><input type="submit" value="Login with facebook" onclick="myfunction()"></center>
</div>-->
<h1>
	<button class="fb" onclick="myfunction()">
<!--<input type="button" value="Login With Facebook" onclick="myfunction()">-->
Login With Facebook
</button>
<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>
</form>

</body>
</html>
<script type="text/javascript"> 
function checkPassword(str) { var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/; return re.test(str); } 

 function Validate()
{
		re=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!re.test(document.getElementById("email").value)) 
	{ 
	showError("err_email",1);
	//window.location.replace("http://www.100acres.com/frontend_dev.php/register/index");
	document.getElementById("email").focus(); 
	return false;
	}
	if(document.getElementById("password").value != "" /*&& form.p.value == form.pwd2.value*/) 
	{ 
		if(!checkPassword(document.getElementById("password").value)) 
		{ 
			alert("Error: password should have a capital letter, a small letter and a digit!");
			showError("err_password",1);
		//window.location.replace("http://www.100acres.com/frontend_dev.php/register/index");
		document.getElementById("password").focus(); return false; 
		}
        }

	 else {// alert("Error: Please enter the password!");
	 showError("err_password",1); 
	document.getElementById("password").focus(); return false; } 

	
  	return true; 

}
function showError(id,what)
{
	var display=what?"block":"none";
	document.getElementById(id).style.display=display;
}

 </script> 

 </script> 