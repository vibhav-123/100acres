<html>
<head>
	<title>99acres-Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://100acres.com/css/mainpage2.css">
</head>
<body>
	<div id="fb-root"></div>

	<!--here i am adding the script file..-->
	
	<script type="text/javascript" src="/js/fbscript.js"></script>
	<div id="header">
		<div id="headerbackground"></div>
		<?php
		if($logged_in == true){
		?>
		
		<a href="http://100acres.com/Registerproperty/register"><div class="loginbtn">Post a Property</div></a>
		<a href="http://100acres.com/user/logout"><div class="loginbtn">Logout</div></a>
		<?php
		} 
		else {
		// not llog in
		?><a href="http://100acres.com/user"><div class="loginbtn">Login/Register</div></a>
		<div class="fb-login-button">	
		<fb:login-button scope="public_profile,email" data-size="large" data-show-faces="true" data-auto-logout-link="true" onlogin="checkLoginState();"></fb:login-button>
		</div>
		<?php
	}
?>
		<div id="logo">
			<figure>
			<img src="/images/newlogo.png" alt="99acres logo">
			<figcaption>India's No:1 Property Portal</figcaption>
			</figure>
		</div>

		
		<div class="clear"></div>
	</div>

	<div id="content">
		<div id="banner">
			<div id="bannercontent">
				India's largest property
				marketplace covering almost all 
				the major cities and a large number of 
				agents and developers
			</div>
			<div><p>To try out our advanced search <a href="/searchbysolr">Click here!!</a></p></div>
		</div>
		<div id="formdiv">
			
			<?php 
			//$attr= array('id' => 'searchform','class'=>'forminput');
			//echo form_open('searchproperty',$attr);
			echo '<form method="get" action="Searchproperty" id="searchform">'; 
			echo "<h2>Find a Property</h2>";
			$attr=array('name'=>'keyword','class'=>'forminput','placeholder'=>'Enter keyword to search','size'=>'30');
			echo "<ul><li>";echo form_input($attr);echo "</li>";

			$attr=array('name'=>'minprice','class'=>'forminput','placeholder'=>'Enter Minimum Price','size'=>'30');
			echo "<li>";echo form_input($attr);echo "</li>";
			
			$attr=array('name'=>'maxprice','class'=>'forminput','placeholder'=>'Enter Maximum Price','size'=>'30');
			echo "<li>";echo form_input($attr);echo "</li>";
			
			$attr= array('1' => '1 BHK','2'=>'2 BHK','3'=>'3 BHK','4'=>'4 BHK' );
			$js='class="forminput1" placeholder="Number of BHK"';
			echo "<li>";echo form_dropdown('bedroom', $attr, 2,$js);echo "</li>";
			
			$attr=array('buy'=>'Buy','rent'=>'Rent/Lease');
			$js='class="forminput1" placeholder="Rent/Buy"';
			echo "<li>";echo form_dropdown('intention', $attr, 'buy',$js);echo "</li>";
			
			$attr=array('name'=>'search','class'=>'forminput1');
			echo "<li>";echo form_submit($attr, 'Search');echo "</li>";
			?>
			</ul>
		</div>
		<div class="clear">.</div>
	</div>
	
</body>
</html>