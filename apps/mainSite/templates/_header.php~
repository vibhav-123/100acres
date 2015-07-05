<?php
$cook_obj=new cookie1;
$id=$cook_obj->retId();

$usr=new users();

if($id)
{
	$username=$usr->returnName($id);
}
else
{
	$username="Guest";
}

?>

<div class="title" id="titile">
<a href="http://www.100acres.com/mainSite_dev.php/home"><h1>100acres.com</h1>
<div class="subtitle" id="subtitle"><h4>India's No.1 Property Portal</h4></div> </a>
</div>
<div  id="hello" >
<?php
echo "Hello $username !";
?>
</div>
<div class="contact">
<a href="http://www.100acres.com/mainSite_dev.php/home/contact"><h4>Contact Us</a> | <a href="http://www.100acres.com/mainSite_dev.php/home/about">About Us</a></h4>
</div>
