<html> 
<head>
<link rel="stylesheet" type="text/css" href="http://www.100acres.com/css/styling.css">
</head>
<body>
<!--<div style="height:105%;border:0px solid #BDBDBD"> -->
<table border=0 width=100%  align=center cellpadding=5>
<tr align=center>
<td align=left><font face="Calibri"size=5>Property Details<br><hr>
</tr>
<?php
$recipient='p.gpt10@gmail.com';

if(isset($temp_array1))
{
?>

<tr>
<td><font face="arial" size=3 color=green><center><b>Price: Rs.<b><?php echo $temp_array1[0]['price'];?></center><hr>
</tr>
<tr>
<td><font face="arial" size=2><center><b>User Type:</b><?php echo $temp_array1[0]['user_type'];?></center>
</tr>
<tr>
<td><font face="arial" size=2><center><?php echo '<img height="140" width="160" src="'.$temp_array1[0]['image'].' ">';?></center>
</tr>
<tr>
<td><font face="arial" size=2><center><b>City:</b><?php echo $temp_array1[0]['city'];?></center>
</tr>
<tr>
<td><font face="arial" size=2><center><b>Address:</b><?php echo $temp_array1[0]['address'];?></center>
</tr>
<tr>
<td><font face="arial" size=2><center><b>Description:</b><?php echo $temp_array1[0]['description'];?></center>
</tr>
<?php
if($temp_array1[0]['prop_type']=="Residential")
	echo '<tr><td><font face="arial" size=2><center><b>Bedrooms:</b>'.$temp_array1[0]['bedrooms'].'</center></tr>';
else
	echo '<tr><td><font face="arial" size=2><center><b>Area:</b>'.$temp_array1[0]['area'].' Sq.Ft.</center></tr>';
}
?>

</table>




<script src="http://www.100acres.com/javascripts/validation_file.js"></script>

</body>
</html>
