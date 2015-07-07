<!-- Property Listing form -->
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Property Listing</title>
    <link rel=stylesheet type="text/css" href="http://localhost/codeigniter/css/propertysearchpage.css">
  </head>
<body>
<div id="header">
  <div id="button">
      <ul>
        <li class="another_blue"><a href="http://www.100acres.com/Homenew">Home</a></li>
      <ul>
  </div>
<h1>100 ACRES</h1>
</div>
<?php
    if(!empty($users))
    {
      $array=array();
      $i=0;
      //array $saved_values used for saving form values 
      $city=$saved_values[0];
      $minprice=$saved_values[1];
      $maxprice=$saved_values[2];
      $Bedrooms=$saved_values[3];
      $sellorrent=$saved_values[4];
      $sort=$saved_values[5];
      $results_per_page=4.0;
      $total_pages=ceil($users['totalres']/$results_per_page); //total pages to be displayed
      //url for the next pages 
      for ($i = 1; $i <= $total_pages; $i++){
        echo '<a href="http://www.100acres.com/property?select_city=' . $city . '&minprice='.$minprice.'&maxprice='.$maxprice.'&select_value='.$Bedrooms.'&sellorrent='.$sellorrent.'&sort='.$sort.'&submit=Submit&page='.$i.'">'.$i.'</a>';echo " ";
   
      }
  }
    
?>
<div id="nav">
  <form action="property" method="get" name="searchform" onsubmit="return validate()">
      City:<br>
      <select name='select_city'>
        <option value="NULL" <?php if($saved_values[0] == "NULL") echo "selected";?> >Please select an option</option>
        <option value="Noida"<?php if($saved_values[0] == "Noida") echo "selected";?> >Noida</option>
        <option value="New Delhi"<?php if($saved_values[0] == "New Delhi") echo "selected";?> >New Delhi</option>
        <option value="Gurgaon"<?php if($saved_values[0] == "Gurgaon") echo "selected";?>>Gurgaon</option>
        <option value="Ghaziabad"<?php if($saved_values[0] == "Ghaziabad") echo "selected";?> >Ghaziabad</option>
      </select>
    <br>
    Min price:<br>
    <input type= "text" name="minprice" value="<?php echo htmlentities($saved_values[1])?>" >
    <br>
    <span id='error_min'></span>
    <br>
    Max price:<br>
    <input type= "text" name="maxprice" value="<?php echo htmlentities($saved_values[2])?>" >
    <br>
    <span id='error_max'></span>
    <br>
    Bedrooms:<br>
      <select name='select_value'>
        <option value="NULL" <?php if($saved_values[3] == "NULL") echo "selected";?> >Please select an option</option>
        <option value="2 BHK" <?php if($saved_values[3] == "2 BHK") echo "selected";?> >2 BHK</option>
        <option value="3 BHK" <?php if($saved_values[3] == "3 BHK") echo "selected";?> >3 BHK</option>
        <option value="4 BHK" <?php if($saved_values[3] == "4 BHK") echo "selected";?> >4 BHK</option>
      </select>
      <br>
      Intention:<br>
      <select name='sellorrent'>
        <option value="NULL" <?php if($saved_values[4] == "NULL") echo "selected";?> >Please select an option</option>
        <option value="Rent" <?php if($saved_values[4] == "Rent") echo "selected";?> >Rent</option>
        <option value="Sell" <?php if($saved_values[4] == "Sell") echo "selected";?> >Sell</option>
       </select>
      <br><br>
       SORT BY:
      <select name='sort'>
        <option value="NULL">Select an option</option>
        <option value="expected_price">Price</option>
       </select>
      <br>
      <input type="submit" name="submit" value="Search">
      <br><br>
     
      </form>
</div>
<div id="section">
<h1>Property listings</h1>
<p>
   <?php
        if($users){
       foreach($users['result'] as $user) {
          ?>
        <div id ="main">
          <div class="list_item"> 
            <img src="http://www.100acres.com/uploads/<?php echo $user['imagepath']; ?>"  height="200px" width="500px">
          </div>
          <div class="list_item1"> 
           <?php echo "Address: ".$user['address']; ?>
           <br>
           <?php echo "Price: ".$user['expected_price']; ?>
           <br>
           <div id="seller">
           <?php echo "Seller Information: " ?>
           <br>
           <?php echo "Name: ".$user['Name']; ?>
           <br>
           <?php echo "Email: ".$user['Email']; ?>
          </div>
          </div>
        </div>
        <?php
        }
        }
        else
        {
          echo "NO RESULTS TO DISPLAY!";
        } 
      ?>   
</p>
</div>
<div id="footer">
Copyright © 100acres.com
</div>
<script type = "text/javascript" src="http://www.100acres.com/js/searchvalidation.js"></script> 
</body>
</html>