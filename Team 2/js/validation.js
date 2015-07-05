function LogSubmit($welcomeControllerValidateLoginPath)
{
	blankLoginErrors();
	resetLoginStyles();
	var allOk=1;
	var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	var email1 = $("#email_login").val();
	var pwrd1 = $("#pwrd_login").val();
    	
	if($("#email_login").val() == "" )
    {
		$("#email_login").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#email_login").focus();
		$("#email_error_log").html("Enter the email");
		allOk=0;
    } 
	
	if(!emailRegex.test(email1))
	{
		$("#email_login").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});    
		$("#email_login").focus();
		$("#email_error_log").html("Enter a valid email");
		allOk=0;
	}
    	 
	if($('#pwrd_login').val() == "")
	{
		$("#pwrd_login").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
		$("#pwrd_login").focus();
		$("#pwrd_error_log").html("Enter the password");
		allOk=0;
  	}
	if(allOk==1) 
    {
    	$.post($welcomeControllerValidateLoginPath,
    	    	{
    	    		email : email1,
    	    		password :	pwrd1
    	    	},
    	    	function(data,status)
    	    	{
    	    		data=data.replace(/(\r\r|\n|\r)/gm,"");
    	    		if(data=="Success")
    	    		{
    	    			location.reload();			
    	    		} 
    	    		else
    	    		{
    	    			$("#pwrd_error_log").text(data);
    	    			$("#pwrd_login").text("");
    	    			$("#pwrd_login").focus();
    	    		}
    				});
    }
    else
    	return false;
}



