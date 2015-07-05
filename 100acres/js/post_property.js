function show()
{
	if($("input[type='radio'][name='purpose']:checked").val()=='pg')
	{
		$('#property_type').slideUp("slow");
		$('#residential_fields').slideUp("slow");
		$('#commercial_fields').slideUp("slow");
		$('#pgdiv').slideDown("slow");
		$('#sell_fields').slideUp("slow");
		$('#rent_fields').slideUp("slow");
		$('#form_back').height(727);
	}
	else if($("input[type='radio'][name='purpose']:checked").val()=='sell' && $('#property').val()=='residential'){
		$('#property_type').slideDown("slow");
		$('#residential_fields').slideDown("slow");
		$('#sell_fields').slideDown("slow");
		$('#commercial_fields').slideUp("slow");
		$('#pgdiv').slideUp("slow");
		$('#rent_fields').slideUp("slow");
		$('#form_back').height(874);
		
		}
	else if($("input[type='radio'][name='purpose']:checked").val()=='sell' && $('#property').val()=='commercial'){
		$('#property_type').slideDown("slow");
		$('#residential_fields').slideUp("slow");
		$('#commercial_fields').slideDown("slow");
		$('#sell_fields').slideDown("slow");
		$('#pgdiv').slideUp("slow");
		$('#rent_fields').slideUp("slow");
		$('#form_back').height(874);
	}
	else if($("input[type='radio'][name='purpose']:checked").val()=='rent' && $('#property').val()=='residential'){
		$('#property_type').slideDown("slow");
		$('#residential_fields').slideDown("slow");
		$('#commercial_fields').slideUp("slow");
		$('#sell_fields').slideUp("slow");
		$('#pgdiv').slideUp("slow");
		$('#rent_fields').slideDown("slow");
		$('#form_back').height(818);
	}
	else if($("input[type='radio'][name='purpose']:checked").val()=='rent' && $('#property').val()=='commercial'){
		$('#property_type').slideDown("slow");
		$('#residential_fields').slideUp("slow");
		$('#commercial_fields').slideDown("slow");
		$('#sell_fields').slideUp("slow");
		$('#pgdiv').slideUp("slow");
		$('#rent_fields').slideDown("slow");
		$('#form_back').height(818);
	}
	
	
	}


function showrent()
{
	$('#pgdiv').slideUp("slow");
	$('#rentdiv').slideDown("slow");
	$('#selldiv').slideDown("slow");
	$('#property_type').slideDown("slow");
	$('#form_back').height(750);
	}

function showsell()
{
	$('#rentdiv').slideUp("slow");
	$('#pgdiv').slideUp("slow");
	$('#selldiv').slideDown("slow");
	$('#property_type').slideDown("slow");
	$('#form_back').height(680);
	}

function showpg()
{

	$('#property_type').slideUp("slow");
	$('#rentdiv_residential').slideUp("slow");
	$('#selldiv_residential').slideUp("slow");
	$('#rentdiv_commercial').slideUp("slow");
	$('#selldiv_commercial').slideUp("slow");
	$('#pgdiv').slideDown("slow");
	$('#form_back').height(785);
	}

$(document).ready(function(){
	$("#date").blur(function(){
    	var date=$('#date').val();
        if(date=='')
        	{
        		$('#date_error').html("Select Date");
        	}
        else
        	{
        		$('#date_error').html("");
        	}
    });
    $("#address").blur(function(){
    	var address=$('#address').val();
        if(address=='')
        	{
        		$('#address_error').html("Can't be left Empty");
        	}
        else
        	{
        		$('#address_error').html("");
        	}
    });
    $("#exp_price").blur(function(){
    	var exp_price=$('#exp_price').val();
        if(exp_price=='')
        	{
        		$('#exp_price_error').html("Can't be left Empty");
        	}
        else if(!(exp_price.match(/^\d*(?:\.\d{1,2})?$/))){
        	$('#exp_price_error').html("Invalid Price");
        }
        else
        	{
        		$('#exp_price_error').html("");
        	}
    });
    $("#area").blur(function(){
    	var area=$('#area').val();
        if(area=='')
        	{
        		$('#area_error').html("Can't be left Empty");
        	}
        else if(!(area.match(/^\d*(?:\.\d{1,2})?$/))){
        	$('#area_error').html("Invalid Area");
        }
        else
        	{
        		$('#area_error').html("");
        	}
    });
    $("#property").blur(function(){
    	var property=$('#property').val();
        if(property==null)
        	{
        		$('#property_error').html("Select one");
        	}
        else
        	{
        		$('#property_error').html("");
        	}
    });
    $("#city").blur(function(){
    	var city=$('#city').val();
        if(city==null)
        	{
        		$('#city_error').html("Select one");
        	}
        else
        	{
        		$('#city_error').html("");
        	}
    });
    $("#bhk").blur(function(){
    	var bhk=$('#bhk').val();
        if(bhk==null)
        	{
        		$('#bhk_error').html("Select one");
        	}
        else
        	{
        		$('#bhk_error').html("");
        	}
    });
    $("#wash_resi").blur(function(){
    	var bath=$('#wash_resi').val();
        if(bath==null)
        	{
        		$('#wash_error_resi').html("Select one");
        	}
        else
        	{
        		$('#wash_error_resi').html("");
        	}
    });
    $("#wash_comm").blur(function(){
    	var bath1=$('#wash_comm').val();
        if(bath1==null)
        	{
        		$('#wash_error_comm').html("Select one");
        	}
        else
        	{
        		$('#wash_error_comm').html("");
        	}
    });
    $("#balcony").blur(function(){
    	var balcony=$('#balcony').val();
        if(balcony==null)
        	{
        		$('#balcony_error').html("Select one");
        	}
        else
        	{
        		$('#balcony_error').html("");
        	}
    });
    $("#sharing").blur(function(){
    	var sharing=$('#sharing').val();
        if(sharing==null)
        	{
        		$('#sharing_error').html("Select one");
        	}
        else
        	{
        		$('#sharing_error').html("");
        	}
    });
    $("#gender").blur(function(){
    	var gender=$('#gender').val();
        if(gender==null)
        	{
        		$('#gender_error').html("Select one");
        	}
        else
        	{
        		$('#gender_error').html("");
        	}
    });
    $("#onfloor").blur(function(){
    	var onfloor=$('#onfloor').val();
        if(onfloor==null)
        	{
        		$('#onfloor_error').html("Select one");
        	}
        else
        	{
        		$('#onfloor_error').html("");
        	}
    });
    $("#totalfloor").blur(function(){
    	var totalfloor=$('#totalfloor').val();
        if(totalfloor==null)
        	{
        		$('#totalfloor_error').html("Select one");
        	}
        else
        	{
        		$('#totalfloor_error').html("");
        	}
    });
});
    
