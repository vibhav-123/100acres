<?php
$cook_obj=new cookie1;
$id=$cook_obj->retId();
?>
<?php if(!$id) { ?>
<div class="title1" id="title1">
<a href="http://www.100acres.com/mainSite_dev.php/login/register"><img src="http://www.100acres.com/images/register.png" align="right"
     width="100" height="46" border="0"></a>
<a href="http://www.100acres.com/mainSite_dev.php/login"><img src="http://www.100acres.com/images/login.png" align="right"
     width="100" height="46" border="0"></a></div>

<?php } 
else{ ?>
<div class="logout" id="logout">
<a href="http://www.100acres.com/mainSite_dev.php/login/logout"><img src="http://www.100acres.com/images/logout.png" align="right"
     width="72" height="46" border="0"></a></div>
<?php } ?>
