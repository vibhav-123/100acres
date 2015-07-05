<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>

</style>
</head>
<body>
<?php echo $_COOKIE['email']; ?>
<form action="/frontend_dev.php/posting/postProperty"  method="post" enctype="multipart/form-data">
<div class="loginform" id="loginform">
<h1>Basic property details</h1>
<label>
<span><font color="red">*</font>I am:</span><input  type="radio" name="iam" value="owner"/>Owner
<input  type="radio" name="iam" value="Broker"/>Broker
<input  type="radio" name="iam" value="Builder" />Builder
</label>
<br>
<label>
<span><font color="red">*</font>I want to:</span><input  type="radio" name="iwantto" value="Sell"/>Sell
<input type="radio" name="iwantto" value="Rent" checked/>Rent/Lease out

</label>
<br>
<label>
<span><font color="red">*</font>Type Of Property:</span><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">Residential Appartment</option>
   <option value="two">Flat</option>
   <option value="three">Villa</option>
</select>
<input name="displayValue1" placeholder="Residential Apartment" id="displayValue" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
</label>
<label>
<span><font color="red">*</font>City:</span><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue2').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">Noida</option>
   <option value="two">Faridabad</option>
   <option value="three">Gurgaon</option>
</select>
<input name="displayValue2" placeholder="Select" id="displayValue2" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
</label>
<label>
<span><font color="red">*</font>Address:</span><br><textarea id="feedback" name="feedback">Eg. Street No.13 or Flat No.303</textarea>
</label><br>
<label>
<span>Bedroom:</span><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue3').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="one">1BHK</option>
   <option value="two">2BHK</option>
   <option value="three">3BHK</option>
</select>
<input name="displayValue3" placeholder="Select" id="displayValue3" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
</label>
<label>
<span><font color="red">*</font>Expected Price:</span><div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue4').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="1">one</option>
   <option value="2">two</option>
   <option value="3">three</option>
</select>
<input name="displayValue4" placeholder="Crores" id="displayValue4" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue5').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="1">one</option>
   <option value="2">two</option>
   <option value="3">three</option>
</select>
<input name="displayValue5" placeholder="Lakhs" id="displayValue5" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;" onchange="document.getElementById('displayValue6').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
   <option></option>
   <option value="1">one</option>
   <option value="2">two</option>
   <option value="3">three</option>
</select>
<input name="displayValue6" placeholder="Thousands" id="displayValue6" style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;" onfocus="this.select()" type="text">
<input name="idValue" id="idValue" type="hidden">
</div>
</label>

<div class="price" id="price">
OR &nbsp;&nbsp;&nbsp;Enter Your price below:<br>
<input type="text" name="price"/>
</div>
 Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="submit"/>
<div class="buttonsubmit" id="buttonsubmit">
<center>Register</center>
</div>
</div>
</form>
</body>
</html>
