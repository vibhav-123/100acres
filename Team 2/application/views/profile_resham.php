<html>
	<head>
		<title>
		Personal Homepage
		</title>
	
	</head>
	
	<body>
	
	<!---------------------------- Main Div Started ------------------------------>
		<div id="mainDiv" style="width:100%;height:100%">
		
			<div id="heading" style="width:100%;text-align: center">
				<h1> Profile Page</h1>
			</div>
			
				<!---------------------------- Personal Information Div Started ------------------------------>
			<div id="personal info1" >
				<fieldset >
					<legend> Personal Information </legend>
				<?php
					   
					echo "<table style='width: 500px;table-layout: fixed; margin: 0 auto; '>";
					echo "<tr><td>Name</td><td>".$personalInformation[0]->name."</td></tr>";
					echo "<tr><td>Email</td><td>".$personalInformation[0]->email."</td></tr>";
					echo "<tr><td>Contact Number</td><td>".$personalInformation[0]->contact."</td></tr>";
					echo "<tr><td>Account Created On</td><td>".$personalInformation[0]->CREATED_ON."</td></tr>";
					echo "<tr><td>Account Updated On</td><td>".$personalInformation[0]->MODIFIED_ON."</td></tr>";
					echo "<tr>
						<td  style='text-align: center'>
							<input type='button' id='editPersonal' value='Edit Information' class='editPersonal'>
						</td>
						<td  style='text-align: left'>
							<input type='button' id='editPersonal' value='Change Password' class='editPersonal'>
						</td>
						</tr>";
					echo "</table>";  
				?> 
				</fieldset>
			</div>
			<!----------------------- Personal Information Div Ended---------------- -->
				<br> <br><br>
				
				<!----------------------- My Postings Div Starts---------------- -->
				<div id="myAdvts" >
				<fieldset >
					<legend> My Postings </legend>
				<?php			
						
					if(!empty($postedAds["resultForSeller"]))
					{
						$sno=1;
						echo "<table style='width: 100%;   text-align: center' cellspacing='5px'>";
						echo"<tr ><th style='text-align:left' colspan=5 > Properties to Sell</th></tr><tr></tr><tr></tr>";
						echo "<tr>
						<th width=50px>Serial No.</th>
						<th> Posting Title </th>
						<th> Address </th>
						<th> Total Views </th>
						<th > Created On </th>
						</tr><tr></tr><tr></tr>";
						foreach($postedAds["resultForSeller"] as $row)
						{
							echo "<tr>";
							echo "<td>".$sno."</td>";
							echo "<td>".$row->title."</td>";
							echo "<td>".$row->address."</td>";
							echo "<td>1100</td>";
							echo "<td>".$row->CREATED_ON."</td>";
							echo "<td><a href='http://www.100acres.com'> Go to Advertisement</a></td>";
							echo "<td><a href='http://www.100acres.com'> Edit Advertisement</a></td>";
							echo "</tr>";
							$sno=$sno+1;
							
						}					
						echo "</table>";
					}
					
					if(!empty($postedAds["resultForRental"]))
					{
						$sno=1;
						echo "<hr><table style='width: 100%;   text-align: center' cellspacing='5px'>";
						echo"<tr ><th style='text-align:left' colspan=5 > Properties to rent</th></tr><tr></tr><tr></tr>";
						echo "<tr>
						<th width=50px>Serial No.</th>
						<th> Posting Title </th>
						<th width=10px> Address </th>
						<th> Total Views </th>
						<th > Created On </th>
						</tr><tr></tr><tr></tr>";
						foreach($postedAds["resultForRental"] as $row)
						{
							echo "<tr>";
							echo "<td>".$sno."</td>";
							echo "<td>".$row->title."</td>";
							echo "<td >".$row->address."</td>";
							echo "<td>1100</td>";
							echo "<td>".$row->CREATED_ON."</td>";
							echo "<td><a href='http://www.100acres.com'> Go to Advertisement</a></td>";
							echo "<td><a href='http://www.100acres.com'> Edit Advertisement</a></td>";
							echo "</tr>";
							$sno=$sno+1;
						}					
						echo "</table>";					
					}

					if(!empty($postedAds["resultForPG"]))
					 {
					 	$sno=1;
					 	echo "<hr><table style='width: 100%;   text-align: center' cellspacing='5px'>";
						echo"<tr><th style='text-align:left' colspan=5 > Properties for PG</th></tr><tr></tr><tr></tr>";
						echo "<tr>
						<th width=50px>Serial No.</th>
						<th> Posting Title </th>
						<th> Address </th>
						<th> Total Views </th>
						<th > Created On </th>
						</tr><tr></tr><tr></tr>";
						foreach($postedAds["resultForPG"] as $row)
						{
							echo "<tr>";
							echo "<td>".$sno."</td>";
							echo "<td>".$row->title."</td>";
							echo "<td>".$row->address."</td>";
							echo "<td>1100</td>";
							echo "<td>".$row->CREATED_ON."</td>";
							echo "<td><a href='http://www.100acres.com'> Go to Advertisement</a></td>";
							echo "<td><a href='http://www.100acres.com'> Edit Advertisement</a></td>";
							echo "</tr>";
							$sno=$sno+1;
						}					
						echo "</table>";					 
					}
					     
?>

								
				</fieldset>
			</div>
		</div>
	<!---------------------------- Main Div Ended ------------------------------>

	
		
		</body>
</html>
