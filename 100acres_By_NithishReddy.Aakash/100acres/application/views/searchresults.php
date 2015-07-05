<html>
<body>
<div id='searchresultslist'>
     <?php 
     
      if( (count($result) > 0)){
     
        
        foreach($result as $row){
          /*echo '<a href="">*/
          echo '<div class="searchresult">';
          if($row->image_path_name){
            $path=explode('/', $row->image_path_name);
            $path='/'.$path[0];
            echo '<div id="search_1">';
            echo '<div id="search_2">';
            echo "<img  src='/public/images/posting$path' alt='search result image' width=400px , height=300px/>";
            echo '</div>';
             }
          else
            {    
            echo '<div>';
          echo "<img src='' alt='No image Available' />";
          echo '</div>';
        }
          echo '<div style="float:right">';
         echo '<div style="float:left" class="m">';
          echo "<span>Posted By:&nbsp &nbsp {$row->Type_of_person}</span><br>";
          echo "<span>Name of Posted Person: {$row->username}</span>";
          echo "<div>For Sell/Rent : {$row->Purpose}</div>";
          echo "<div>Price: {$row->expected_price}</div>";
          echo "<div>BHK: {$row->bedrooms}</div>";
          echo "<a href='http://www.100acres.com/index.php/search/getDescription/{$row->pid}' target='_new'> Description</a>";
          /*echo "<div>Property Type: {$row->property_type}</div>";
          
          echo "<div>City: {$row->city}</div>";
          echo "<div>Price Per unit area: {$row->pp_area}</div>";
          echo "<div>contact number: {$row->mobileno}</div>";
          echo "<div>contact number: {$row->description}</div>";*/
          /*echo '<span class="text-content"><span>Click for More Details</span></span>';*/
         
          echo '</div>';
          echo '</div>';

            echo '</div>';
            echo '<br>';
            echo '<br>';
        }
      }
      else
       echo "No matching search results";
      ?>
      
      
    </div>
  </body>
    </html>