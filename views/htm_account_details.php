<html> 
<head>

</head>
<body>
<hr>
<table border=0 width=100%   cellpadding=5>

<?php
if($temp_session_details!="Logged in for the first time.")
{
if(isset($temp_session_details))
{	
?>
<tr>
<td style="word-wrap: break-word;"><font face="calibri" size=4><b><u>Account Details
</tr>
<tr>
<td style="word-wrap: break-word;"><font face="arial" size=2><b>Last Login Date:<td><font face="arial" size=2></b><?php echo $temp_session_details[0]['login_date'];?>
</tr>
<tr>
<td style="word-wrap: break-word;"><font face="arial" size=2><b>Last Login Time:<td><font face="arial" size=2></b><?php echo $temp_session_details[0]['login_t'];?>
</tr>
<tr>
<td style="word-wrap: break-word;"><font face="arial" size=2><b>Last Logout Date:<td><font face="arial" size=2></b><?php echo $temp_session_details[0]['logout_date'];?>
</tr>
<tr>
<td style="word-wrap: break-word;"><font face="arial" size=2><b>Last Logout Time:<td><font face="arial" size=2></b><?php echo $temp_session_details[0]['logout_t'];?>
</tr>
<tr><td colspan=2><hr></tr>

<?php
}
}
else
{

	echo "Logged in for the first time. No login details stored yet.<br><br>";
}
?>




<tr>
<td style="word-wrap: break-word;"><font face="calibri" size=4><b><u>Property Details<br>
</tr>
<tr>
<td colspan=2>
<table border=0 width=100% style="table-layout:fixed;">
<tr>
<td style="word-wrap: break-word;"><font face="arial" size=2><b><u>Sell/Rent<b>
<td style="word-wrap: break-word;"><font face="arial" size=2><b><u>Property Type<b>
<td style="word-wrap: break-word;"><font face="arial" size=2><b><u>City<b>
<td style="word-wrap: break-word;"><font face="arial" size=2><b><u>Price<b>
<td style="word-wrap: break-word;"><font face="arial" size=2><b><u>Post Time<b>
</tr>
</table>
<hr>
</tr>
<?php
if(isset($temp_property_details))
{
	foreach ($temp_property_details as $obj_key =>$row_num)
	{
?>

<tr>
<td colspan=2>
<?php echo '<a href="http://www.100acres.com/index.php/searching/display_search_details?prop_id='.$temp_property_details[$obj_key]['pid'].'&flag=0">';?>
<table border=0 width=100% style="table-layout:fixed;">
<tr>
<td style="word-wrap: break-word;"><font face="arial" size=2><?php echo $temp_property_details[$obj_key]['sell_rent'];?> 
<td style="word-wrap: break-word;"><font face="arial" size=2><?php echo $temp_property_details[$obj_key]['prop_type'];?>
<td style="word-wrap: break-word;"><font face="arial" size=2><?php echo $temp_property_details[$obj_key]['city'];?>
<td style="word-wrap: break-word;"><font face="arial" size=2><?php echo $temp_property_details[$obj_key]['price'];?>
<td style="word-wrap: break-word;"><font face="arial" size=2><?php echo $temp_property_details[$obj_key]['post_time'];?>
</tr>

</table>
</a><hr>

</tr>
<?php
	}
}
?>


</center>
</table>
</body>
</html>
