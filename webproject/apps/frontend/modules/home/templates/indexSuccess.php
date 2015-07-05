<!DOCTYPE html>
<html>
<head>
   <style>
    .menuheader{
   
   height: 30px;
   margin: 42px 0 0;
   width: 530px;
   position:absolute;
   color:white;
   right: -70px;
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
.mark
{
  position: absolute;
background-color: black;
color: white;
font-weight: bold;
font-style: italic;
opacity: 0.4;
top: 200px;
}
   </style>
<meta charset="UTF-8">
<title>Insert title here</title>

<!--  <link rel="stylesheet" type="text/css" href="firstcss.css">-->
</head>

<body >
   
<div class="dandi" id="dandi">
<img src="http://www.100acres.com/images/dandifinal.png" width=1293px />
</div>
<div id="menuheader" class="menuheader"><font color="white">
         <a href="http://www.100acres.com/frontend_dev.php/"><font color="black">Home</font></a>
         <a href="home/about"><font color="black">About Us</font></a>
        
         <a href="home/contact"><font color="black">Contact Us</font></a></font>
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
</div><?php }  if (@$name=$_GET['name']) {  ?>  
<center><h1><?php echo "WELCOME ";?>
<?php  echo  strtoupper($name);?></h1></center>
<div class="button" id="button" align="center">
<h1><a href="http://www.100acres.com/frontend_dev.php/posting/index"><font color="brown">Sell/Rent A property FREE</font></a></h1>

<div class="login" id="login">

<a href="http://www.100acres.com/frontend_dev.php/login/logout"><img src="http://www.100acres.com/images/logout.png" height="60px" width="60px" align="right"/></a>
</div><?php } else { //echo "not set"; ?>
<div class="login" id="login">

<a href="http://www.100acres.com/frontend_dev.php/login/index"><img src="http://www.100acres.com/images/login.jpg" height="60px" width="60px" align="right"/></a>
</div>
<?php }?>
<!--<div class="text" id="text">
<!--<b>India's largest property<br>
marketplace covering almost all<br>
the major cities and a large number of<br>
agents and developers.<br></b>-->
<!--<center>BUY</center>
</div>
<div class="textsell" id="textsell">
<center>SELL</center>
</div>
<div class="textrent" id="textrent">
<center>RENT</center>
</div>-->
<div class="mark">
   

India's largest property

<br></br>

marketplace covering almost all

<br></br>

the major cities and a large number of

<br></br>

agents and developers
   </div>
<div class="search" id="search" style="visibility: hidden">
<form action="http://www.100acres.com/frontend_dev.php/search/index" method="POST">
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
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">Noida</option>
   <option value="two">Faridabad</option>
   <option value="three">Gurgaon</option>
</select>
<input name="Keywords" placeholder="Keywords" id="displayValue" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<br>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue2').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">10000</option>
   <option value="two">100000</option>
   <option value="three">1000000</option>
</select>
<input name="MinPrize" placeholder="MinPrize" id="displayValue2" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<br>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue3').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">10000</option>
   <option value="two">100000</option>
   <option value="three">1000000</option>
</select>
<input name="Maxprize" placeholder="Maxprize" id="displayValue3" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<br>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue4').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">1</option>
   <option value="two">2</option>
   <option value="three">3</option>
</select>
<input name="Bedrooms" placeholder="Bedrooms" id="displayValue4" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<center><input type="submit" value="SEARCH"/></center>
</form>
</div>
</div>
<div class="findproperty" id="findproperty" onclick="klikaj('search','findproperty','search1')">
<font color="white">FIND A PROPERTY</font><br>
</div>
</div>
<div class="search1" id="search1" style="visibility: hidden" >
<a href="home/search"><font color="black">SEARCH</font></a><br>
</div>
</body>
</html>
