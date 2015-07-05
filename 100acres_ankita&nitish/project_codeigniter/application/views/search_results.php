<!DOCTYPE html>
<html>
<head>
	<title>Search results</title>
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/search_details.css">
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/message_section.css">
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/common.css">
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/footer.css">
</head>
<body>
	<div id="container">
	   <div id="header">
			<h1>100acres.com</h1>
			<a href="http://www.100acres.com/index.php/welcome/check_session">Home</a>
			<a href="http://www.100acres.com/index.php/welcome/sell_property">Sell/Rent property</a>
			<a>1800 41 99099</a>
		</div>
		<?php if(!$result['properties']&&$flag==true){?>
		<div id="content">
			<div id='section'>
			<p>Sorry,no results found.!!!</p>
			<br>
			<p>For posting your property free,<a href="http://www.100acres.com/index.php/welcome/sell_property">click </a>here</p>
			</div>
	    	<img src="http://www.100acres.com/images/oops.jpg" height="260" width="260" id="oops">
        <?php }
			 else{
			foreach ($result['properties'] as $row): ?>
			<div class="wrapper">
				<div class="descBox">
					<div class="address">
					    <h2><?php echo "Rs".$row['price']." ".$row['bedroom']."BHK,"." ".$row['type']." area in ".$row['city'];?></h2>
					</div>
					<div class="desc">
						<div class="propImage">
						     <?php echo "<img src='http://www.100acres.com/upload/".$row['imagepath']."' class='propImageTag' >"  ?>
						</div>
						<div class="propDesc">
							<div class="headingDescription">
							<h3>Built-up area: <?php echo $row['area']." ".$row['unit']; ?></h3>
							</div>
							<div class="headingDescription">
							 <h3>Posted on: <?php echo $row['posted_on'] ?></h3>
							</div>
							<div class="headingDescription">
							<form method="post" action="http://www.100acres.com/index.php/welcome/view_property_detail" target="_blank">
							<input type="hidden" name="pid" value="<?php echo $row['pid']; ?>"/>

							<button type="submit" title="view" id="view">View in detail</button>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<?php endforeach; 
		 echo "<br>";

		if($flag==true)
		{
			$total_records = $result['count_properties'];
		}	
		else
			$total_records = $count_allrows; 
		$total_pages = ceil($total_records / 4.0); 
		if($total_pages>1)
		{
		echo "<div id='page_links'>"."------------------------------------------------------------------------------------"."Go to: First ";
		for ($i=1; $i<=$total_pages; $i++) { 
		if($flag==true) 
	     echo "<a href='http://www.100acres.com/index.php/welcome/properties_posted_by_user?page=".$i."&owner=".$row['user_id']."'>".$i.">"."</a> "; 
		else	
		echo "<a href='http://www.100acres.com/index.php/welcome/search_property?page=".$i."&purpose=".$purpose."&type=".$type."&city=".$city."&locality=".$locality."&minprice=".$minprice."&maxprice=".$maxprice."'>".$i.">"."</a> "; 
	
    	}
    	echo " Last-------------------------------------------------------------------------------"."</div>";
    	}?>
    
		<?php include_once("footer.php");}?>
    </div>

</body>
</html>