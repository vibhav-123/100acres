


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
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
div.table1{
	position: relative;
	top:50px;
}
</style>
</head>
<body>
<!--  <table border="1" align="center">
<tr>
<td>Name*:</td>
<td><input type="text"  name="name"/></td>
</tr>
<tr>
<td>Email(your username)*:</td>
<td><input type="text"  name="email"/></td>
</tr>
<tr>
<td>Password*:</td>
<td><input type="password"  name="password"/></td>
</tr>
<tr>
<td>Mobile No.*:</td>
<td><input type="text"  name="mobile"/></td>
</tr>
</table>-->
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

<form action="http://www.100acres.com/frontend_dev.php/register/webservice" method="POST" id="form1" onSubmit="return Validate()">
<div class="loginform" id="loginform">
<h1>Create your FREE account</h1>
<label>
<span><font color="red">*</font>Name:</span><br><input id="name" type="text" name="name"  value="<?=$name;?>" />
<span id="err_name" class="errmes">Error in name</span>
</label>
<br>
<label>
<span><font color="red">*</font>Email(your username):</span><br><input id="email" type="text" name="email" />
<span id="err_email" class="errmes <?php if ($err_email){echo "showerr" ;} ?>">Error in username</span>
<font color="red"><?php if($err){echo "Already registered email";}?></font>
</label>
<br>
<label>
<span><font color="red">*</font>Password:</span><br><input id="password" type="password" name="password" />
<span id="err_password" class="errmes">Error in password</span>
</label>
<br>
<label>
<span><font color="red">*</font>Mobile No.:</span><br><input id="mobile" type="text" name="mobile" />
<span id="err_mobile" class="errmes">Error in mobile number</span>
</label>
<br>
<div class="buttonsubmit" id="buttonsubmit" >
<center><input type="submit" value="Submit" name="submit"></center>
</div>
<br>
<input type="checkbox" name="vehicle" value="Bike" id="vehicle"><font size="2" color="black">I allow 100acres & afiliates to contact me</font><br>
<span id="err_vehicle" class="errmes">Please approve</span>
</div>
</form>
</body>
</html>
<!--Client Side validation -->

<script type="text/javascript"> 
function checkPassword(str) { var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/; return re.test(str); } 

 function Validate()
{//windows.location="http://www.google.com";
	
	 if(document.getElementById("name").value == "")
	 { 
		showError("err_name",1);
	//window.location.replace("http://www.100acres.com/frontend_dev.php/register/index"); 
	//history.back();
	document.getElementById("name").focus();
	 return false;
	 } 
		re = /^\w+$/; 
/*if(!re.test(document.getElementById("name").value)) 
{ 
alert("Error: Username must contain only letters, numbers and underscores!"); 
document.getElementById("name").focus(); 
return false;
 } */
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

	re= /^(\([0-9]{3}\) |[0-9]{3})[0-9]{3}[0-9]{4}/;
	if(!re.test(document.getElementById("mobile").value)) 
	{ 
	showError("err_mobile",1);
	//window.location.replace("http://www.100acres.com/frontend_dev.php/register/index");
	document.getElementById("mobile").focus(); 
	return false;
	}
  	return true; 

}
function showError(id,what)
{
	var display=what?"block":"none";
	document.getElementById(id).style.display=display;
}

 </script> 
