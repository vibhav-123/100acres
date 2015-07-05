<html>
<head>
	<link rel="stylesheet" href="http://www.100acres.com/application/views/css/my_profile.css">
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
			<div id="content">
				<img src="http://www.100acres.com/images/home.jpg"  width="100%" id="img1">
				<div id="options">
					<a href='http://www.100acres.com/index.php/welcome/properties_posted_by_user?owner=<?php echo $user_id; ?>'>Properties posted</a>
		            <a href='http://www.100acres.com/index.php/welcome/edit_user_profile'>Update profile</a>
		        </div>
				<div id="section">
					<p>Name: <?php print $name; ?></p>
		            <p>Email: <?php print $email; ?></p>
		            <p>Contact no: <?php print $contact_no; ?></p>
		            <p>Registered on: <?php print $created_on; ?></p>
		            <br>		            
                </div>
            </div>
            <?php include_once('footer.php');?>
	        </div>
</body>
</html>