function validateForm(is_session_set)
   	{	
    	var okay=1;
    	var exp_price=$('#exp_price').val();
        if(exp_price=='')
        	{
        		$('#exp_price_error').html("Can't be left Empty");
        		okay=0;
        	}
        else if(!(exp_price.match(/^\d*(?:\.\d{1,2})?$/))){
        	$('#exp_price_error').html("Invalid Price");
    		okay=0;
        }
        else
        	{
        		$('#exp_price_error').html("");
        	}
       
    	var address=$('#address').val();
        if(address=='')
        	{
        		$('#address_error').html("Can't be left Empty");
        		okay=0;
        	}
        else
        	{
        		$('#address_error').html("");
        	}

        
        var area=$('#area').val();
        if(area=='')
        	{
        		$('#area_error').html("Can't be left Empty");
        		okay=0;
        	}
        else if(!(area.match(/^\d*(?:\.\d{1,2})?$/))){
        	$('#area_error').html("Invalid Area");
    		okay=0;
        }
        else
        	{
        		$('#area_error').html("");
        	}

        
        var property=$('#property').val();
        if(property==null)
        	{
        		$('#property_error').html("Select one");
        		okay=0;
        	}
        else
        	{
        		$('#property_error').html("");
        	}

       
        var city=$('#city').val();
        if(city==null)
        	{
        		$('#city_error').html("Select one");
        		okay=0;
        	}
        else
        	{
        		$('#city_error').html("");
        	}

        
        var onfloor=$('#onfloor').val();
        if(onfloor==null)
        	{
        		$('#onfloor_error').html("Select one");
        		okay=0;
        	}
        else
        	{
        		$('#onfloor_error').html("");
        	}

      
        var totalfloor=$('#totalfloor').val();
        if(totalfloor==null)
        	{
        		$('#totalfloor_error').html("Select one");
        		okay=0;
        	}
        else
        	{
        		$('#totalfloor_error').html("");
        	}

       
        if(onfloor>totalfloor)
        {
    		$('#totalfloor_error').html("Floor can't be greater than Total Floors");
    		okay=0;
    	}
        else
    	{
    		$('#totalfloor_error').html("");
    	}
        	
        var date=$('#date').val();
        if(date=='')
        	{
        		$('#date_error').html("Select date");
        		okay=0;
        	}
        else
        	{
        		$('#date_error').html("");
        	}

       
        if($("input[type='radio'][name='purpose']:checked").val()=='sell' || $("input[type='radio'][name='purpose']:checked").val()=='rent'){
        	if($('#property').val()=='r'){
        		var bhk=$('#bhk').val();
        		if(bhk==null)
        		{
        			$('#bhk_error').html("Select one");
        			okay=0;
        		}
        		else
        		{
        			$('#bhk_error').html("");
        		}
        		
        		var wash_resi=$('#wash_resi').val();
        		if(wash_resi==null)
        		{
        			$('#wash_error_resi').html("Select one");
        			okay=0;
        		}
        		else
        		{
        			$('#wash_error_resi').html("");
        		}
        		var balcony=$('#balcony').val();
        		if(balcony==null)
            	{
            		$('#balcony_error').html("Select one");
            		okay=0;
            	}
        		else
        		{
            		$('#balcony_error').html("");
            	}
        		
            }
            else if($('#property').val()=='c'){
            
            	var wash_comm=$('#wash_comm').val();
            	if(wash_comm==null)
            	{
            		$('#wash_error_comm').html("Select one");
            		okay=0;
            	}
            	else
            	{
            		$('#wash_error_comm').html("");
            	}
            }
        	
        }
        if($("input[type='radio'][name='purpose']:checked").val()=='pg'){
        	var sharing=$('#sharing').val();
            if(sharing==null)
            	{
            		$('#sharing_error').html("Select one");
            		okay=0;
            	}
            else
            	{
            		$('#sharing_error').html("");
            	}
            var gender=$('#gender').val();
            if(gender==null)
            	{
            		$('#gender_error').html("Select one");
            		okay=0;
            	}
            else
            	{
            		$('#gender_error').html("");
            		
            	}

            
        }
       
        var login_check="3";
        if(okay==1){
        	
        	if(is_session_set=="set")
        		return true;
        	else{alert("Kindly login first");
        		return false;}
        }
        else{
        	return false;
        }
   	}  


        
        
