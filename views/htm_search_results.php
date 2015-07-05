<html> 
<head>
<link rel="stylesheet" type="text/css" href="http://www.100acres.com/css/styling.css">

</head>
<body>


<table border=0 width=100%  align=center cellpadding=5>
<tr align=center>
<td align=left>
</tr>

<?php
if(isset($temp_numrows))
{
	$rowsPerPage = 3;	// how many rows to show per page
	$maxpage = ceil($temp_numrows/$rowsPerPage);	//total number of pages
	$pagenum=1;
	for(;$pagenum<=$maxpage;$pagenum++)
	{
		$offset = ($pagenum - 1) * $rowsPerPage;
		
		echo '<a href="http://www.100acres.com/index.php/searching/findSearchResults1?offset='.$offset.'&flag=0"target=iframe2>'.$pagenum.'</a>'.'&nbsp&nbsp&nbsp';
	}
}
echo '<hr>';
?>


<?php
/*if(isset($temp_array2))
{
	foreach ($temp_array2 as $obj_key =>$row_num)
	{
?>
<tr>
<td><?php echo '<a href="http://www.100acres.com/index.php/welcome/search_details_controller?prop_id='.$temp_array2[$obj_key]['pid'].'&flag=1"target=iframe2>'?>
<table border=1 width=70% style="table-layout:fixed;">
<tr>
<td rowspan=2><center><?php echo '<img height="100" width="120" src="'.$temp_array2[$obj_key]['image'].' ">';?></center>
<td style="word-wrap: break-word;"><font face="arial" size=2><b>Address:</b><?php echo $temp_array2[$obj_key]['address']; //echo $temp_array[$obj_key]['email'];?>
</tr>
<tr>
<td style="word-wrap: break-word;"><font face="arial" size=2><b>Price:</b><?php echo $temp_array2[$obj_key]['price'];?>
</tr>
</table>
</a><hr>
</tr>
<center>
<?php
	}
}*/
?>


<?php
if(isset($temp_array))
{
	foreach ($temp_array as $obj_key =>$row_num)
	{
?>
<tr>
<td><?php echo '<a href="http://www.100acres.com/index.php/searching/display_search_details?prop_id='.$temp_array[$obj_key]['pid'].'&flag=1" target=iframe2>';?>
<table border=1 width=70% style="table-layout:fixed;">
<tr>
<td rowspan=2><center><?php echo '<img height="100" width="120" src="'.$temp_array[$obj_key]['image'].' ">';?></center>
<td style="word-wrap: break-word;"><font face="arial" size=2><b>Address:</b><?php echo $temp_array[$obj_key]['address'];?>
</tr>
<tr>
<td style="word-wrap: break-word;"><font face="arial" size=2><b>Price:</b><?php echo $temp_array[$obj_key]['price'];?>
</tr>
</table>
</a><hr>
</tr>
<center>
<?php
	}
}
?>


<?php 
if((isset($temp_numrows)))
{
?>
<div id="column2" style="height:88%;border=1px solid black;">
     <center><iframe id="iframe1" name="iframe2" src="http://www.100acres.com/application/views/redirection_message.php" height="450" width="700" scrolling=auto border=0px></iframe></center>
</div>
<?php
}
?>

</center>
</table>
</body>
</html>
