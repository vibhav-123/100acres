	<html>
	<head>
		<?php echo $map['js']; ?>
	<link rel="stylesheet" type="text/css" href="/public/CSS/description.css">
	</head>
	<body>
	<div id="header">
    <div style="float:left;margin-left:50px;margin-top:10px">100acres.com </div>
    <div style="float:right;position:relative"> 
      <div id="header_home" style="float:left;margin-top:15px;margin-right:100px"><a href="http://www.100acres.com/index.php">Home</a> </div>
    <?php

    //print_r($logged_in);
  if(isset($logged_in) && $logged_in == true)
  {?>
     
        <div id="header_user" style="float:left;margin-top:5px;margin-right:50px"><p><?php echo $this->session->userdata['email'];?></p> </div>
        <div style="float:right;margin-top:15px;margin-right:40px"><a href="http://www.100acres.com/index.php/login/logout">Logout</a></div>
    
    <?php } 
  else
  {?>  
        <div style="float:right;margin-top:15px;margin-right:50px"><a href="http://www.100acres.com/index.php">Login</a> </div>
    
  <?php }
  ?>
</div>
  </div>
	<div id="dis">
		<?php 
      if(count($result) > 0){

     	foreach ($result as $key) {
     		?>
     	<div  id="dsec"><div class="d">Map view</div></div>
		<div id="img">
			<?php echo $map['html']; ?>
	<!--	<?php echo	"<img src='/public/images/posting/$key->image_path_name' id='img1'>";?> -->
		</div> 	
     	 <?php } }
     	?>
		
		
		


		<div  id="dsec"><div class="d">Discription</div></div>

		<div id="dat"><p id="dat1"><div id="details">
			<?php foreach ($result as $key) {
				echo '<div style="float:left;margin-left: 30;  font-size: 18px;font-style: oblique;">';
         echo '<div style="float:left" class="m1">';
          echo "<span><li>Posted By:&nbsp&nbsp &nbsp {$key->Type_of_person}</li></span>";
          echo "<span><li>Name of Posted Person: {$key->username}</span><br>";
          echo "<span><li>Contact Number : {$key->mobileno}</span><br></div>";

           echo '<div class="m">';
          echo "<div float='right'><li>For Sell/Rent : {$key->Purpose}</div>";
          echo "<div><li>Price: {$key->expected_price}</div>";
          echo "<div><li>BHK: {$key->bedrooms}<br></div></div>";
          echo '<div class="m2">';
          echo "<div float='left'><li>Address : {$key->address}<br>";
          echo "<span><li>City: {$key->city}</span><br>";
          echo "<span><li>Description: {$key->description}</span></div></div>";
          
     		}?>
			 </div></p>
		</div>
	</div>

<!-- 	send buyer details to seller
 -->

    <div id="disc1">
    	For more details, please fill the details and We will connect with you shortly..!!
    </div>
	<div class="send1">
	<form action="http://www.100acres.com/index.php/intrested" method="post"> 
		<div  id="name" >
			<div id="f_name">
				<input  name="firstname" id="name1" type="text" placeholder="First Name" required='true' >
			</div>

			<div id="l_name">
				<input name="lastname" id="name1" type="text" placeholder="Last Name" required='true' >
			</div>
		</div>


		<div id="name">
			<div id="f_name">
				<input name="email" id="name1" type="text" placeholder="Email" required='true' >
			</div>

			<div id="l_name">
				<input name="mobileno" id="name1" type="text" placeholder="Mobile N0." maxlength="10" required='true'>
			</div>
		</div>

		<div id="disc">
			<textarea name="comment" id="area" placeholder="How may I help you..!!"></textarea>
		</div>

		<div id="sub">
			<input id="sub1" type="submit" name="submit">
		</div>
	</form>
	</div>
	<!--search result ends-->

	</body>

	</html>