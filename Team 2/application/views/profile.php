<?php
	if(empty($postedAds["resultForSeller"]))
		echo "hey";
	else
		echo "no";
?>

<html>
	<head>
		<title>
		Personal Homepage
		</title>
		<link type="text/css" href="http://www.100acres.com/styles/profile.css" rel="stylesheet"></link>
	</head>
	
	<body>
	
	<!---------------------------- Main Div Started ------------------------------>
		<div id="mainDiv" style="width:100%;height:100%">
		
			<div id="heading" style="width:100%;text-align: center">
				<h1> Profile Page</h1>
			</div>
			<div id="personal info1" >
				<fieldset >
					<legend> Personal Information </legend>
							<table style="width: 500px;table-layout: fixed; margin: 0 auto; ">
								<tr>
									<td>Name</td>
									<td> Vikram </td>
								</tr>
								<tr>
									<td>Email</td>
									<td> vikram.chug@yahoo.co.in </td>
								</tr>
								<tr>
									<td>Contact Number</td>
									<td> 09779090327 </td>
								</tr>
								<tr>
									<td>Password</td>
									<td> ******** </td>
								</tr>
								<tr>
									<td colspan="2" style="text-align: center">
										<input type="button" id="editPersonal" value="Edit Information" class="editPersonal">
									</td>
								</tr>
							</table>
				</fieldset>
			</div>
			<!----------------------- Personal Information Div Ended---------------- -->
				<br> <br><br>
				
				<!----------------------- My Advertisements Div Starts---------------- -->
				<div id="myAdvts" >
				<fieldset >
					<legend> My Advertisements </legend>
							<table style="width: 1100px;table-layout: fixed;   text-align: center" >
								<tr>
									<th width=50px>Serial No.</th>
									<th> Property Nickname </th>
									<th> Address </th>
									<th> Total Views </th>
									<th > Created On </th>
								</tr>
								<tr>
									<td>1</td>
									<td>B-8 Property</td>
									<td>B-8 Sector 132 Noida</td>
									<td> 1100 </td>
									<td>29-06-2015</td>
									
									<td><a href="">Go to Advertisement</a></td>
									<td><a href="">Edit Advertisement</a></td>
								</tr>
								<tr>
									<!-- <td colspan="2" style="text-align: center">
										<input type="button" id="editPersonal" value="Edit Information" class="editPersonal">
									</td> -->
								</tr>
							</table>
				</fieldset>
			</div>
		</div>
	<!---------------------------- Main Div Ended ------------------------------>	
	</body>
</html>