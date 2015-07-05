<?php 
	$res=$this->db->query('Select * from PostSell');
	$result=$res->result();
?>


<html>
	<head>
		<link type='text/css' href='http://www.100acres.com/styles/styleSheetResultPg.css' rel='stylesheet'></link>
		<title>
			Search Results
		</title>
	
	</head>
	
	<body >
	<?php
		
	foreach($result as $row)
	{
		$date=date('M j Y', strtotime($row->CREATED_ON));
		$propDetailPath="http://www.100acres.com/property/propertyDetail/";
		echo "
				<div id='result1' class='results'>
					<div id='headerResult1' class='resultHeader' >
						<div id='headerText1' class='headerText'>&#8377 $row->price  <font color='blue'>$row->title</font>
						</div>
					</div>
				<div id='middleDiv1' class='middleDiv'>
					<div id='imageContainer' class='imageContainer'>
						<img src='http://www.100acres.com/$row->imageURL ' class='resultImage'>
					</div>
					<div id='resultDescription1' class='resultDescription'>
						<b> Built-up Area :</b> $row->area  sq m<br><hr>
						<b> Property Type :</b> $row->propType<br>
						<br>
						<b> Highlights :</b> $row->builtType/Building built in $row->year <br><br>
						<b> Description :</b> $row->description<br><br><br>
					</div>
				</div>
				<div id='footerResult1' class='footerResult'>
					<table width='100%' style='table-layout: fixed'>
						<tr><td><b> Owner :</b> Resham Wadhwa<br></td><td><b> Posted On :</b> $date  <br>
						</td></tr>
					</table><br>
					<table width='100%' style='table-layout: fixed'>
						<tr >
							<td style='text-align: center'>
								<input type='button' value='View Phone Number' class='button'>
							</td>
							<td style='text-align: center'>
								<input type='button' value='Go To Detail Page' class='button' onclick='location.href=$propDetailPath.$row->postID'>
							</td>
							<td style='text-align: center'>
								<a href='http://www.100acres.com/report/$row->postID'><font color='red'>Report a problem</font></a>
							</td>
							<td style='text-align: center'>
								<a href='javascript:shortlist($row->postID)'><img src='http://www.100acres.com/images/unfilled_star.png' height='25px' width='25px'><font color='green'>Shortlist</font></a>
							</td>
						</tr>
						<tr></tr>
					</table>
				</div>
			</div>
		<br>";
	}
		
	?>
		
	</body>
</html>