function postPg()
{
	var contact1 = $("#contact_post_pg").val();
	var price1 = $("#price_post_pg").val();
	var year1 = $("#year_post_pg").val();
	var address1=$("address_post_pg").val();
	var priceRegex = /^[0-9]+$/;
	
	/* stop form from submitting normally */
	event.preventDefault();
	
	var allOk=1; 	//status for keeping a track of validation
	
	if($("#contact_post_pg").val()=="")
	{
		$("#contact_post_pg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
    	$("#contact_post_pg").focus();
		$("#contact_error_pg").html("Contact Required");
		allOk=0;
	}
	
	if($("#title_post_pg").val()=="")
	{
		$("#title_post_pg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#title_post_pg").focus();
		$("#title_error_pg").html("Title Required");
		allOk=0;
	}
	
	if($("#price_post_pg").val()=="")
	{
		$("#price_post_pg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
   		$("#price_post_pg").focus();
		$("#prive_error_pg").html("Price Required");
		allOk=0;
	}
	
	if(!priceRegex.test(price1))
	{
		$("#price_post_pg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#price_post_pg").focus();
		$("#price_post_pg").html("Enter digits only in Price");
		allOk=0;
	}	
	
	if($("#address_post_pg").val()=="")
	{
		$("#address_post_pg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#address_post_pg").focus();
		$("#address_error_pg").html("Address Required");
		allOk=0;
	}
	
	if(allOk==1)	//all validated
	{	
		document.forms["formPostPG"].submit();	
	}
}


function postadsell()
{	
	var contact = $("#contact_post_sell").val();
	var title=$("#title_post_sell").val();
	var price = $("#price_post_sell").val();
	var address=$("#address_post_sell").val();
	var description=$("#description_post_sell").val();
	var area=$("#area_post_sell").val();
	

	/* stop form from submitting normally */
    event.preventDefault();

    var priceRegex = /^[0-9]+$/;
	var phoneRegex = /^\d{10}$/;
	var allOk=1;		//status for keeping a track of validation
	
	if($("#contact_post_sell").val()=="")
	{
			
		$("#contact_post_sell").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
    	$("#contact_post_sell").focus();
		$("#contact_error_sell").html("Contact Required");
		allOk=0;
	}
	
	if(!phoneRegex.test(contact))
	{
		$("#contact_post_sell").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
    	$("#contact_post_sell").focus();
		$("#contact_error_sell").html("Phone number should contain only 10 digits");
		allOk=0;
	}
	
	if($("#price_post_sell").val()=="")
	{
		$("#contact_post_sell").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
    	$("#contact_post_sell").focus();
		$("#price_error_sell").html("Price Required");
		allOk=0;
	}
	
	if(!priceRegex.test(price))
	{
		$("#contact_post_sell").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
    	$("#contact_post_sell").focus();
		$("#price_error_sell").html("Enter digits only in Price");
		allOk=0;
	}	
	
	if($("#city_post_sell").val()=="")
	{
		$("#city_post_sell").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
    	$("#city_post_sell").focus();
		$("#city_error_sell").html("City required");
		allOk=0;
	}
	
	if($("#address_post_sell").val()=="")
	{
		$("#address_post_sell").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
    	$("#address_post_sell").focus();
		$("#address_error_sell").html("Address Required");
		allOk=0;
	}
	
	if($("#title_post_sell").val()=="")
	{
		$("#title_post_sell").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#title_post_sell").focus();
		$("#title_error_sell").html("Title Required");
		allOk=0;
	}
	
	if(allOk==1)		//all validated
	{
		document.forms["formPostSell"].submit();
	}
		    
}



function postadrent()
{
	
	var propType= $("#property_type_post_rent").val();
	var builtType= $("#built_type_post_rent").val();	
	var consStatus = $("#cons_status_post_rent").val();	
	var yearCons= $("#year_post_rent").val();	
	var bedRooms= $("#bedrooms_post_rent").val();	
	var contact = $("#contact_post_rent").val();
	var price = $("#price_post_rent").val();
	var year = $("#year_post_rent").val();
	var city = $("#city_post_rent").val();
	var address=$("#address_post_rent").val();
	var parking=$("#parking_post_rent").val();
	var ownership=$("#owner_post_rent").val();
	var description=$("#description_post_rent").val();
	var area=$("#area_post_rent").val();
	var title = $("#title_post_rent").val();



	var priceRegex = /^[0-9]+$/;
	var phoneRegex = /^\d{10}$/;	

	/* stop form from submitting normally */
	event.preventDefault();
	
	var allOk=1;		//status for keeping a track of validation
	
	if($("#contact_post_rent").val()=="")
	{
			
		$("#contact_post_rent").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
    	$("#contact_post_rent").focus();
		$("#contact_error_rent").html("Contact Required");
		allOk=0;
	}
	if(!phoneRegex.test(contact))
	{
		$("#contact_post_rent").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#contact_post_rent").focus();
		$("#contact_error_rent").html("Phone number should contain only 10 digits");
		allOk=0;
	}
		
	if($("#price_post_rent").val()=="")
	{
		$("#price_post_rent").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#price_post_rent").focus();
		$("#price_error_rent").html("Price Required");
		allOk=0;
	}
	if(!priceRegex.test(price))
	{
		$("#price_post_rent").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#price_post_rent").focus();
		$("#price_error_rent").html("Enter digits only in Price");
		allOk=0;
	}	
	if($("#city_post_rent").val()=="")
	{
		$("#city_post_rent").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
    	$("#city_post_rent").focus();
		$("#city_error_rent").html("City required");
		allOk=0;
	}
	
	if($("#address_post_rent").val()=="")
	{
		$("#address_post_rent").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#address_post_rent").focus();
		$("#address_error_rent").html("Address Required");
		allOk=0;
	}
	
	if(allOk==1)		//all validated
	{
		document.forms["formPostRent"].submit();
	}
}





