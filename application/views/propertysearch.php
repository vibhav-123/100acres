<html>
<head>
	<title>100acres - Search results</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script type="text/javascript" src="jquery-2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="/css/searchresults.css">
	<script type="text/javascript" src="/js/getnext.js"></script>
</head>
<body>
	<div id="header">
		<div id="headerbackground"></div>
		<?php 
		if($this->session->has_userdata('useremail')){
		echo '<a href="/user/logout"><div class="loginbtn">Logout</div></a>';
		}
		else
			echo '<a href="/user"><div class="loginbtn">Login/Register</div></a>';
		?>
		<a href="/home"><div class="loginbtn">Home</div></a>
		<div id="logo">
			<figure>
			<img src="/images/newlogo.png" alt="99acres logo">
			<figcaption>India's No:1 Property Portal</figcaption>
			</figure>
		</div>
		
		<div class="clear"></div>
	</div>
	<div id="content">
		<div id="formdiv">
			<div id='searchform'>
				<?php 
				//echo form_open('searchproperty');

				echo '<form method="get" action="searchproperty">';
				echo "<h2 style='text-align: center'>Search</h2>";

				$attr=array('name'=>'keyword','size'=>'25','value'=>$postparams['keyword'],'class'=>'forminput');
				echo "<ul><li>";echo form_input($attr),"<br>";echo "</li>";

				$attr=array('name'=>'minprice','size'=>'25','value'=>$postparams['minprice'],'class'=>'forminput');
				echo "<li>";echo form_input($attr),"<br>";echo "</li>";

				$attr=array('name'=>'maxprice','size'=>'25','value'=>$postparams['maxprice'],'class'=>'forminput');
				echo "<li>";echo form_input($attr),"<br>";echo "</li>";

				$attr= array('1' => '1 BHK','2'=>'2 BHK','3'=>'3 BHK','4'=>'4 BHK' );
				$js='class="forminput" placeholder="Number of BHK"';
				echo "<li>";echo form_dropdown('bedroom', $attr,$postparams['bedroom'],$js),"<br>";echo "</li>";
				
				$attr=array('buy'=>'Buy','rent'=>'Rent/Lease');
				$js='class="forminput" placeholder="Rent/Buy"';
				echo "<li>";echo form_dropdown('intention', $attr,$postparams['intention'],$js),"<br>";echo "</li>";
				
				$attr=array('name'=>'search','class'=>'forminput');
				echo "<li>";echo form_submit($attr, 'Search');echo "</li>";
				?>
			</div>
		</div>
		
		<div id='searchresultslist'>
			<h1 style="text-align:center">Search Results</h1>
			<?php 
			if($query->num_rows()>0){
				foreach($query->result() as $row){
					echo '<a href="/property/details/'.$row->id.'" target="_blank">';
					echo '<div class="searchresult">';
					$imageurl='/uploads/'.$row->imageurl;
					echo "<img src=$imageurl alt='search result image' />";
					echo "<span>Price: {$row->price}</span>";
					echo "<span>BHK: {$row->bedroom}</span>";
					echo "<span>Property Type: {$row->typeofproperty}</span>";
					echo "<span>Provider: {$row->typeofowner}</span>";
					echo "<span>City: {$row->city}</span>";
					echo '<span class="text-content"><span>Click for More Details</span></span>';
					echo '</div></a>';
				}
			}
			else
				echo '<div style="font-size:20px;text-align:center;color:red;font-weight:bold;">No matching results!!</div>';
			?>
			
			
		</div>
		<div style="clear:both"></div>
		<input type="button" onclick="getnextitems()" id="next" value="Load More">
		<input type="hidden" id="offset" name="offset" value="1">
		<input type="hidden" id="limit" name="limit" value="1">
		<div id="rough"></div>

	</div>
	
	
</body>
</html>