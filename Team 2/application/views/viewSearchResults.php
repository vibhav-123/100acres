<?php

include_once 'paginate.php';  //include of paginat page.  Credits to Aravind Buddha for the code.
include_once 'pathfile.php';


$per_page = 5;         // number of results to show per page

$total_results = count($result);		//

$total_pages = $tpages;	//total pages we going to have

//-----Initialize $page ------//

$page=-1;
// display pagination
if(isset($_GET["page"]))
{
	$page = intval($_GET['page']);
	$show_page = $_GET['page'];
}
else 
{
	$page=1;
	$show_page=1;
}
	
// display pagination

$tpages=$total_pages;
if ($page <= 0)
    $page = 1;
if(isset($_GET["type"]))
	$type=$_GET["type"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
   	<script src="http://www.100acres.com/js/jquery-1.3.2.min.js"></script>
   	<script src="http://www.100acres.com/js/validationResultPage.js"></script>
    <link rel="stylesheet" type="text/css" href="http://www.100acres.com/styles/style.css" />
    <link type='text/css' href='http://www.100acres.com/styles/styleSheetResult.css' rel='stylesheet'></link>
    <link type='text/css' href='http://www.100acres.com/styles/styleSheet.css' rel='stylesheet'></link>
    <script>
    	
    </script>
    <style type="text/css">
  
.logo
{
    text-align: center;
}
.container{

}
</style>
</head>
<body id="body">
<div id="cover"></div>


<!----------------------- Temp register div start here  ------------ -->
<div id="tempRegister">
<table id="tempRegisterTable" >
	<tr>
		<td colspan="2">
			<input type="button" value="X" class="cross" onclick="hideAll()">
		</td>
	</tr>
	<tr style="text-align: center;">
		<td colspan="2">
			<h2>Welcome to 100 Acres</h2>
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			Please provide the details to view number
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			<input type="text" placeholder=" Email " id="email_temp">
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			<input type="text" placeholder=" name" id="name_temp">
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			<input type="text" placeholder=" contact" id="contact_temp">
		</td>
	</tr>
	<tr>
		<td colspan=2 style="text-align:center">
			<button type="button" value="View Number" onclick="submitTempRegister()" id="submitTemp">View Number </button>
		</td>
	</tr>
</table>
</div>

<!----------------------- Temp register div ended here  ------------ -->


<div style="width:100%; text-align:center"><h2 > Search Results</h2></div>
<div id="filterSearch" name="filterSearch" style="float:left">
	<table width=250px >
		<tr >
			<td  colspan=2 style="text-align:center">
				<h2>Filter Search</h2>
			</td>
		</tr>
		<tr >
			<td colspan=2>
				<select id="type" name="type">
					<option value="pg" <?php if($_GET["type"]=="pg") echo "selected=true";?>>PG</option>
					<option value="rent"  <?php if($_GET["type"]=="rent") echo "selected=true";?>>Rent</option>
					<option value="buy" <?php if($_GET["type"]=="buy") echo "selected=true";?>>Buy</option>
				</select>
			</td>
		</tr>
		<tr >
			<td colspan=2>
				<select id="city" name="city">
					<option value="delhi" <?php if(isset($_GET["city"])&& $_GET["city"]=="Delhi") echo "selected=true";?>>Delhi</option>
					<option value="noida" <?php if(isset($_GET["city"])&& $_GET["city"]=="Noida") echo "selected=true";?>>Noida</option>
				</select>
			</td>
		</tr>
		<tr >
			<td colspan=2>
				<input type="text" placeholder="Enter Location" id="location" <?php if(isset($_GET["location"])) { $loc=$_GET["location"]; echo "value= $loc";}?>>
			</td>
		</tr>
		<tr >
			<td style="text-align:center">
				Min. Price
				<select id="minprice" name="minprice" style="width: 60%">
					<option value="any" <?php if(!isset($_GET["minprice"])) echo "selected=true"?>>Any</option>
					<option value="1000" <?php if(isset($_GET["minprice"])&& $_GET["minprice"]=="1000") echo "selected=true"?>>1000</option>
					<option value="2000"<?php if(isset($_GET["minprice"])&& $_GET["minprice"]=="2000") echo "selected=true"?>>2000</option>
				</select>
			</td>
			<td style="text-align:center">
				Max. Price
				<select id="maxprice" name="maxprice" style="width: 60%">
					<option value="any" <?php if(!isset($_GET["maxprice"])) echo "selected=true"?>>Any</option>
					<option value="1000" <?php if(isset($_GET["maxprice"])&& $_GET["maxprice"]=="1000") echo "selected=true"?>>1000</option>
					<option value="2000"<?php if(isset($_GET["maxprice"])&& $_GET["maxprice"]=="2000") echo "selected=true"?>>2000</option>
				</select>
			</td>
			<tr>
					<td colspan=2 style="text-align:center">
						Posted By
						<select id="ownership" name="ownership" style="width: 50%">
							<option value="any" <?php if(!isset($_GET["ownership"])) echo "selected=true"?>>Any</option>
							<option value="owner" <?php if(isset($_GET["ownership"])&& $_GET["ownership"]=="owner") echo "selected=true"?>>Owner</option>
							<option value="broker" <?php if(isset($_GET["ownership"])&& $_GET["ownership"]=="broker") echo "selected=true"?>>Broker</option>
						</select>
					</td>
				</tr>
			</table>
			
			<table id="pgDiv" width=250px  style='display:<?php if($_GET["type"]=="pg") echo ""; else echo "none"; ?>'>
				<tr >
					<td style="text-align:center;width:39%">
						Gender
					</td>
					<td>
						<select id="gender" name="gender" style="width: 84%">
							<option value="boys" <?php if(isset($_GET["gender"])&& $_GET["gender"]=="boys") echo "selected=true"?>>Boys</option>
							<option value="girls" <?php if(isset($_GET["gender"])&& $_GET["gender"]=="girls") echo "selected=true"?>>Girls</option>
						</select>
					</td>
				</tr>
			<tr >
					<td  style="text-align:center;width:39%">
					Sharing
					</td>
					<td>
					<select id="sharing" name="sharing" style="width: 84%">
						<option value="any"  <?php if(!isset($_GET["sharing"])) echo "selected=true"?>>Any</option>
						<option value="single" <?php if(isset($_GET["sharing"])&& $_GET["sharing"]=="single") echo "selected=true"?>>Single</option>
						<option value="double" <?php if(isset($_GET["sharing"])&& $_GET["sharing"]=="double") echo "selected=true"?>>Double</option>
						<option value="triple" <?php if(isset($_GET["sharing"])&& $_GET["sharing"]=="triple") echo "selected=true"?>>Triple</option>
						<option value="quadra" <?php if(isset($_GET["sharing"])&& $_GET["sharing"]=="quadra") echo "selected=true"?>>Quadra</option>
						<option value="other">4+</option>
					</select>
				</td>
			</tr>
	</table>
	
	<table id="rentDiv" width=250px style='display:<?php if(isset($_GET["type"])&& ($_GET["type"]=="rent" || $_GET["type"]=="buy")) echo ""; else echo "none"; ?>'>
				<tr >
					<td style="text-align:center;width:50%">
						Property Type
					</td>
					<td>
						<select id="propType" name="propType" style="width: 84%">
							<option value="any"  <?php if(!isset($_GET["propType"])) echo "selected=true";?>>Any</option>
							<option value="flat"  <?php if(isset($_GET["propType"])&& $_GET["propType"]=="flat") echo "selected=true"?>>Flat</option>
							<option value="apartment" <?php if(isset($_GET["propType"])&& $_GET["propType"]=="apartment") echo "selected=true"?>>Apartment</option>
							<option value="bunglow" <?php if(isset($_GET["propType"])&& $_GET["propType"]=="bunglow") echo "selected=true"?>>Bunglow</option>
							<option value="floor" <?php if(isset($_GET["propType"])&& $_GET["propType"]=="floor") echo "selected=true"?>>Floor</option>
						</select>
					</td>
				</tr>
			<tr >
				<td style="text-align:center;">
					Built Type
				</td>
				<td>
					<select id="builtType" name="builtType" style="width: 84%">
					<option value="any"  <?php if(!isset($_GET["builtType"]))echo "selected=true";?>>Any</option>
					<option value="single"  <?php if(isset($_GET["builtType"])&& $_GET["builtType"]=="single") echo "selected=true"?>>Single</option>
					<option value="duplex" <?php if(isset($_GET["builtType"])&& $_GET["builtType"]=="duplex") echo "selected=true"?>>Duplex</option>
					<option value="triplex" <?php if(isset($_GET["builtType"])&& $_GET["builtType"]=="triplex") echo "selected=true"?>>Triplex</option>
					<option value="other" <?php if(isset($_GET["builtType"])&& $_GET["builtType"]=="other") echo "selected=true"?>>Other</option>
				</select>
				</td>
			</tr>
				<tr >
				<td style="text-align:center;">
					Construction Status
				</td>
				<td>
					<select id="consStatus" name="consStatus" style="width: 84%">
						<option value="any" <?php if(!isset($_GET["consStatus"]))echo "selected=true"?>>Any</option>
						<option value="underconstruction" <?php if(isset($_GET["consStatus"])&& $_GET["consStatus"]=="underconstruction") echo "selected=true"?>>Under Construction</option>
						<option value="readytomove" <?php if(isset($_GET["consStatus"])&& $_GET["consStatus"]=="readytomove") echo "selected=true"?>>Ready To Move</option>
					</select>
				</td>
			</tr>
			<tr >
				<td style="text-align:center;">
					BHK
				</td>
				<td>
					<select id="bedrooms" name="bedrooms" style="width: 84%">
						<option value="any" <?php if(!isset($_GET["bedrooms"]))echo "selected=true"; ?>>Any</option>
						<option value="1"  <?php if(isset($_GET["bedrooms"]) && $_GET["bedrooms"]==1)echo "selected=true"; ?>>1</option>
						<option value="2" <?php if(isset($_GET["bedrooms"]) && $_GET["bedrooms"]==2)echo "selected=true"; ?>>2</option>
						<option value="3" <?php if(isset($_GET["bedrooms"]) && $_GET["bedrooms"]==3)echo "selected=true"; ?>>3</option>
						<option value="other" <?php if(isset($_GET["bedrooms"]) && $_GET["bedrooms"]=='other')echo "selected=true"; ?>>More Than 3</option>
					</select>
				</td>
			</tr>
			</table>
			<table id="furnishedTable" width=250px style='display: <?php if(isset($_GET["type"])&& ($_GET["type"]=="rent")) echo ""; else echo "none"; ?>'>
				<tr id="furnishedRow" <?php if(isset($_GET["type"])&& $_GET["type"]=="buy")echo "style='display:none'"; ?>>
				<td style="text-align:center;" width=50%>
					Furnished
				</td>
				<td>
					<select id="furniture" name="furniture" style="width: 84%">
						<option value="any" <?php if(!isset($_GET["furniture"]))echo "selected=true"; ?>>Any</option>
						<option value="furnished"  <?php if(isset($_GET["furniture"]) && $_GET["furniture"]=="furnished")echo "selected=true"; ?>>Furnished</option>
						<option value="semifurnished" <?php if(isset($_GET["furniture"]) && $_GET["furniture"]=="semifurnished")echo "selected=true"; ?>>Semi Furnished</option>
						<option value="unfurnished" <?php if(isset($_GET["furniture"]) && $_GET["furniture"]=="unfurnished")echo "selected=true"; ?>>Unfurnished</option>
					</select>
				</td>
			</tr>
		</table>
		<table id="submitTable" width=250px >
			<tr>
					<td colspan=2 style="text-align:center">
						<input type="button" value=" Filter" onclick="filterSearch()" id="click">
					</td>
			</tr>		
	</table>
<div id="pidDiv" style="display:none"></div>
<div id="modeDiv" style="display:none"></div>	
			
</div>
    <div  style="width:99%;border:2;">
        <div class="row1">
            <div class="" style="width:75%;margin:0 auto;margin-right: 50px">
                <div class="mini-layout" style="border-style:solid;border:2;border-color:gray;">
                 <?php
                 	$url="http://www.100acres.com/search/getResults?type=".$_GET["type"];
                 	foreach($_GET as $queryString=>$value)
                 	{
                 		if($queryString=="type"||$queryString=="tpages"||$queryString=="page")
                 			continue;
                 		$url.="&".$queryString."=".$value;
                 	}
                    $reload = $url. "&tpages=" . $tpages;
                    if(!isset($_GET["perpage"]))
                    	$reload.="&perpage=5";
                    echo '<div class="pagination" style="text-align:right"><ul>';
                    if ($total_pages > 1) {
                        echo paginate($reload, $show_page, $total_pages);
                    }
                    echo "</ul></div>";
                    // display data in DIV
                    // loop through results of database query, displaying them in the table
                    if(count($result)==0)
                    {
                    	echo "<h3>Sorry, No results match your criteria. Try refining your search.</h3>";
                    } 
                    else
                    {
                    foreach ($result as $row) {
                        $date=date('M j Y', strtotime($row->CREATED_ON));
                        $propDetailPath="http://www.100acres.com/property_c/viewPropertyDetails";
                		
                        // echo out the contents of each row into a table
                        echo "
							<div id='result' class='results'>
								<div id='headerresult' class='resultHeader' >
									<div id='headerText1' class='headerText'> &#8377 ". $row->price. " <font color='blue'>".$row->title."</font>
									</div>
								</div>
								<div id='middleDiv1' class='middleDiv'>
									<div id='imageContainer' class='imageContainer'>
										<img src='http://www.100acres.com/".$row->imageURL. "' class='resultImage'>
									</div>
									<div id='resultDescription1' class='resultDescription'>
										<b> Built-up Area :</b> ". $row->area . "  sq m<br><hr>";
                        if(isset($row->propType))
                        {
							echo "<b> Property Type :</b> ".$row->propType ."<br>
										<br>";
                        }
						echo "<b> Highlights :</b> ";
						
						if(isset($row->builtType))
						{
							echo $row->builtType;
						}
						if(isset($row->sharing))
						{
							echo $row->sharing." Sharing ";
						}
						echo "/Building built in ".$row->year. " <br><br>
										<b> Description :</b> ". $row->description . "<br><br><br>
									</div>
								</div>
								<div id='footerresult' class='footerResult'>
									<table width='100%' style='table-layout: fixed'>
										<tr><td><b> Owner :</b> Resham Wadhwa<br></td><td><b> Posted On :</b> $date  <br>
										</td></tr>
									</table><br>
									<table width='100%' style='table-layout: fixed'>
										<tr >
											<td style='text-align: center'>
												<input type='button' value='View Phone Number' class='button' onclick=viewPhoneNumber($row->postID,'$type')>
											</td>
											<td style='text-align: center'>
												<input type='button' value='Go To Detail Page' class='button' onclick='location.href="; echo '"';echo $propDetailPath."?postID=$row->postID"."&mode=$type";echo '"'; echo"'>
											</td>
											<td style='text-align: center'>
												<a href='http://www.100acres.com/report/".$row->postID."'><font color='red'>Report a problem</font></a>
											</td>
											<td style='text-align: center'>
												<a href='javascript:shortlist(".$row->postID.")'><img src='http://www.100acres.com/images/unfilled_star.png' height='25px' width='25px'><font color='green'>Shortlist</font></a>
											</td>
										</tr>
										<tr></tr>
									</table>
								</div>
							</div>
						<br>";
                  
                    }
                    echo '<div class="pagination" style="text-align:right"><ul>';
                    if ($total_pages > 1) {
                    	echo paginate($reload, $show_page, $total_pages);
                    }
                    echo "</ul></div>";
                    // close table>
                /* echo "</table>"; */
            // pagination
                    }
            ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>



