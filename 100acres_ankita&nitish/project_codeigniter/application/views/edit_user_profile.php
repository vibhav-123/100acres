<html>
<head>
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/message_section.css">
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/common.css">
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/footer.css">
</head>
<body>
		<div id="container">
			<div id="header">
			    <h1>100acres.com</h1>
				<a href="http://www.100acres.com/index.php/welcome/check_session">HOME</a>
				<a href="http://www.100acres.com/index.php/welcome/sell_property">SELL/RENT PROPERTY</a>
				<a href="#">1800 41 99099</a>
			</div>
			<div id="content">
				<img src="http://www.100acres.com/images/home.jpg" width="100%" id="img1">
				<div id="section">
					<form name="edit_profile" id="edit_profile" action="http://www.100acres.com/index.php/welcome/save_profile_after_edit" method="POST">
						<table id="tbl">
						<tr>
							<td>Name:</td>
							<td><?php print $name; ?></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><?php print $email; ?></td>
						</tr>
						<tr>
							<td>Contact No:</td>
							<td><input type="tel" name="contact_no" <?php echo "value='$contact_no'"; ?> ></td>
						</tr>
						<tr>
							<td>Registered On:</td>
							<td><?php print $created_on; ?></td>
						</tr>
						<tr>
							<td></td><td><input type="submit" name="submit" value="Update"></td>
						</tr>
						</table>
			        </form>
                </div>
            </div>
            <?php include_once('footer.php');?>
	        </div>
</body>
</html>