function RegSubmit(registerUserPath) 
{
	blankRegisterErrors();
	resetRegisterStyles();
	var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	var email1 = $("#email_reg").val();
	var pwrd1 = $("#pwrd_reg").val();
	var repwrd = $("#repwrd_reg").val();
	var name1 = $("#name_reg").val();
	var type1 = $("#select_type").val();
	var contact1=$("#contact_reg").val();
	var allOk=1;
	
	if($("#email_reg").val() == "" )
    {
		$("#email_reg").focus();
		$("#email_reg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
		$("#email_error_reg").html("Enter the email");
		allOk=0;
    }  

	if(!emailRegex.test(email1))
	{
		$("#email_reg").focus();
		$("#email_reg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
		$("#email_error_reg").html("Enter a valid email");
		allOk=0;
    }
	
	if($('#pwrd_reg').val() == "")
	{
		$("#pwrd_reg").focus();
		$("#pwrd_reg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
		$("#pwrd_error_reg").html("Enter the password");
		allOk=0;
	}
    	 
	if($('#repwrd_reg').val() == "")
	{
		$("#repwrd_reg").focus();
		$("#repwrd_reg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
		$("#repwrd_error_reg").html("Enter the password");
		allOk=0;
	}
	
	if($('#pwrd_reg').val() != $('#repwrd_reg').val())
	{
		$("#pwrd_reg").focus();
		$("#pwrd_reg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
		$("#repwrd_error_reg").html("Passwords do not match!");
		allOk=0;
	}
    	 
	if($('#contact_reg').val() == "")
	{
		$("#contact_reg").focus();
		$("#contact_reg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
		$("#contact_error_reg").html("Enter the contact number");
		allOk=0;
	}
	if($('#name_reg').val() == "")
	{
		$("#name_reg").focus();
		$("#name_reg").css({"box-shadow":"0 0 10px red","border-color":"red","outline": "none"});
		$("#name_error_reg").html("Enter your name");
		allOk=0;
	}
    
	if(allOk==1) 
    {
		$.post(registerUserPath,
		{
			email : email1,
			password :	pwrd1,	
			contact:contact1,
			type:type1,
			name:name1
		},
		function(data,status){
			alert(data + "\nStatus : " +status); 
		});
		return true;
    }
    else
    	return false;
   }

function submitSearch()
{
	allOk=1;
	var url=""
	if($("#location").val()=="")
	{
		allOk=0;
		$("#error_location").show(1);
		return false;
	}
	var city=$('#city').find(":selected").text().toLowerCase();
	var location=$("#location").val();
	var url= "http://www.100acres.com/search/getResults?&location="+location+"&city="+city;
	if($mode=="rent")
	{
		url=url+"&type=rent";
		if(!$downRentSearch)
		{
			window.location=url;
		}
		else
		{
			var minprice=$("#minPriceRent").find(":selected").text().toLowerCase();
			var maxprice=$("#maxPriceRent").find(":selected").text().toLowerCase();
			if(minprice.indexOf('k') !=-1)
			{
				minprice=parseInt(minprice.substr(0,minprice.indexOf('k')))*1000;
			}
			else if(minprice.indexOf('lac') !=-1)
			{
				minprice=parseInt(minprice.substr(0,minprice.indexOf('lac')))*100000;
			}
			if(maxprice.indexOf('k') !=-1)
			{
				maxprice=parseInt(maxprice.substr(0,maxprice.indexOf('k')))*1000;
			}
			else if(maxprice.indexOf('lac') !=-1)
			{
				maxprice=parseInt(maxprice.substr(0,maxprice.indexOf('lac')))*100000;
			}
			
			var ownership=$("#posterTypeRent").find(":selected").text().toLowerCase();
			var propType=$("#propTypeRent").find(":selected").text().toLowerCase();
			var builtType=$("#builtTypeRent").find(":selected").text().toLowerCase();
			var consStatus=$("#consStatusRent").find(":selected").text().toLowerCase().replace(/ /g,'');
			var bedrooms=$("#bedRoomsRent").find(":selected").text().toLowerCase().replace(/ /g,'');
			if(bedrooms=="morethan3")
				bedrooms="other";
			
			if(minprice!="any")
			{
				url=url+"&minprice="+minprice;
			}
			
			if(maxprice!="any")
			{
				url=url+"&maxprice="+maxprice;
			}
			
			if(builtType!="any")
			{
				url=url+"&builtType="+builtType;
			}
			
			if(propType!="any")
			{
				url=url+"&propType="+propType;
			}
			
			if(ownership!="any")
			{
				url=url+"&ownership="+ownership;
			}
			if(consStatus!="any")
			{
				url=url+"&consStatus="+consStatus;
			}
			if(bedrooms!="any")
			{
				url=url+"&bedrooms="+bedrooms;
			}
		}
		window.location=url;
	}
	else
	if($mode=="buy")
	{
		url=url+"&type=buy";
		if(!$downBuySearch)
		{
			window.location=url;
		}
		else
		{
			var minprice=$("#minPriceBuy").find(":selected").text().toLowerCase();
			var maxprice=$("#maxPriceBuy").find(":selected").text().toLowerCase();
			if(minprice.indexOf('k') !=-1)
			{
				minprice=parseInt(minprice.substr(0,minprice.indexOf('k')))*1000;
			}
			else if(minprice.indexOf('lac') !=-1)
			{
				minprice=parseInt(minprice.substr(0,minprice.indexOf('lac')))*100000;
			}
			if(maxprice.indexOf('k') !=-1)
			{
				maxprice=parseInt(maxprice.substr(0,maxprice.indexOf('k')))*1000;
			}
			else if(maxprice.indexOf('lac') !=-1)
			{
				maxprice=parseInt(maxprice.substr(0,maxprice.indexOf('lac')))*100000;
			}
			
			var ownership=$("#posterTypeBuy").find(":selected").text().toLowerCase();
			var propType=$("#propTypeBuy").find(":selected").text().toLowerCase();
			var builtType=$("#builtTypeBuy").find(":selected").text().toLowerCase();
			var consStatus=$("#consStatusBuy").find(":selected").text().toLowerCase().replace(/ /g,'');
			var bedrooms=$("#bedRoomsBuy").find(":selected").text().toLowerCase().replace(/ /g,'');
			if(bedrooms=="morethan3")
				bedrooms="other";
			
			if(minprice!="any")
			{
				url=url+"&minprice="+minprice;
			}
			
			if(maxprice!="any")
			{
				url=url+"&maxprice="+maxprice;
			}
			
			if(builtType!="any")
			{
				url=url+"&builtType="+builtType;
			}
			
			if(propType!="any")
			{
				url=url+"&propType="+propType;
			}
			
			if(ownership!="any")
			{
				url=url+"&ownership="+ownership;
			}
			if(consStatus!="any")
			{
				url=url+"&consStatus="+consStatus;
			}
			if(bedrooms!="any")
			{
				url=url+"&bedrooms="+bedrooms;
			}
		}
		window.location=url;
	}
	else
	{
		url=url+"&type=pg";
		if(!$downPGSearch)
		{
			window.location=url;
		}
		else
		{
			var minprice=$("#minPricePG").find(":selected").text().toLowerCase();
			var maxprice=$("#maxPricePG").find(":selected").text().toLowerCase();
			if(minprice.indexOf('k') !=-1)
			{
				minprice=parseInt(minprice.substr(0,minprice.indexOf('k')))*1000;
			}
			else if(minprice.indexOf('lac') !=-1)
			{
				minprice=parseInt(minprice.substr(0,minprice.indexOf('lac')))*100000;
			}
			if(maxprice.indexOf('k') !=-1)
			{
				maxprice=parseInt(maxprice.substr(0,maxprice.indexOf('k')))*1000;
			}
			else if(maxprice.indexOf('lac') !=-1)
			{
				maxprice=parseInt(maxprice.substr(0,maxprice.indexOf('lac')))*100000;
			}
			
			var ownership=$("#posterTypeBuy").find(":selected").text().toLowerCase();
			var gender=$("#genderPG").find(":selected").text().toLowerCase();
			var sharing=$("#sharingPG").find(":selected").text().toLowerCase();
			if(sharing == "4+")
				sharing="other";
			if(minprice!="any")
			{
				url=url+"&minprice="+minprice;
			}
			
			if(maxprice!="any")
			{
				url=url+"&maxprice="+maxprice;
			}
			
			if(sharing !="any")
			{
				url=url+"&sharing="+sharing;
			}
			if(gender !="any")
			{
				url=url+"&gender="+gender;
			}
				
		}
		window.location=url;

	}
	
}