<html>
<head>
   <style>
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
      <h1>Toll free number: 1800 41 99099</h1>
      </body>
      </html>