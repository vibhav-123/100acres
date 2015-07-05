<html>
<head>
  <title>100acres - Search results</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/public/CSS/search.css">
  <link rel="stylesheet" type="text/css" href="/public/CSS/s1.css">
  <script type="text/javascript" src="/public/js/getnext.js"></script>
</head>
<body>
 <div id="header">
    <div style="float:left;margin-left:50px;margin-top:10px">100acres.com </div>
    <div style="float:right;position:relative"> 
      <div id="header_home" style="float:left;margin-top:15px;margin-right:200px"><a href="http://www.100acres.com/index.php">Home</a> </div>
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



  <div id="content">
    <div id="formdiv">
      <div id='searchform'>
        <?php 
        //echo form_open('searchproperty');

        echo '<form method="get" action="search">';
        echo '<div id="search">';
        echo  '<div id="search1">';
        echo    '<div id="place">';
        echo      '<div>City</div>';

                    $attr=array('name'=>'city','size'=>'15','value'=>$postparams['city'],'class'=>'forminput');

        echo        form_input($attr),"<br>"; 
        
        echo      '</div>';


        echo      '<div id="price">';
        echo        '<div >Min Price</div>';
        echo        '<div>';
                   $attr=array('name'=>'minprice','size'=>'15','value'=>$postparams['minprice'],'class'=>'forminput');
                   echo form_input($attr);
        echo        '</div>';
        echo      '</div>'; 


                
        echo     '<div id="price">';
        echo     '<div>Max Price</div>'; 
        echo     '<div>';
                 $attr=array('name'=>'maxprice','size'=>'15','value'=>$postparams['maxprice'],'class'=>'forminput');
        echo     form_input($attr);
        echo     '</div>';
        echo     '</div>';

        echo    '<div id="price">';
        echo      '<div>Bedroom</div>';
        echo      '<div>'; 


        $attr= array('1' => '1 BHK','2'=>'2 BHK','3'=>'3 BHK','4'=>'4 BHK' );
        $js='class="forminput" placeholder="Number of BHK"';
        echo form_dropdown('bedrooms', $attr,$postparams['bedrooms'],$js);
        echo      '</div>';
        echo    '</div>';  
      echo  '</div>';

       echo  '<div style="float:right;margin-right:150px">';
      $attr=array('name'=>'search','class'=>'forminput');
      echo form_submit($attr, 'Search');
       echo   '</div>';


    echo  '</div>';



       
        ?>
      </div>
    </div>
    
    <div id='searchresultslist'>
      <h1 style="text-align:center">Search Results</h1>

      <?php 
      if(count($result) > 0){
     
        
        foreach($result as $row){
          /*echo '<a href="">*/
          echo '<div class="searchresult">';
          if($row->image_path_name){
            $path=explode('/', $row->image_path_name,6);
            $path='/'.$path[0];
            echo '<div id="search_1">';
            echo '<div id="search_2">';
            echo "<img  src='/public/images/posting/$path' alt='search result image'  width=400px , height=300px />";
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
          /*echo '<span class="text-content"><span>Click for More Details</span></span>';*/
         
          echo '</div>';
          echo '</div>';

            echo '</div>';
            echo '<br>';
            echo '<br>';           
        }

        ?>
    </div>
    <div style="clear:both"></div>
    
    <input type="hidden" id="offset" name="offset" value="1">
    <input type="hidden" id="limit" name="limit" value="1">
    <div id="rough"></div>
    </div>
    <input type="button" onclick="getnextitems()" id="next" value="Load More Properties" class="fmr">
<?php     
        
        
      }
      else
       echo "No matching search results";
      ?>
      
      
    

  
  
  <div style="clear:both"></div>
</body>
</html>