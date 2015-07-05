<html>
  <head>
    <title>Property Listing</title>
    <style>
#header {
    background-color:black;
    color:white;
    text-align:left;
    padding:5px;
}
#nav {
    line-height:30px;
    height:auto;
    width:250px;
    float:left;
    padding:5px;   
    background-color: #6699FF;
    font-weight: bold;     
}
#section {
    width:350px;
    height: auto;
    float:left;
    padding:10px;    
}
#main
{
 width:1000px;
 height:200px;
 float:left; 
 border: 1px solid black;
 margin-bottom: 5px;
 margin-bottom: 5px;

}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;    
}
.list_item {
    border: 1px solid gray;
    width: 50%;
    height: 100%;
    float: left;
    display: inline;
    position: relative;
   
}
.list_item1{
    
    padding: 5px;
    border: 1px solid gray;
    width: 45%;
    height: 70%;
    float: right;
    margin-top: 20px;
    margin-right: 20px;
    margin-left: 10px;
    display: inline;
    position: relative;
    text-align: center;
    font-weight: bold;
    background-color: #8A8A5C;
    
}

</style>
  </head>
  <body>
<div id="header">
<h1>100 ACRES</h1>
</div>
<?php
    if(!empty($users))
    {
      $array=array();
      $i=0;
      $city=$saved_values[0];
      $minprice=$saved_values[1];
      $maxprice=$saved_values[2];
      $Bedrooms=$saved_values[3];
      $sellorrent=$saved_values[4];
  
      $results_per_page=4.0;
      $total_pages=ceil($users['totalres']/$results_per_page);
      for ($i = 1; $i <= $total_pages; $i++){
        echo '<a href="http://www.100acres.com/property?select_city=' . $city . '&minprice='.$minprice.'&maxprice='.$maxprice.'&select_value='.$Bedrooms.'&sellorrent='.$sellorrent.'&submit=Submit&page='.$i.'">'.$i.'</a>';echo " ";

       
      }
  }
    
?>
<div id="nav">
  <form action="property" method="get">
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
    Max price:<br>
    <input type= "text" name="maxprice" value="<?php echo htmlentities($saved_values[2])?>" >
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
      <input type="submit" name="submit" value="Submit">
      <br><br>
      SORT BY:
      <select name='sort'>
        <option value="expected_price">Price</option>
       </select>
      <br>
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
          </div>
        </div>
        <?php
        } }
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
   
  </body>
</html>