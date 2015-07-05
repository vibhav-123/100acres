$(document).ready(function() {
        $("#type").change(function(){
            if($('#type').find(":selected").text()=="Rent")
			{
            
				hidePG();
                showBuyRent();
                $("#furnishedTable").show(1);
			}
            else if($('#type').find(":selected").text()=="PG")
            {
            	
            	hideBuyRent();
				$("#furnishedTable").hide(1);
				showPG();
				//myfunction();
            }
            else
            {
            	hidePG();
            	showBuyRent();
            	$("#furnishedTable").hide(1);
            }
                
        }); 
    });

    function hidePG()
    {
		$("#pgDiv").hide(1);	
	}

    function showPG()
    {
		$("#pgDiv").show();	
	}

	function showBuyRent()
	{
		$("#rentDiv").show(1);
	}

	function hideBuyRent()
	{
		$("#rentDiv").hide(1);
	}

function filterSearch()
{
	var location=$("#location").val();
	if(location=="")
	{
		alert("Error Location not specified");
		return false;
	}
	var minprice=$("#minprice").find(":selected").text().toLowerCase();
	var maxprice=$("#maxprice").find(":selected").text().toLowerCase();
	var type=$('#type').find(":selected").text().toLowerCase();
	var city=$('#city').find(":selected").text();
	var ownership=$("#ownership").find(":selected").text().toLowerCase();
	var url= "http://www.100acres.com/search/getResults?&location="+location+"&city="+city;
	
	if(minprice !="any")
	{
		if(maxprice !="any")
		{
			if(minprice>maxprice)
				alert("Error. Minprice cannot be > MaxPrice");
			else
				url=url+"&minprice="+minprice+"&maxprice="+maxprice;
		}
		else
			url=url+"&minprice="+minprice;
	}
	else if (maxprice!="any")
	{
		url=url+="&maxprice="+maxprice;
	}
	if(ownership!="any")
	{
		url=url+"&ownership="+ownership;
	}	
	if(type=="pg")
	{
		var gender=$("#gender").find(":selected").text().toLowerCase();
		var sharing=$("#sharing").find(":selected").text().toLowerCase();
		if(sharing == "4+")
			sharing="other";
		url= url+"&gender="+gender;
		if(sharing!="any")
		{
			url=url+"&sharing="+sharing;
		}
		url=url+"&type=pg";
		window.location=url;
	}
	if(type=="buy"||type=="rent")
	{
		var propType=$("#propType").find(":selected").text().toLowerCase();
		if(propType!="any")
		{
			url=url+"&propType="+propType;
		}
		var builtType=$("#builtType").find(":selected").text().toLowerCase();
		if(builtType!="any")
		{
			url=url+"&builtType="+builtType;
		}
		var constructionStatus=$("#consStatus").find(":selected").text().toLowerCase().replace(/ /g,'');
		if(constructionStatus!="any")
		{
			url=url+"&consStatus="+constructionStatus;
		}
		var bhk=$("#bedrooms").find(":selected").text().toLowerCase().replace(/ /g,'');
		if(bhk!="any")
		{
			if(bhk=="morethan3")
				bhk="other";
			url=url+"&bedrooms="+bhk;
		}
		if(type=="buy")
		{
			url=url+"&type=buy";
			window.location=url;
		}
		else
		{
			var furniture=$("#furniture").find(":selected").text().toLowerCase().replace(/ /g,'');
			if(furniture!="any")
				url=url+"&furniture="+furniture;
			url=url+"&type=rent"
			window.location=url;
		}
	}
}

function viewPhoneNumber(pid,modeOfProperty)
{
	$.get("http://www.100acres.com/index.php/user/checkSessionSet",
		function(data,status){
			data=data.replace(/(\r\r|\n|\r)/gm,"");
			if(data=="Success")
			{				
				$.post("http://www.100acres.com/property_c/getNumber",
				{
					postID : pid,		
					mode   : modeOfProperty
				},
				function(data,success)
				{					
					if(data != "Error")
					{
						alert("The phone number is :"+data);					
					}
					else
						alert("There was an error in getting the number");
				});
			}
			else
			{
				showTempRegister(pid,modeOfProperty);
			}
		});
}

function showTempRegister(pid,modeOfProperty)
{
	$("#tempRegister").show(150);
	$("#cover").show(149);
	$("#pidDiv").val(pid);
	$("#modeDiv").val(modeOfProperty);
}


function hideAll()
{
	$("#cover").slideUp();
	$("#tempRegister").hide(150);
}

function submitTempRegister()
{
	var allOk=1;	
	if($("#email_temp").val()=="")
	{
		allOk=0;
	}
	
	if($("#email_temp").val()=="")
	{
		allOk=0;
	}

	if($("#email_temp").val()=="")
	{
		allOk=0;
	}
	
	if(allOk==1)
	{
		$.post("http://www.100acres.com/index.php/user/registerTempUser",
		{
			name: $("#name_temp").val(),
			email: $("#email_temp").val(),
			contact: $("#contact_temp").val()
		},
		function(data,status)
		{
			data=data.replace(/(\r\r|\n|\r)/gm,"");
			if(data!="Error"){			
			$.post("http://www.100acres.com/property_c/getNumber",
			{
				postID : $("#pidDiv").val(),		
				mode   : $("#modeDiv").val(),
				userID : data
			},
			function(data,success)
			{					
				if(data != "Error")
				{
					alert("The phone number is :"+data);	
					hideAll();				
				}
				else
					alert("There was an error in getting the number");
			});
			}
			else
				alert("There was an error in getting the number" + data);
		});
			
	}
}
