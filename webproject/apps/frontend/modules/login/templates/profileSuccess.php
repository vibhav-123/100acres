<html>
<head>
<title>Welcome</title>
</head>
<body>
<div class="dandi" id="dandi">
<img src="http://www.100acres.com/images/dandifinal.png" width=1293px />
</div>

<div class="icon" id="icon">
<b>100acres.com</b><br>
</div>
<div class="icon2" id="icon2">
India's No 1 Property Portal
</div>
<div class="login" id="login">

<a href="http://www.100acres.com/frontend_dev.php/login/logout"><img src="http://www.100acres.com/images/logout.png" height="60px" width="60px" align="right"/></a>
</div>
<div class="text" id="text">
<!--<b>India's largest property<br>
marketplace covering almost all<br>
the major cities and a large number of<br>
agents and developers.<br></b>-->
<center>BUY</center>
</div>
<div class="textsell" id="textsell">
<center>SELL</center>
</div>
<div class="textrent" id="textrent">
<center>RENT</center>
</div>
<div class="search" id="search" style="visibility: hidden">
<form action="http://www.100acres.com/frontend_dev.php/search/index" method="POST">
<font color="white">FND A PROPERTY</font><br>
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
   <option value="one">one</option>
   <option value="two">two</option>
   <option value="three">three</option>
</select>
<input name="Keywords" placeholder="Keywords" id="displayValue" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<br>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue2').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">one</option>
   <option value="two">two</option>
   <option value="three">three</option>
</select>
<input name="MinPrize" placeholder="MinPrize" id="displayValue2" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<br>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue3').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">one</option>
   <option value="two">two</option>
   <option value="three">three</option>
</select>
<input name="Maxprize" placeholder="Maxprize" id="displayValue3" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<br>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue4').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">one</option>
   <option value="two">two</option>
   <option value="three">three</option>
</select>
<input name="Bedrooms" placeholder="Bedrooms" id="displayValue4" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<input type="submit" value="SEARCH"/>
</form>
</div>
</div>
<div class="findproperty" id="findproperty" onclick="klikaj('search','findproperty','search1')">
<font color="white">FND A PROPERTY</font><br>
</div>
</div>
<div class="search1" id="search1" style="visibility: hidden" >
<a href="home/search"><font color="black">SEARCH</font></a><br>
</div>
</body>
</html>
<center><h1><?php echo "WELCOME ";?>
<?php  echo  strtoupper($_COOKIE["usernaam"]);?></h1></center>

<?php $email=$_COOKIE["email"]; ?>
<div class="button" id="button" align="center">
<h1><a href="http://www.100acres.com/frontend_dev.php/posting/index"><font color="brown">Sell/Rent A property FREE</font></a></h1>

</body>

</html>
