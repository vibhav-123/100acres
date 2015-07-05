<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <script type="text/javascript" src="/public/js/posting_form.js"></script>
  <title>Registration Form</title>
  
  <link rel="stylesheet" href="/public/CSS/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
  <div id="header">
    <div style="float:left;margin-left:50px;margin-top:10px">100acres.com </div>
      <?php

    //print_r($logged_in);
  if(isset($logged_in) && $logged_in == true)
  {?>
    <div style="float:right;position:relative">  
        <div id="header_user"><p><?php echo $this->session->userdata['email'];?></p><a href="http://www.100acres.com/index.php/login/logout">Logout</a> </div>
    </div>
    
    <?php } 
  else
  {?> <div style="float:right;position:relative">  
        <div style="float:right;margin-top:15px;margin-right:50px"><a href="http://www.100acres.com/index.php">Login</a> </div>
    </div>
  <?php }
  ?>
  </div>
  
  <div class="container">
    <section class="register">
      <h1><font size="4%">Basic Property Details</font><br><font size="2%">Start posting your Property and add Property features</font></h1>
      <form method="post" enctype="multipart/form-data">
      <div class="reg_section personal_info">
      <h3>I am: </h3><br>
      <label><input type="radio" name="type" value="owner" checked="checked" >Owner</label>
      <label><input type="radio" name="type" value="broker">Broker</label>
      <label><input type="radio" name="type" value="builder">Builder</label><br><br>
        
      <h3>I want to: </h3><br>
      <label><input type="radio" name="type1" value="sell" checked="checked">Sell</label>
      <label><input type="radio" name="type1" value="rent">Rent/Lease Out</label><br><br>

      
      <h3>Type of Property :</h3>
      <select
            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
         onChange="df.togglePropertyType(this,  this.value);"  onblur="df.togglePropertyType(this,  this.value);"  name="type2" required='true' id='TypeId' succ='true' autocomplete="off" style="width:auto"; >
      <option selected="selected" value="0" disabled >Select</option>
      
        
      <optgroup value='' class='boldclass' disabled  label='Residential'></optgroup>
        <option value="Residential Apartment" rescom='R' >Residential Apartment </option><option value="Residential Land" rescom='R' >Residential Land </option><option value="Independent House/Villa " rescom='R' >Independent House/Villa </option><option value="Independent/Builder Floor" rescom='R' >Independent/Builder Floor </option><option value="Farm House" rescom='R' >Farm House </option><option value="Studio Apartment " rescom='R' >Studio Apartment </option><option value="Serviced Apartments" rescom='R' >Serviced Apartments </option><option value="Other" rescom='R' >Other </option>
        
      <optgroup value='' class='boldclass'  disabled label='Commercial'></optgroup>
              <option value="Commercial Office/Space " rescom='C'>Commercial Office/Space </option>
              <option value="Commercial Shops" rescom='C'>Commercial Shops </option>
              <option value="Commercial Land/Inst. Land " rescom='C'>Commercial Land/Inst. Land </option>
              <option value="Commercial Showrooms " rescom='C'>Commercial Showrooms </option>
              <option value="Agricultural/Farm Land " rescom='C'>Agricultural/Farm Land </option>
              <option value="Industrial Lands/Plots " rescom='C'>Industrial Lands/Plots </option>
              <option value="Factory" rescom='C'>Factory </option>
              <option value="Ware House" rescom='C'>Ware House </option>
              <option value="Office in IT Park" rescom='C'>Office in IT Park </option>
              <option value="Hotel/Resorts" rescom='C'>Hotel/Resorts </option>
              <option value="Guest-House/Banquet-Halls" rescom='C'>Guest-House/Banquet-Halls </option>
              <option value="Space in Retail Mall" rescom='C'>Space in Retail Mall </option>
              <option value="Office in Business Park" rescom='C'>Office in Business Park </option>
              <option value="Business center" rescom='C'>Business center </option>
              <option value="Manufacturing" rescom='C'>Manufacturing </option>
              <option value="Cold Storage" rescom='C'>Cold Storage </option>
              <option value="Time Share" rescom='C'>Time Share </option>
              <option value="Other" rescom='C'>Other </option>
        
        
      
        

    </select><br>

      

<h3>City:</h3>
<select
            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
         onChange="df.togglePropertyType(this,  this.value);"  onblur="df.togglePropertyType(this,  this.value);"  name="type3" required='true' id='TypeId' succ='true' autocomplete="off" style="width:auto"; >
      <option selected="selected" value="0" disabled >Select</option>
      
        
    
        <option value="Delhi" >Delhi</option><option value="Mumbai">Mumbai</option><option value="UP" rescom='R' > UP</option><option value="Punjab">Punjab</option><option value="Haryana" >Haryana</option><option value="J&K" >J&K</option>
</select> <br>


<h3>Address: </h3><input type="text" name="type4" value="" placeholder="Your Address" required></select><br>



<h3>Bedrooms:</h3>
<select
            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
         onChange="df.togglePropertyType(this,  this.value);"  onblur="df.togglePropertyType(this,  this.value);"  name="type5" required='true' id='TypeId' succ='true' autocomplete="off" style="width:auto"; >
      <option selected="selected" value="0" disabled >Select</option>
      
        
    
        <option value="1" >1</option><option value="3">2</option><option value="2" rescom='R' > 3</option><option value="4">4</option><option value="5" >5</option>
</select> <br>


<h3>
Expected Price:</h3> 
<div id="eight" style="display:inline"> <label>Crores</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label>Lacs</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label>Thousands</label></div><br><select
            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
         onchange="changetextbox();getSelectedValue(this.value);" onblur="df.togglePropertyType(this,  this.value);"  required='true' name="type7" id='crore' succ='true' autocomplete="off" style="width:auto"; >
      <option selected="selected" value="100" disabled>Select</option>
      
        
            <?php
            for ($i=0;$i<=99; $i++)
            {
            ?>
             <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php
             }
             ?>

             <option value="99+">99+</option>
            
</select> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<select
            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
         onchange="getSelectedValuelacs(this.value)" onblur="df.togglePropertyType(this,  this.value);"  required='true' name="type7" id='lacs' succ='true' autocomplete="off" style="width:auto"; >
      <option selected="selected" value="0" disabled>Select</option>
      
        
    
         <?php
            for ($i=0;$i<=99; $i++)
            {
            ?>
             <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php
             }
             ?>
</select> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select
            onKeyup="if(this.value!='0') df.togglePropertyType(this,  this.value);"
         onchange="getSelectedValuethousands(this.value)"  onblur="df.togglePropertyType(this,  this.value);"  required='true' name="type8" id='thousands' succ='true' autocomplete="off" style="width:auto"; >
      <option selected="selected" value="0" disabled>Select</option>
      
        
    
       <?php
            for ($i=0;$i<=99; $i++)
            {
            ?>
             <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php
             }
             ?>

</select> <br>


<h3>Final price </h3><br><input type="text" id="textboxid" name="type9" required='true' onkeypress="return isNumber(event)"><br>

<h3>Enter price per unit area</h3><br><input type="text" id="textboxid" name="type10" required='true' onkeypress="return isNumber(event)"><br>




    <h3>Select image to upload:</h3>
    <input type="file" name="fileToUpload" id="fileToUpload" required='true'>


<!--     <input type="submit" value="Upload Image" name="submit">
 -->
<br/>
<p class="submit"><input type="submit" name="commit" value="Submit"></p>
      </form>
    </section>
  </div>

  

</body>
</html>